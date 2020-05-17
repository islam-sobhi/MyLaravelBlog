<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use File;

use App\Category;
use App\Post;
use App\User;
use App\Tag;
use Auth;

class PostController extends Controller
{
  // public function __construct()
  // {
  //     $this->middleware(['role:super_admin']);
  // }

    public function index()
    {
      return View('posts.index')->with('posts', Post::orderBy('created_at','Desc')->get())
                                ->with('last_post', Post::orderBy('created_at','Desc')->first());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories=Category::all();
        $tags=Tag::all();
      if ($categories->count()==0) {
      return  redirect('category/create');
      }

      if ($tags->count()==0) {
      return  redirect('tags/create');
      }
        return view('posts/create')->with("categories",$categories)
        ->with("tags",$tags);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


      //  dd($request->all());
        $this->validate($request,[
          "category_id"=>"required",
          "title" => "required",
          // "post_auth" => "required",
          "content" => "required",
          "featured" => "required|image",

            "tags" => "required",

        ]);
        //
        $featured=$request->featured;
        $featured_new_name=time().$featured->getClientOriginalName();
        $featured->move('upload/posts',$featured_new_name);

        $post=Post::create([
          "category_id"=>$request->category_id,
          "title" =>$request->title,
          // "post_auth" =>$request->post_auth,
          "content" =>$request->content,
          "slug"=>str_slug($request->title),// my new post => my-new-post
          "featured" =>'upload/posts/'.$featured_new_name ,
          "user_id"=>Auth::id()
        ]);

        $post->tags()->attach($request->tags);
          return redirect()->back();
    //   dd($request->all());

    }


    public function show($id)
    {
       $post= Post::find($id);
           return View('posts.edit')->with("post",$post)
                                    ->with("categories",Category::all())
                                    ->with("tags",Tag::all());

      }

  
  
    public function edit($id)
    {
      $post= Post::find($id);
           return View('posts.edit')->with("post",$post)
                                    ->with("categories",Category::all())
                                    ->with("tags",Tag::all());

    }


 

    public function update(Request $request, $id)
    {

      $this->validate($request,[
         "category_id"=>"required",
         "title" => "required",
         "content" => "required",
         "tags" => "required",

       ]);
       $post= Post::find($id);

       if ($request->hasFile("featured")) {
            $featured=$request->featured;
            $featured_new_name=time().$featured->getClientOriginalName();
            $featured->move('upload/posts',$featured_new_name);
            $post->featured=$featured_new_name;
            $post->featured = 'upload/posts/'.$featured_new_name;
       }
       $post->category_id =$request->category_id;
       $post->title= $request->title;
       // $post->post_auth= $request->post_auth;
       $post->content = $request->content;
       $post->slug= str_slug($request->title);// my new post => my-new-post

        $post->save();
        $post->tags()->sync( $request->tags);
        return redirect()->back();


    }

 
 
    public function destroy($id)
    {
        $post= Post::find($id);   
        $post->delete();
       return redirect()->back();
   
    }

    public function trashed()
    {
      $post= Post::onlyTrashed()->get();
      return View('posts.softDeletes')->with("posts",$post);
    //return redirect()->back();
    }

    public function Restore($id)
    {
      $post= Post::withTrashed()->where('id', $id)->first();
      $post->restore();
    return redirect()->route('posts.index');

    }

    public function hdelete($id)
    {

      $post= Post::withTrashed()->where('id', $id)->first();
       $image=$post->featured;
       $image_path = explode('/upload/posts/', $image);
       $image_path2=  $image_path['1'];
       $image_path3 ="/upload/posts/".$image_path2;
        if(file_exists(public_path($image_path3))){
          \File::delete(public_path($image_path3));
          $post->forceDelete();

        }else{
               //  dd('File does not exists.');
        }

                       return readdir;
    
    }



}

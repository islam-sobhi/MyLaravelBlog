<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Tag;
use App\Post;
use App\User;
use Illuminate\Support\Str;


class SiteUIcontroller extends Controller
{





    public function index(){

      return View('welcome')->with('blog_name', Setting::first()->blog_name)
                            ->with('categories', Category::all())
                            ->with('tags', Tag::all())
                             ->with('posthead', Post::all())
                             
                             ->with('postsAll', Post::all())
                             ->with('ffposts', Post::orderBy('created_at','Desc')->take(1)->get()->first())
                             ->with('sposts', Post::orderBy('created_at','Desc')->skip(1)->take(1)->get()->first())
                              ->with('tposts', Post::orderBy('created_at','Desc')->skip(2)->take(1)->get()->first())
                              ->with('fposts', Post::orderBy('created_at','Desc')->skip(3)->take(1)->get()->first())
                              ->with('python', Category::find(4))
                              ->with('laravel', Category::find(6))
                              ->with('java', Category::find(1))
                              ->with('iot', Category::find(1))
                               ->with('slide1', Post::orderBy('created_at','Desc')->take(3)->get())
                              ->with('slide2', Post::orderBy('created_at','Desc')->skip(3)->take(3)->get())
                              ->with('galery', Post::orderBy('created_at','Desc')->take(6)->get())
                              ->with('setting', Setting::first())
                              ->with('categoryfooter', Category::orderBy('created_at','Desc')->take(6)->get()->first());
    }


    public function showPost($slug){
      $post=Post::where('slug',$slug)->first();
      $next_page=Post::where('id','>',$post->id)->min('id');
      $prev_page=Post::where('id','<',$post->id)->max('id');
      return View('posts.show')->with('post',$post)
                                ->with('next',Post::find($next_page))
                                ->with('prev' , Post::find($prev_page))
                               ->with('blog_name', Setting::first()->blog_name)
                               ->with('categories', Category::all())
                               ->with('tags', Tag::all())
                               ->with('setting', Setting::first());
    }



    public function category($id) {

      $category=Category::find($id) ;

      return View('categories.show')->with('cat',$category)
                                    ->with('blog_name', Setting::first()->blog_name)
                                    ->with('categories', Category::all())
                                    ->with('tags', Tag::all())
                                    ->with('setting', Setting::first());

    }


    public function tag($id) {

      $tag=Tag::find($id) ;

      return View('tags.show')->with('tagss',$tag)
                                    ->with('blog_name', Setting::first()->blog_name)
                                    ->with('categories', Category::all())
                                    ->with('tags', Tag::all())
                                    ->with('setting', Setting::first());

    }


    public function author($id) {

      $user=User::find($id) ;
    //  dd($user);
      return View('users.author')->with('author',$user)
                                    ->with('blog_name', Setting::first()->blog_name)
                                    ->with('categories', Category::all())
                                    ->with('tags', Tag::all())
                                    ->with('setting', Setting::first());

    }


}

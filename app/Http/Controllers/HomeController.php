<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Setting;
use App\Category ;
use App\Post ;
use App\User ;
use App\Tag ;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
      public function __construct()
     {
         $this->middleware(['auth', 'verified']);
     }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $post = DB::table('posts')->where('user_id', Auth::id())->get();
                return view('home')->with('blog_name', Setting::first()->blog_name)
                              ->with('posts', post::all())
                              ->with('post', $post)
                              ->with('categories', Category::all())
                              ->with('tags', Tag::all())
                              ->with('users', User::all())
                               ->with('last_post', Post::orderBy('created_at','Desc')->first())
                               ->with('last_cat', Post::orderBy('created_at','Desc')->first())
                               ->with('last_tag', Post::orderBy('created_at','Desc')->first())
                               ->with('last_user', Post::orderBy('created_at','Desc')->first()) ;

    }
}

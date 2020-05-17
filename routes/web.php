

<?php


use App\Mail\TestEmail;
 //Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/redirect/{service}', 'SocialAuthController@redirect');
Route::get('/callback/{service}', 'SocialAuthController@callback');


// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'], function(){

//tag
  Route::post('/tag/store', 'TagController@store')->name('tag.store');
  Route::get('/tags/create', 'TagController@create')->name('tag.create');
  Route::get('/tags/index', 'TagController@index')->name('tag.index');
  Route::get('/tag/edit/{id}', 'TagController@edit')->name('tag.edit');
  Route::get('/tag/delete/{id}', 'TagController@destroy')->name('tag.delete');
  Route::post('/tag/update/{id}', 'TagController@update')->name('tag.update');


//Category
  Route::get('category/create', 'CategoryController@create')->name('category.create');
  Route::post('/category/store', 'CategoryController@store')->name('category.store');
  Route::get('/category/index', 'CategoryController@index')->name('category.index');
  Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
  Route::get('/category/delete/{id}', 'CategoryController@destroy')->name('category.delete');
  Route::post('/category/update/{id}', 'CategoryController@update')->name('category.update');

//post

  Route::post('/post/store', 'PostController@store')->name('post.store');
  Route::get('/post/create', 'PostController@create')->name('post.create');
  Route::get('/posts/index', 'PostController@index')->name('posts.index');
  Route::get('/post/delete/{id}', 'PostController@destroy')->name('post.delete');
  Route::get('/post/edit/{id}', 'PostController@edit')->name('post.edit');
  Route::post('/post/update/{id}', 'PostController@update')->name('post.update');
  Route::get('/posts/softDeletes', 'PostController@trashed')->name('posts.trashed');
  Route::get('/post/Restore/{id}', 'PostController@Restore')->name('post.Restore');
  Route::get('/post/hdelete/{id}', 'PostController@hdelete')->name('post.hdelete');


//Users
Route::get('users/index', 'UsersController@index')->name('users/index');
Route::get('/users/delete/{id}', 'UsersController@destroy')->name('users.delete');
Route::get('/users/create', 'UsersController@create')->name('users.create');
Route::post('/users/store', 'UsersController@store')->name('users.store');

Route::get('/users/admin/{id}', 'UsersController@admin')->name('users.admin');
Route::get('/users/Notadmin/{id}', 'UsersController@Notadmin')->name('users.Notadmin');

Route::put('/users/update/{id}', 'UsersController@update')->name('users.update');
Route::get('/users/edit/{id}', 'UsersController@edit')->name('users.edit');
 Route::get('/profile/show/{id}', 'ProfileController@show')->name('users.profile');
Route::post('/profile/update/{id}', 'ProfileController@update')->name('profile.update');

 Route::get('/shprofile/show/{id}', 'ProfileController@shprofile')->name('users.shprofile');

});
// Settings
Route::get('/setting/create', 'SettingController@index')->name('setting.create');
Route::post('/setting/update/', 'SettingController@update')->name('setting.update');




Route::get('/test/email', function () {

    $data = array(
        'name' => " Islam Sobhi",
    );
    
    Mail::send('emails.test', $data, function ($message) {

        $message->from('islam.sobhi61@gmail.com', 'Learning Laravel');
        $message->to('islam.sobhi61@gmail.com')->subject('Learning Laravel test email');

    });

    return "Your email has been sent successfully";

});

//  Route::resource('users/user', 'UsersController');


Route::get('/test/email', function(){

  $data = ['message' => 'This is a test!'];
 Mail::to('islam.sobhi61@gmail.com')->send(new TestEmail($data));
  // return back();
  return Redirect::route('home');
})->name('test.email');

  
// site setting



Route::get('/', 'SiteUIcontroller@index')->name('index');
Route::get('/show/{slug}', 'SiteUIcontroller@showPost')->name('post.show');
Route::get('/category/{id}', 'SiteUIcontroller@category')->name('categories.show');
Route::get('/tag/{id}', 'SiteUIcontroller@tag')->name('tag.show');
Route::get('create-newsletter','NewsletterController@create');
Route::post('store-newsletter','NewsletterController@store');

Route::get('/author/{id}', 'SiteUIcontroller@author')->name('author.show');

Route::get('/results/result', function () {
  if(request('search')){
        $post=App\Post::where('title','like', '%' .request('search') . '%')->get();
        return view('results.result')->with('posts',$post)
                                ->with('blog_name', App\Setting::first()->blog_name)
                                ->with('categories', App\Category::all())
                                ->with('tags', App\Tag::all())
                                ->with('title', request('search'))
                                ->with('setting', App\Setting::first())
                                ->with('query',request('search'));
      }
  else{
      return Redirect::route('index');
  }

});







Route::get('/ajaxRequest', 'AjaxController@ajaxRequest');
Route::post('/ajaxRequest', 'AjaxController@ajaxRequestPost');

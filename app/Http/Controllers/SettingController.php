<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class SettingController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

    public function index()
    {
        return View('settings.setting')->with("setting",Setting::first());
    }


    public function update(Request $request )
    {

      $this->validate($request,[
        "blog_name"=>"required",
        "phone_number" => "required",
        "blog_email" => 'required|email',
        "address" => "required"
      ]);

    $setting = Setting::first();
      $setting->blog_name= $request->blog_name;
      $setting->phone_number = $request->phone_number;
      $setting->blog_email= str_slug($request->blog_email);// my new post => my-new-post
      $setting->address =  $request->address;
    $setting->save();
    return redirect()->back();

    }


}

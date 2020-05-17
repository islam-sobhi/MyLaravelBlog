<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Role;
use Auth;
class UsersController extends Controller
{

  public function __construct()
  {
      $this->middleware(['role:super_admin']);
  }

  public function index()
  {
    return View('users.index')->with('users', User::all());
  }



  public function create()
  {
    return view('users.create');
  }



  public function store(Request $request)
  {
    $this->validate($request,[
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:6|confirmed',
    ]);

    $user=User::create([
      'name'=>$request->name,
      'email'=>$request->email,
      'password'=>bcrypt($request->password),
    ]);
    $profile=Profile::create([
      'user_id'=>$user->id,
      'avatar'=>'upload/avatar/1.png'

    ]);

    $user->attachRole('user');
    return Redirect()->back();

  }

  

  
  public function show($id)
  {
    //
  }


  public function edit($id)
  {
     $user=User::find($id);
        return view('users/edit')->with('user',$user)
                                 ->with('roles', Role::all());

  }



  public function update(Request $request , $id)
  {

    $request->validate([
      'name'=>"required",
      'roles'=>"required|array|min:1"
    ]);
 
   // dd($user);

   $user=User::find($id);
    $requestData=$request->except('email');
    $user->update($requestData);
    $user->syncRoles($request->roles);
      return view('users/index')->with('users', User::all()); 
  }





  public function destroy($id)
  {
    $user= User::find($id);
     $user =  User::where('id', $id)->delete();
    return redirect()->back();
  }

  public function admin($id)
  {
    $user= User::find($id);
    $user->admin=1;
    $user->save();
    return redirect()->back();
  }
  public function Notadmin($id)
  {
    $user= User::find($id);
    $user->admin=0;
    $user->save();
    return redirect()->back();
  }


}
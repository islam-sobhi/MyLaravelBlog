<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Profile ;
class ProfileController extends Controller
{
   
   

    public function index()
    {
        // return View('users.profile')->with('users', User::all());   
     }

  
  
    public function create()
    {
          $users=Auth::user();
      // dd($users->id) ;
       // return View('users.profile')->with('users', User::all());
       
    }

 
 

    public function store(Request $request)
    {
        //
    }

  
  
    public function show($id)
    {
        $user= User::find($id);
        //  dd( $user->profile);

     
        if($user->profile){
            return View('users.profile')->with('users',$user);  
        }else{
             $profile=Profile::create([
            'user_id'=>$user->id,
            'avatar'=>'upload/avatar/1.png'
           ]);

        }

   }


    public function shprofile($id)
    {
        $user= User::find($id);
        //  dd( $user->profile);
        if($user->profile){
            return View('users.showprofile')->with('users',$user);  
        }else{
             $profile=Profile::create([
            'user_id'=>$user->id,
            'avatar'=>'upload/avatar/1.png'
           ]);

        }

   }



 
 
 
    public function edit($id)
    {
        $user= User::find($id);
         return View('users.profile')->with('users',$user); 

       //dd($user->profile) ;
   }

  
  
    public function update(Request $request ,$id )
    {

        $user=User::find($id );
        $profid=$user->profile->id;
     $profile=Profile::find($profid);
 // dd($request->name);

        

         if ($request->hasFile("featured")) {
            $featured=$request->featured;
            $featured_new_name=time().$featured->getClientOriginalName();
            $featured->move('upload/avatar',$featured_new_name);
            $profile->avatar=$featured_new_name;
            $profile->avatar = 'upload/avatar/'.$featured_new_name;
      }
        $profile->user_id=$user->id;
        $profile->facebook=$request->facebook;
        $profile->twitter=$request->twitter;
        $profile->github=$request->github;
        $profile->about=$request->about;
        $user->name=$request->name;
        $profile->save();
         $user->save();
            return redirect()->back();

    }



    public function destroy($id)
    {
        //
    }
}

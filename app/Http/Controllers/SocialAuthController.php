<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Auth;
class SocialAuthController extends Controller
{
    //
    public function redirect($service)
    {
        //dd($service);
        return Socialite::driver($service)->redirect();
        
    }
 
    public function callback($service)
    {
        //$user = Socialite::with($service)->user();
        $user = Socialite::driver($service)->stateless()->user();
        //dd($user);
try {
    
         //   $user = Socialite::driver('google')->user();
     
            $finduser = User::where('google_id', $user->id)->first();
     
            if($finduser){
     
                Auth::login($finduser);
    
                return redirect('/home');
     
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
    
                Auth::login($newUser);
     
                return redirect('/home');
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return view ('home')->withDetails($user)->withService ($service);
    }



    //   /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function redirectToGoogle()
    // {
    //     return Socialite::driver('google')->redirect();
    // }
      
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function handleGoogleCallback()
    // {
    //     try {
    
    //         $user = Socialite::driver('google')->user();
     
    //         $finduser = User::where('google_id', $user->id)->first();
     
    //         if($finduser){
     
    //             Auth::login($finduser);
    
    //             return redirect('/home');
     
    //         }else{
    //             $newUser = User::create([
    //                 'name' => $user->name,
    //                 'email' => $user->email,
    //                 'google_id'=> $user->id,
    //                 'password' => encrypt('123456dummy')
    //             ]);
    
    //             Auth::login($newUser);
     
    //             return redirect('/home');
    //         }
    
    //     } catch (Exception $e) {
    //         dd($e->getMessage());
    //     }
    // }

}

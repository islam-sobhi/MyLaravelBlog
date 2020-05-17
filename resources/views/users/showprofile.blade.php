@extends('layouts.app') @section('content')
<div class="container">



            @if($users->profile)
   
   

 <div class="offset-lg-4 col-lg-4 col-sm-6 col-12 main-section text-center">
          <div class="row">
              <div class="col-lg-12 col-sm-12 col-12 profile-header">
              
              </div>
          </div>
          <div class="row user-detail">
              <div class="col-lg-12 col-sm-12 col-12">
                  <img src="/{{$users->profile->avatar}}" class="rounded-circle img-thumbnail">
                  <h5>{{$users->name}}</h5>
                  <p><i class="" aria-hidden="true"></i> {{$users->email}}</p>

                  <hr>
                  <a href="#" class="btn btn-success btn-sm">Follow</a>
                  <a href="#" class="btn btn-info btn-sm">Send Messege</a>

                  <hr>
                  <span>{{$users->profile->about}}</span>
              </div>
          </div>
          <div class="row user-social-detail">
              <div class="col-lg-12 col-sm-12 col-12">
  
                <ul class="contact-social"> <i class="far fa-user-circle"></i>
            <li><a href="{{asset($users->profile->facebook)}}" class="social-facebook"><i class='fab fa-facebook-f' ></i></a></li>
            <li><a href="{{asset($users->profile->twitter)}}" class="social-twitter"><i class='fab fa-twitter' ></i></a></li>
            <li><a href="{{asset($users->email)}}" class="social-google-plus"><i class="fab fa-google	"></i></a></li>
         
            <li><a href="{{asset($users->profile->github)}}" class="social-instagram">   <i class='fab fa-github' style=''></i></a></li>
          </ul>


              </div>
          </div>
      </div>


          @else
          <div class="card-heading">Your profile not Found!!!</div>



          @endif
      
      
</div>
@endsection
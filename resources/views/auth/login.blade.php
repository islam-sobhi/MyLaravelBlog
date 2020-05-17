<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="none" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="admin login">
    <title>Admin</title>
        <link rel="stylesheet" href="{{asset('/css/rtl.css') }}">
    <link rel="stylesheet" href="{{asset('/css/app2.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
    <style>
        body {
            background-image:url('{{asset("img/bg.jpg")}}'),url('{{asset("img/hot-post-1.jpg")}}');
            background-color:#FFFFFF;
            direction: rtl;
              background-position: right bottom, left top;
  background-repeat: no-repeat, repeat;
        }
        body.login .login-sidebar {
            border-top:5px solid  #22A7F0 ;
        }
        @media (max-width: 767px) {
            body.login .login-sidebar {
                border-top:0px !important;
                border-left:5px solid  #22A7F0;
            }
        }
        body.login .form-group-default.focused{
            border-color:#22A7F0;
        }
        .login-button, .bar:before, .bar:after{
            background: #22A7F0;
        }
        .remember-me-text{
            padding:0 5px;
        }
        #myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
   background-position: right bottom, left top;
  background-repeat: no-repeat, repeat;
}
    </style>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
</head>
<body class="login">
    <video autoplay muted loop id="myVideo">
  <source src="/img/Mt_Baker.mp4" type="video/mp4" loop>
</video>
<div class="container-fluid">
    <div class="row">
        <div class="faded-bg animated"></div>
        <div class="hidden-xs col-sm-7 col-md-8">
            <div class="clearfix">
                <div class="col-sm-12 col-md-10 col-md-offset-2">
                    <div class="logo-title-container">
                  
                        <div class="copy animated fadeIn">
      
                        </div>
                    </div> <!-- .logo-title-container -->
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-5 col-md-4 login-sidebar"  style="position: absolute;">

            <div class="login-container">


  <form method="POST" action="{{ route('login') }}" style="direction: ltr;">
                        @csrf  
                    <div class="form-group form-group-default" id="emailGroup">
                        <label>Email</label>
                        <div class="controls">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                         </div>
                    </div>

                    <div class="form-group form-group-default" id="passwordGroup">
                        <label>password</label>
                        <div class="controls">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        </div>
                    </div>

                    <div class="form-group" id="rememberMeGroup">
                        <div class="controls" style="direction: ltr;">
                                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                           <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                     
                                     @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password ?') }}
                                    </a>
                                @endif 
                         
                        </div>
                    </div>
                 
                 @captcha

                    <button type="submit" class="btn btn-block login-button">
                        <span class="signingin hidden"><span class="voyager-refresh"></span>loggingin </span>
                        <span class="signin">  {{ __('Login') }}</span>
                    </button>

              </form>

               <div class="form-group" id="rememberMeGroup">
                        <div class="controls">
                     
              <button class="btn btn-lg btn-google btn-block btn-danger" type="submit"><i class="fab fa-google mr-2"></i>
              <a href="redirect/google" style="color:white"> Sign in with Google</a>
               </button>
               <a href="redirect/facebook">
              <button class="btn btn-lg btn-facebook btn-block btn-primary" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
          </a>
                                    
                                    
                        </div>
                    </div>


              <div style="clear:both"></div>

              @if(!$errors->isEmpty())
              <div class="alert alert-red">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                    @endforeach
                </ul>
              </div>
              @endif

            </div> <!-- .login-container -->

        </div> <!-- .login-sidebar -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->
<script>
    var btn = document.querySelector('button[type="submit"]');
    var form = document.forms[0];
    var email = document.querySelector('[name="email"]');
    var password = document.querySelector('[name="password"]');
    btn.addEventListener('click', function(ev){
        if (form.checkValidity()) {
            btn.querySelector('.signingin').className = 'signingin';
            btn.querySelector('.signin').className = 'signin hidden';
        } else {
            ev.preventDefault();
        }
    });
    email.focus();
    document.getElementById('emailGroup').classList.add("focused");

    // Focus events for email and password fields
    email.addEventListener('focusin', function(e){
        document.getElementById('emailGroup').classList.add("focused");
    });
    email.addEventListener('focusout', function(e){
       document.getElementById('emailGroup').classList.remove("focused");
    });

    password.addEventListener('focusin', function(e){
        document.getElementById('passwordGroup').classList.add("focused");
    });
    password.addEventListener('focusout', function(e){
       document.getElementById('passwordGroup').classList.remove("focused");
    });

</script>
</body>
</html>

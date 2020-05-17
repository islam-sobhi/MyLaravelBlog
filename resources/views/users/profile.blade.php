@extends('layouts.app') @section('content')
<div class="container">
  <div class="d-flex justify-content-center">
    <div class="col-md-8 col-md-offset-2">


      <div class="card ">
        <div class="card-header  text-muted">Welcome {{$users->name }}</div>

        <div class="card-body">

          @if(count($errors)>0) @foreach ($errors->all() as $error)
          <p style="color:red;"> {{$error}} </p>

          @endforeach @endif @if($users->profile)
          <form method="post" action="{{route('profile.update',['id'=>$users->id])}}" enctype="multipart/form-data" role="form">
            {{csrf_field()}}

            <div class="form-group">
              <img class="rounded-circle z-depth-2" alt="100x100" width="100px" height="100px" src="/{{$users->profile->avatar}}" data-holder-rendered="true"><br>
              <label for="exampleFormControlFile1"> Avatar Profile</label>
              <input type="file" class="form-control-file" name="featured">

            </div>
                        

            <div class="form-group">
              <label for="exampleInputEmail1">Full Name </label>
              <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="{{$users->name}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">User Email </label>
              <input type="text" class="form-control" name="email" disabled aria-describedby="emailHelp" value="{{$users->email}}">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">About </label>
              <textarea class="form-control" name="about" id="exampleFormControlTextarea1" rows="3">{{$users->profile->about}}</textarea>
            </div>


            <!-- social media -->

            <div class="form-group">
              <label for="exampleInputEmail1">Facebook </label>
              <input type="text" class="form-control" name="facebook" aria-describedby="emailHelp" value="{{$users->profile->facebook}}">
            </div>


            <div class="form-group">
              <label for="exampleInputEmail1">twitter </label>
              <input type="text" class="form-control" name="twitter" aria-describedby="emailHelp" value="{{$users->profile->twitter}}">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">github </label>
              <input type="text" class="form-control" name="github" aria-describedby="emailHelp" value="{{$users->profile->github}}">
            </div>


              <button type="submit" class="btn btn-success" style="width:100%">Update</button>




          </form>
          @else
          <div class="card-heading">Your profile not Found!!!</div>



          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
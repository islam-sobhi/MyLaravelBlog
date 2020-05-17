@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center">
    
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Setting</div>

                <div class="panel-body">

                  @if(count($errors)>0)
                    @foreach ($errors->all() as $error)
                      <p style="color:red;"> {{$error}} </p>

                       @endforeach

                @endif


                  <form method="post" action="{{route('setting.update')}}" >
                    {{csrf_field()}}
                      <div class="form-group">
                        <label for="exampleInputEmail1">blog Name</label>
                        <input type="text" class="form-control" name="blog_name" aria-describedby="emailHelp" value="{{$setting->blog_name}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number </label>
                        <input type="text" class="form-control" name="phone_number" aria-describedby="emailHelp" value="{{$setting->phone_number}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" name="blog_email" aria-describedby="emailHelp" value="{{$setting->blog_email}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1"> address</label>
                        <input type="text" class="form-control" name="address" aria-describedby="emailHelp" value="{{$setting->address}}">
                      </div>

                  <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

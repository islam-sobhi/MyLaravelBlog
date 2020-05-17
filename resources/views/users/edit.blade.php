@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Roles User  {{$user->name}}</div>

                <div class="panel-body">

                  @if(count($errors)>0)
                    @foreach ($errors->all() as $error)
                      <p style="color:red;"> {{$error}} </p>

                       @endforeach

                @endif


            <form method="post" action="{{URL('users/update' , ['id'=>$user->id])}}" >
                 
            @csrf
             @method('PUT')
                      <div class="form-group">
                        <label for="exampleInputEmail1">User Name </label>
                        <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="{{$user->name}}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">User Email </label>
                        <input type="email" disabled class="form-control" name="email" aria-describedby="emailHelp" placeholder="{{$user->email}}">
                      </div>

                      <div class="form-check">
                        <label class="form-check-label">
                            @foreach($roles as $role)
                                <input type="checkbox"  value="{{$role->display_name}}" {{$user->hasRole($role->display_name)?'checked' : ''}} name="roles[]"
                                class="form-check-input">{{$role->display_name}}<br>
                          @endforeach
                        </label>
                      </div>
                  <button type="submit" class="btn btn-success">Update</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create User</div>

                <div class="panel-body">

                  @if(count($errors)>0)
                    @foreach ($errors->all() as $error)
                      <p style="color:red;"> {{$error}} </p>

                       @endforeach

                @endif


                  <form method="post" action="{{route('user.store')}}" >
                    {{csrf_field()}}
                      <div class="form-group">
                        <label for="exampleInputEmail1">User Name </label>
                        <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter User Name">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">User Email </label>
                        <input type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter user Email">
                      </div>

                  <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

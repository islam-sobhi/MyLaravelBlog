@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Post</div>

                <div class="panel-body">

                  @if(count($errors)>0)
                    @foreach ($errors->all() as $error)
                      <p style="color:red;"> {{$error}} </p>

                       @endforeach

                @endif


                  <form method="post" action="{{route('category.store')}}" >
                    {{csrf_field()}}
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name Category</label>
                        <input type="text" class="form-control" name="category" aria-describedby="emailHelp" placeholder="Enter Title Post">
                      </div>

                  <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

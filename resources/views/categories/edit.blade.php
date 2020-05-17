@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Category  {{$category->name}}</div>

                <div class="panel-body">

                  @if(count($errors)>0)
                    @foreach ($errors->all() as $error)
                      <p style="color:red;"> {{$error}} </p>

                       @endforeach

                @endif


                  <form method="post" action="{{route('category.update',['id'=>$category->id])}}" >
                    {{csrf_field()}}
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name Category</label>
                        <input type="text"  class="form-control" name="category" aria-describedby="emailHelp" placeholder="{{$category->name}}">
                      </div>

                  <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

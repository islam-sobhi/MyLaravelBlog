@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Post  {{$post->name}}</div>

                <div class="panel-body">

                  @if(count($errors)>0)
                    @foreach ($errors->all() as $error)
                      <p style="color:red;"> {{$error}} </p>

                       @endforeach

                @endif



                <form method="post" action="{{route('post.update',['id'=>$post->id])}}" enctype="multipart/form-data" role="form">
                  {{csrf_field()}}
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Categories</label>
                    <select class="form-control" name="category_id"  id="exampleFormControlSelect1">
                      @foreach ($categories as $category)
                      @if ($category->id ==$post->category_id )
                      <option value="{{$category->id}}" selected>{{$category->name}}</option>

                      @else

                         <option value="{{$category->id}}">{{$category->name}}</option>

                      @endif

   @endforeach
                    </select>
                  </div>



@foreach($tags as $tag)
                  <div class="form-check">

                    <label class="form-check-label">
                      <input type="checkbox" name="tags[]" class="form-check-input" value="{{$tag->id}}"

@foreach($post->tags as $ta)
    @if($tag->id==$ta->id))
                    checked
      @endif
                @endforeach
                > {{$tag->tag}}
              </label>

            </div>

@endforeach


                  <div class="form-group">
                    <label for="exampleInputEmail1">Title Post</label>
                    <input type="text" class="form-control" value="{{$post->title}}" name="title" aria-describedby="emailHelp" placeholder="">
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Content Post</label>
                    <textarea class="form-control"  name="content" rows="8" cols="8">
                        {{$post->content}}
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1"> features</label>
                    <input type="file" class="form-control-file" value="{{$post->featured}}" name="featured">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

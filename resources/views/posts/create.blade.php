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



                  <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data" role="form">
                    {{csrf_field()}}
                    <div class="form-group">
                         <label for="exampleFormControlSelect1">Categories</label>
                         <select class="form-control" name="category_id"  id="exampleFormControlSelect1">
                           @foreach ($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>

                              @endforeach

                         </select>
                     </div>
                      <label for="exampleFormControlSelect1">Tags</label>
@foreach ($tags as $tag)
                     <div class="form-check">

                       <label class="form-check-label">
                         <input type="checkbox" name="tags[]" class="form-check-input" value="{{$tag->id}}"> {{$tag->tag}}
                       </label>

                     </div>
 @endforeach

                      <div class="form-group">
                        <label for="exampleInputEmail1">Title Post</label>
                        <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="Enter Title Post">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Author Post</label>
                        <input type="text" class="form-control" name="post_auth" aria-describedby="text" placeholder="Enter Author Post">
                      </div>
                      <div class="container">
                    		@yield('content')

                    	<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                            <script>
                            CKEDITOR.replace( 'article-ckeditor' );
                            </script>
                            </div>
                      <div class="form-group">
                      <label for="exampleFormControlTextarea1">Content Post</label>
                      <textarea class="form-control" id="content" name="content" rows="8" cols="8"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1"> features</label>
                        <input type="file" class="form-control-file" name="featured">
                      </div>

                          <input type="hidden" class="form-control-file" name="user_id" value="{{ Auth::user()->id }}">

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
   $(document).ready(function() {
       $('#content').summernote();
   });
 </script>

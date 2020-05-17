@extends('layouts.app')

@section('content')
<div class="container">
<div class="row"  >
  <p>Posts Trashed</p>
      @if ($posts->count()>0)
      @foreach ($posts as $post)
         <div class="col-xs-6 col-sm-4 ">
           <div  class="mh-100">
           <div class="panel panel-danger">
               <div class="panel-heading"> <h5 class="card-title text-center">{{$post->title}}</h5></div>

               <div class="panel-body"style="width:100%;padding-bottom:0px;">
                 <img src="{{$post->featured}}" class="rounded mx-auto d-block" alt="..." height="200px" width="100%">
                 <p class="card-text">{{$post->content}}</p>
                 <h4 class="card-text" style="background-color:green;color:black">{{$post->deleted_at}}</h4>
                 <a class="btn btn-danger rounded float-left" style="width:100%;" href="{{route('post.hdelete',['id'=>$post->id])}}">
      Delete    </a>
      <a class="btn btn-success rounded float-left" style="width:100%" href="{{route('post.Restore',['id'=>$post->id])}}">
Restore    </a>
               </div>
               <div class="panel-footer"style="padding-top:0px;">

{{$post->deleted_at->diffForHumans()}}

               </div>
           </div>


         </div>
      </div>
          @endforeach


          @else

          <div class="alert alert-warning text-center" role="alert">
            <strong>No Have!</strong> Trashed Posts !!! .
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

     @endif


 </div>

</div>
@endsection

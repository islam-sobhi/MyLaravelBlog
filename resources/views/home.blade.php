 @extends('layouts.app') @section('content')
<div class="container">
  <div class="row">

    <div class="col-md-12 col-md-offset-2">

      <div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i> Dashboard </div>
        <div class="card-body">

              <div class="col-md-12 col-md-offset-4">

      <div class="card-group">

        <div class="card">
          <img src="img/head.gif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Posts</h5>

              <span class="counter"> {{$posts->count()}}</span>

          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated {{$last_post->created_at->diffForHumans()}}</small>
          </div>
        </div>
        <div class="card">
          <img src="img/head.gif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Users</h5>
          
              <span class="counter">   {{$users->count()}} </span>
      
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated {{$last_user->created_at->diffForHumans()}}</small>
          </div>
        </div>
        <div class="card">
          <img src="img/head.gif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">CAtegories</h5>
   
              <span class="counter">     {{$categories->count()}}</span>

       
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated {{$last_cat->created_at->diffForHumans()}}</small>
          </div>
        </div>
        <div class="card">
          <img src="img/head.gif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Tags</h5>
           
              <span class="counter">    {{$tags->count()}}</span>

          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated  {{$last_tag->created_at->diffForHumans()}}</small>
          </div>
        </div>


      </div>



    </div>
        </div>
      </div>

    </div>




<!-- your posts  -->


    <div class="col-md-12 col-md-offset-2">

      <div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i> Your Posts </div>
        <div class="card-body">


        <div class="table-responsive">
          <table border="0" class="table table-striped table-bordered table-hover " id="example">
            <thead>
              <tr class="table-primary" style="text-align:center;color:white;margin-left:150px;">

                <th style="width: 30px;">No.</th>
                <th style="width: 30px;">Image</th>
                <th>Title</th>
                <th>created At</th>
                <th>Updated At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr class="text-center">
                <th>No.</th>
                <th>Image</th>
                <th>Title</th>
                <th>created At</th>
                <th>Updated At</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>



              @if ($posts->count()>0) @foreach ($post as $index=>$post)
              <tr class="text-center">
                <td>{{$index +1}}</td>
                <td>
                  <img src="{{$post->featured}}" class="rounded mx-auto d-block" alt="..." height="100px" width="150px">
                </td>
                <td>{{$post->title}}</td>
       
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td>



                  <a class="btn btn-success rounded float-left" href="{{route('post.edit',['id'=>$post->id])}}" data-method="delete" rel="nofollow"
                    data-confirm="Are you sure you want to edit this?">
                    <i class="fas fa-edit		"></i> Edit </a>


                  <a class="btn btn-danger  rounded float-left" href="{{route('post.delete',['id'=>$post->id])}}" data-method="delete" rel="nofollow"
                    data-confirm="Are you sure you want to delete this?">
                    <i class="fas fa-trash-alt	"></i> Delete</a>

                </td>

              </tr>
              @endforeach @else @endif
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">
        <h5>Last Updated {{$last_post->created_at->diffForHumans()}}</h5>
          
          
        </div>
      </div>

    </div>



<!-- end your posts -->
  </div>
</div>


<script>
$(document).ready(function () {
$('#example').dataTable();
});
</script> 


@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tags</div>

                <div class="panel-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Name</th>
                          <th scope="col">Created At</th>
                          <th scope="col">Updated At</th>
                          <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                      </thead>

                        @foreach ($tags as $tag)
                      <tbody>
                        <tr>
                          <th scope="row">{{$x++}}</th>
                          <td>{{$tag->tag}}</td>
                          <td>{{$tag->created_at}}</td>
                          <td>{{$tag->updated_at}}</td>
                          <td>
                            <a class="btn btn-success rounded float-left" style="width:100%;"  href="{{route('tag.edit',['id'=>$tag->id])}}">
Edit                           </a>
                        </td>
                        <td>
                          <a class="btn btn-danger rounded float-left" style="width:100%;" href="{{route('tag.delete',['id'=>$tag->id])}}">
Delete                         </a>
                      </td>
                        </tr>
                      </tbody>

                      @endforeach
                    </table>








                </div>
            </div>
        </div>
    </div>
</div>
@endsection

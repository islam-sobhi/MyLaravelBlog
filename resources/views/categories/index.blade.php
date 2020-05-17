@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Categories</div>

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

                        @foreach ($categories as $category)
                      <tbody>
                        <tr>
                          <th scope="row">{{$x++}}</th>
                          <td>{{$category->name}}</td>
                          <td>{{$category->created_at}}</td>
                          <td>{{$category->updated_at}}</td>
                          <td>
                            <a class="btn btn-success rounded float-left" style="width:100%;"  href="{{route('category.edit',['id'=>$category->id])}}">
Edit                           </a>
                        </td>
                        <td>
                          <a class="btn btn-danger rounded float-left" style="width:100%;" href="{{route('category.delete',['id'=>$category->id])}}">
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

  @extends('layouts.app')


  @section('content')



  <div class="container">

  <div class="row" style="margin-bottom: 40px;" >

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Create New User </button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-center" id="exampleModalLabel">Create New User</h3>
    

      </div>
      <div class="modal-body">
      

 <form class="form-horizontal" method="POST" action="{{route('users.store')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="form-control btn btn-primary btm-lg">
                                    Save
                                </button>
                                

                            </div>
                        </div>
                    </form>


      </div>
      <div class="modal-footer">
       

      </div>
    </div>
  </div>
</div>

  </div>


    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> welcome to users 
        </div>
      <div class="card-body">
  

    <div class="row"  >


      @if ($users->count()>0)
 <div class="table-responsive" >
        <table border="0" class="table table-striped table-bordered table-hover " id="example" >
            <thead>
                <tr class="table-primary" style="text-align:center;color:red;margin-left:150px;" >

            <th scope="col">NO.</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Roles</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
            <tfoot>
              <tr class="text-center"> 
                <th scope="col">NO.</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Roles</th>
            <th scope="col">Action</th>
              </tr>
            </tfoot>
            <tbody>
          <tr>
              @foreach ($users as $index=>$user)
              <td>{{$index +1}}</td>
            <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
         
            <td>
            @foreach($user->roles as $role)

                <span class="badge badge-primary badge-pill">{{$role->display_name}}</span>
            @endforeach
</td>


            <td>
 <a class="btn btn-primary btn-sm rounded float-left" href="{{route('users.profile',['id'=>$user->id])}}"
                data-method="delete" rel="nofollow" data-confirm="Are you sure you want to delete this?">
                <i class="fas fa-edit		"></i> Edit Profile    </a>

              <a class="btn btn-warning btn-sm rounded float-left" href="{{route('users.edit',['id'=>$user->id])}}"
                data-method="delete" rel="nofollow" data-confirm="Are you sure you want to edit this?">
                <i class="fas fa-edit		"></i> Edit Role    </a>

            
            

              <a class="btn btn-danger btn-sm rounded float-left" href="{{url('users/delete',['id'=>$user->id])}}"

                data-method="delete" rel="nofollow" data-confirm="Are you sure you want to delete this?">
                <i class="fas fa-trash-alt	"></i> Delete    </a>

            </td>
          </tr>
          @endforeach
          @else

          <div class="alert alert-danger text-center" role="alert">
            <strong>Sorry No Have!</strong>  Users !!! .
          
          </div>
          @endif
        </tbody>
      </table>

 </div>


        </div>
   </div>
      </div>
    <script type="text/javascript">
                     
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf','print'
        ]
    } );
});

 </script>


      @endsection





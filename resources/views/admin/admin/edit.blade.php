@extends('layouts.app')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <br/>
            <!-- general form elements -->
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Edit Admin</h3>
                  </div>
              <form method="POST" action="">
                {{@csrf_field()}}
                <div class="card-body">
                    <div class="form-group">
                        <label >Name</label>
                        <input type="name" class="form-control" value="{{old('name',$getRecord->name)}}" name="name" required placeholder="Enter Name">
                    </div>
                  <div class="form-group">
                    <label >Email</label>
                    <input type="email" class="form-control" value="{{old('email',$getRecord->email)}}" name="email"required placeholder="Enter email">
                    <div style="color: red">{{$errors->first('email')}}</div>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control"  name="password" placeholder="Password">
                    <p>Due you want to change password so please add new password.</p>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Upadate</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection

@extends('layouts.app')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Change Password</h1>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              
              @include('_message')
              <!-- /.card-header -->
              <form method="POST" action="">
                {{@csrf_field()}}
                <div class="card-body">
                    <div class="form-group">
                        <label >Old Password</label>
                        <input type="password" class="form-control"  name="old_password" required placeholder="Old password">
                    </div>
                    <div class="form-group">
                        <label >Confirm Password</label>
                        <input type="password" class="form-control"  name="new_password" required placeholder="New Password">
                    </div>
                  
                 
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
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

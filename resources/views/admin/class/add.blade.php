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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Class</h3>
              </div>
              <!-- /.card-header -->
              <form method="POST" action="">
                {{@csrf_field()}}
                <div class="card-body">
                    <div class="form-group">
                        <label >Class Name</label>
                        <input type="name" class="form-control" value="{{old('name')}}" name="name" placeholder="Class Name">
                    </div>
                  <div class="form-group">
                    <label >Status</label>
                    <select class="form-control" name="status">
                      <option value="0">Active</option> 
                      <option value="1">Inactive</option>
                    </select>
                  </div>
                 
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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

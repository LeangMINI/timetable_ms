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
                <h3 class="card-title">Add New Subject</h3>
              </div>
              <!-- /.card-header -->
              <form method="POST" action="">
                {{@csrf_field()}}
                <div class="card-body">
                    <div class="form-group">
                        <label >Subject Name</label>
                        <input type="name" class="form-control" value="{{old('name')}}" name="name" placeholder="Subject Name">
                    </div>
                    
                  <div class="form-group">
                    <label >Subject Type</label>
                    <select class="form-control" name="type">
                      <option value="0">គណិតវិទ្យា</option> 
                      <option value="1">សិក្សាសង្គម</option>
                      <option value="1">វិទ្យាសាស្រ្ត</option>
                      <option value="1">ភាសារខ្មែរ</option>
                      <option value="1">English</option>
                    </select>
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

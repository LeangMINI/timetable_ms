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
                <h3 class="card-title">Add New Assign Subject</h3>
              </div>
              <!-- /.card-header -->
              <form method="POST" action="">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="class_id">Class Name</label>
                    <select class="form-control" name="class_id" required>
                      <option value="">Select Class</option>
                      @foreach($getClass as $class)
                        <option {{ ($getRecord->class_id == $class->id) ? 'selected' : ''}} value="{{ $class->id }}">
                          {{ $class->name }}
                        </option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Subject Name</label>
                    @foreach($getSubject as $subject)
                      @php
                        $checked = "";
                      @endphp
                      @foreach($getAssignSubjectID as $subjectAssign)
                        @if($subjectAssign->subject_id == $subject->id)
                          @php
                            $checked = "checked";
                          @endphp
                        @endif
                      @endforeach
                      <div>
                        <label style="font-weight: normal;">
                          <input type="checkbox" value="{{ $subject->id }}" name="subject_id[]" {{ $checked }}>
                          {{ $subject->name }}
                        </label>
                      </div>
                    @endforeach
                  </div>
                  <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" name="status">
                      <option {{ ($getRecord->status == 0) ? 'selected' : '' }} value="0">Active</option>
                      <option {{ ($getRecord->status == 1) ? 'selected' : '' }} value="1">Inactive</option>
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

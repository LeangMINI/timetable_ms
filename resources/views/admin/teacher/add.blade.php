@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add New Student</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">

                            <!-- /.card-header -->
                            <form method="POST" action="" enctype="multipart/form-data">
                                {{ @csrf_field() }}
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>First Name<span style="color: red;">*</span></label>
                                            <input type="name" class="form-control" value="{{ old('name') }}" name="name"
                                                placeholder="Enter First Name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Last Name<span style="color: red;">*</span></label>
                                            <input type="name" class="form-control" value="{{ old('last_name') }}" name="last_name"
                                                placeholder="Enter Last Name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Gender<span style="color: red;">*</span></label>
                                                <select class="form-control" name="gender" required>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Religion<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" value="{{ old('religion') }}" name="religion"
                                                placeholder="Enter Religion" required>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label>Date of Birth</label>
                                            <input type="date" class="form-control" value="{{ old('date_of_birth') }}" name="date_of_birth"
                                                placeholder="Enter Date of Birth" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Date Of Join</label>
                                            <input type="date" class="form-control" value="{{ old('date_of_join') }}" name="date_of_join"
                                                placeholder="Enter Date of Join" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Mobile Number</label>
                                            <input type="text" class="form-control" value="{{ old('mobile_number') }}" name="mobile_number"
                                                placeholder="Enter Mobile Number" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Current Address</label>
                                            <input type="text" class="form-control" value="{{ old('current_address') }}" name="current_address"
                                                placeholder="Enter Current Address" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Subject</label>
                                            <select class="form-control" name="subject_id" required>
                                                <option value="">Select Subject</option>
                                            
                                                @foreach ($getSubject as $subject)
                                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label>Profile Pic<span style="color: red;">*</span></label>
                                            <input type="file" name="profile_pic" class="form-control" id="exampleInputFile" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Status</label>
                                            <select class="form-control" name="status" required>
                                                <option value="0">Active</option>
                                                <option value="1">Inactive</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="email" class="form-control" value="{{ old('email') }}" name="email"
                                                placeholder="Enter email" required>
                                            <div style="color: red">{{ $errors->first('email') }}</div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Password</label>
                                            <input type="text" class="form-control" value="{{ old('password') }}" name="password"
                                                placeholder="Enter password" required>
                                            <div style="color: red">{{ $errors->first('password') }}</div>
                                        </div>
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

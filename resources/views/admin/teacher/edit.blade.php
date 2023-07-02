@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Teacher Edit</h1>
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
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>First Name<span style="color: red;">*</span></label>
                                            <input type="name" class="form-control" value="{{old('name',$getRecord->name)}}" name="name" placeholder="Enter First Name" required>
                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Last Name<span style="color: red;">*</span></label>
                                            <input type="name" class="form-control" value="{{old('last_name',$getRecord->last_name)}}" name="last_name" placeholder="Enter Last Name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Gender<span style="color: red;">*</span></label>
                                            <select class="form-control" name="gender" required>
                                                <option value="1" {{ $getRecord->gender == 1 ? 'selected' : '' }}>Male</option>
                                                <option value="2" {{ $getRecord->gender == 2 ? 'selected' : '' }}>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Religion<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" value="{{old('religion',$getRecord->religion)}}" name="religion" placeholder="Enter Religion" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Date of Birth</label>
                                            <input type="date" class="form-control" value="{{old('religion',$getRecord->date_of_birth) }}" name="date_of_birth" placeholder="Enter Date of Birth" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Date Of Join</label>
                                            <input type="date" class="form-control" value="{{ old('religion',$getRecord->date_of_join) }}" name="date_of_join" placeholder="Enter Date of Join" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Mobile Number</label>
                                            <input type="text" class="form-control" value="{{ old('religion',$getRecord->mobile_number) }}" name="mobile_number" placeholder="Enter Mobile Number" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Current Address</label>
                                            <input type="text" class="form-control" value="{{old('religion',$getRecord->current_address) }}" name="current_address" placeholder="Enter Current Address" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Subject</label>
                                            <select class="form-control" name="subject_id" required>
                                                <option value="">Select Subject</option>
                                                @foreach ($getSubject as $subject)
                                                    <option value="{{ $subject->id }}" {{ $getRecord->subject_id == $subject->id ? 'selected' : '' }}>{{ $subject->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Profile Pic<span style="color: red;">*</span></label>
                                            <input type="file" name="profile_pic" class="form-control" id="exampleInputFile">
                                            <p><img src="{{ asset('upload/profile/' . $getRecord->profile_pic) }}" alt="Profile Pic" width="50"></p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Status</label>
                                            <select class="form-control" name="status" required>
                                                <option value="0" {{($getRecord->status == 0) ? 'selected' : '' }}>Active</option>
                                                <option value="1" {{ ($getRecord->status == 1) ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="email" class="form-control" value="{{old('email',$getRecord->email) }}" name="email" placeholder="Enter email" required>
                                            <div style="color: red">{{ $errors->first('email') }}</div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Password</label>
                                            <input type="password" class="form-control"  name="password" placeholder="Password">
                                            <div style="color: red">{{ $errors->first('password') }}</div>
                                        </div>
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

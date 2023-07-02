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
                            <form method="POST" action=""enctype="multipart/form-data">
                                {{ @csrf_field() }}
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>First Name<span style="color: red;">*</span></label>
                                            <input type="name" class="form-control" value="{{ old('name') }}"
                                                name="name" placeholder="Enter First Name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Last Name<span style="color: red;">*</span></label>
                                            <input type="name" class="form-control" value="{{ old('last_name') }}"
                                                name="last_name" placeholder="Enter Last Name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Admission Number<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" value="{{ old('admission_number') }}"
                                                name="admission_number" placeholder="Enter Admission Number" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Roll Number<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" value="{{ old('roll_number') }}"
                                                name="roll_number" placeholder="Enter Roll Number" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Class<span style="color: red;">*</span></label>
                                            <select class="form-control" name="class_id" required>
                                                <option value="">Select Class</option>
                                                <!-- Add options for different classes -->
                                                
                                                @foreach ($getClass as $class)
                                                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                                                @endforeach
                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Gender<span style="color: red;">*</span></label>
                                            <select class="form-control" name="gender" required>
                                                <option value="">Select Gender</option>
                                                <!-- Add options for different classes -->
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                                <!-- Add more options as needed -->
                                            </select>

                                        </div>


                                        <div class="form-group col-md-6">
                                            <label>Date of Birth<span style="color: red;">*</span></label>
                                            <input type="date" class="form-control" value="{{ old('date_of_birth') }}"
                                                name="date_of_birth" placeholder="Enter Date of Birth" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Caste<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" value="{{ old('caste') }}"
                                                name="caste" placeholder="Enter Caste" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Religion<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" value="{{ old('religion') }}"
                                                name="religion" placeholder="Enter Religion" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Mobile Number<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" value="{{ old('mobile_number') }}"
                                                name="mobile_number" placeholder="Enter Mobile Number" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Admission Date<span style="color: red;">*</span></label>
                                            <input type="date" class="form-control" value="{{ old('admission_date') }}"
                                                name="admission_date" placeholder="Enter Admission Date" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Blood Group<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" value="{{ old('blood_group') }}"
                                                name="blood_group" placeholder="Enter Blood Group" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Height<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" value="{{ old('height') }}"
                                                name="height" placeholder="Enter Height" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Weight<span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" value="{{ old('weight') }}"
                                                name="weight" placeholder="Enter Weight" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Profile Pic<span style="color: red;">*</span></label>
                                            <input type="file" name="profile_pic" class="form-control" id="exampleInputFile" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                          <label >Status</label>
                                          <select class="form-control" name="status">
                                            <option value="0">Active</option> 
                                            <option value="1">Inactive</option>
                                          </select>
                                        </div>


                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" value="{{ old('email') }}"
                                            name="email" placeholder="Enter email" required>
                                        <div style="color: red">{{ $errors->first('email') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Password" required>
                                    </div>
                                </div>



                                <!--  <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <div class="input-group">
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                          </div>
                                          <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                      </div>
                                    </div>
                                     /.card-body -->

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

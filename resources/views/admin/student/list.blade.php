@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Student List (Total : {{$getRecord->total()}})</h3>
                </div>
                <div class="col-sm-6" style="text-align: right">
                    <a href="{{url('admin/student/add')}}" class="btn btn-primary">Add New Student</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                   
                    @include('_message')
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Student List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Last Name</th>
                                        <th>Admission Number</th>
                                        <th>Roll Number</th>
                                        <th>Class ID</th>
                                        <th>Gender</th>
                                        <th>Date of Birth</th>
                                        <th>Caste</th>
                                        <th>Religion</th>
                                        <th>Mobile Number</th>
                                        <th>Admission Date</th>
                                        <th>Profile Pic</th>
                                        <th>Blood Group</th>
                                        <th>Height</th>
                                        <th>Weight</th>
                                        <th>User Type</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getRecord as $value)
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->last_name}}</td>
                                            <td>{{$value->admission_number}}</td>
                                            <td>{{$value->roll_number}}</td>
                                            <td>{{ $value->class_name }}</td>
                                            <td>{{$value->gender}}</td>
                                            <td>{{$value->date_of_birth}}</td>
                                            <td>{{$value->caste}}</td>
                                            <td>{{$value->religion}}</td>
                                            <td>{{$value->mobile_number}}</td>
                                            <td>{{$value->admission_date}}</td>
                                            <td>
                                                @if ($value->profile_pic)
                                                    <img src="{{asset('upload/profile/' . $value->profile_pic)}}" alt="Profile Pic" width="50">
                                                @else
                                                    No image
                                                @endif
                                            </td>
                                            <td>{{$value->blood_group}}</td>
                                            <td>{{$value->height}}</td>
                                            <td>{{$value->weight}}</td>
                                            
                                            <td>
                                                @if ($value->user_type == 1)
                                                Admin
                                            @elseif ($value->user_type == 2)
                                                Teacher
                                            @elseif ($value->user_type == 3)
                                                Student
                                            @elseif ($value->user_type == 4)
                                                Parent
                                            @endif
                                            
                                                 
                                            </td>
                                            <td>{{date('d-m-Y H:i A', strtotime($value->created_at))}}</td>
                                            <td>
                                                <a href="{{url('admin/admin/edit/'.$value->id)}}" class="btn btn-primary">Edit</a>
                                                <a href="{{url('admin/admin/delete/'.$value->id)}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                            <div style="padding: 10px; float: right;">
                                {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links()!!}
                            </div>
                           
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

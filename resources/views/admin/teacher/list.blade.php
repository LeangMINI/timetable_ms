@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Teacher List (Total : {{$getRecord->total()}})</h3>
                </div>
                <div class="col-sm-6" style="text-align: right">
                    <a href="{{url('admin/teacher/add')}}" class="btn btn-primary">Add New Teacher</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Search Admin</h3>
                        </div>
                        <form method="get" action="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label >Name</label>
                                        <input type="text" class="form-control" value="{{Request::get('name')}}" name="name" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label >Email</label>
                                        <input type="text" class="form-control" value="{{Request::get('email')}}" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label >Date</label>
                                        <input type="date" class="form-control" value="{{Request::get('date')}}" name="date" placeholder="Date">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <button class="btn btn-primary" type="submit" style="margin-top:30px;">Search</button>
                                        <a href="{{url('admin/teacher/list')}}" class="btn btn-success" style="margin-top:30px;">Reset</a>
    
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    @include('_message')
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Teacher List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Profile Pic</th>
                                        <th>Full Name</th>
                                        <th>Username</th>
                                        <th>Gender</th>
                                        <th>Religion</th>
                                        <th>Subject</th>
                                        <th>Email</th>
                                        <th>Date of Birth</th>
                                        <th>Date Of Join</th>
                                        <th>Mobile Number</th>
                                        <th>Current Address</th>
                                        <th>User Type</th>
                                        <th>Created Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getRecord as $value)
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td>
                                                @if ($value->profile_pic)
                                                    <img src="{{asset('upload/profile/' . $value->profile_pic)}}" alt="Profile Pic" width="50">
                                                    
                                                @else
                                                    No image
                                                @endif
                                            </td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->last_name}}</td>
                                            <td>
                                                
                                                    @if($value->gender ==1)
                                                    Male
                                                    @else
                                                    Female
                                                    @endif   
                                                
                                            </td>
                                            <td>{{$value->religion}}</td>
                                            <td>{{$value->subject_name}}</td>
                                            <td>{{$value->email }}</td>
                                            <td>{{$value->date_of_birth}}</td>
                                            <td>{{$value->date_of_join}}</td>
                                            <td>{{$value->mobile_number}}</td>
                                            <td>{{$value->current_address}}</td>
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
                                                
                                                    @if($value->status ==0)
                                                    Active
                                                    @else
                                                    Inactive
                                                    @endif   
                                            
                                            </td>
                                            <td>
                                                <a href="{{url('admin/teacher/detail/'.$value->id)}}" class="btn btn-primary">detail</a>
                                                <a href="{{url('admin/teacher/edit/'.$value->id)}}" class="btn btn-primary">Edit</a>
                                                <a href="{{url('admin/teacher/delete/'.$value->id)}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                            <div style="padding: 10px; float: right;">
                               
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

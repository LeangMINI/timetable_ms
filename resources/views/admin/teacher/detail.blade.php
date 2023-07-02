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
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary ">
                            
                            <img src="http://localhost/schoolmanagement/upload/logo/Logo.png" width="150" alt="Profile Pic">
                            <div class="card-body box-profile">
                               
                                <div class="text-center">

                                    <img 
                                        src="{{ asset('upload/profile/' . $getRecord->profile_pic) }}" alt="Profile Pic"  width="200" height="250">
                                </div>

                                <h3 class="profile-username text-center">
                                    {{ $getRecord->name }}
                                </h3>
                                
                            <p class="text-muted text-center">
                                @if ($getRecord->user_type == 1)
                                    Admin
                                @elseif ($getRecord->user_type == 2)
                                    Teacher
                                @elseif ($getRecord->user_type == 3)
                                    Student
                                @elseif ($getRecord->user_type == 4)
                                    Parent
                                @endif
                            </p>
                            <p class="text-muted text-center">

                                @foreach ($getSubject as $subject)
                                    @if ($getRecord->subject_id == $subject->id)
                                        {{ $subject->name }}
                                    @break
                                    @endif
                                @endforeach
                             </p>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Gender</b> <a class="float-right">
                                        @if ($getRecord->gender == 1)
                                            Male
                                        @else
                                            Female
                                        @endif
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <b>Date Of Birth</b> <a class="float-right">{{ $getRecord->date_of_birth }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Religion</b> <a class="float-right">{{ $getRecord->religion }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email</b> <a class="float-right">{{ $getRecord->email }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Mobile</b> <a class="float-right">{{ $getRecord->mobile_number }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Address</b> <a class="float-right">{{ $getRecord->current_address }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Friends</b> <a class="float-right">13,287</a>
                                </li>
                            </ul>
                            <a href="{{ url('admin/teacher/edit/' . $getRecord->id) }}"
                                class="btn btn-primary btn-block">Edit</a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>

    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use App\Models\SubjectModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function list()
    {
        $data['getRecord'] = User::getTeacher();
        $data['header_title'] = 'Teacher List';
        return view('admin.teacher.list', $data);
    }
    public function add()
    {
        $data['getSubject'] = SubjectModel::getSubject();
        $data['header_title'] = 'Add Teacher';
        return view('admin.teacher.add', $data);
    }
    public function insert(Request $request)
    {
        $teacher = new User;
        $teacher->name = trim($request->name);
        $teacher->last_name = trim($request->last_name);
        $teacher->gender = trim($request->gender);
        $teacher->religion = trim($request->religion);
        $teacher->email = trim($request->email);
        $teacher->password = Hash::make($request->password);
        $teacher->date_of_birth = trim($request->date_of_birth);
        if (!empty($request->date_of_birth)) {
            $teacher->date_of_birth = trim($request->date_of_birth);
        }
        if (!empty($request->file('profile_pic'))) {
            $ext = $request->file('profile_pic')->getClientOriginalExtension();
            $file = $request->file('profile_pic');
            $randomStr = Str::random(20);
            $filename = strtolower($randomStr) . '.' . $ext;
            $file->move('upload/profile/', $filename);
            $teacher->profile_pic = $filename; // Set the profile_pic property with the filename
        }


        $teacher->date_of_join = trim($request->date_of_join);
        $teacher->mobile_number = trim($request->mobile_number);
        $teacher->current_address = trim($request->current_address);
        $teacher->subject_id = trim($request->subject_id);
        $teacher->user_type = 2;
        $teacher->status = trim($request->status);

        $teacher->save();

        return redirect('admin/teacher/list')->with('success', "Teacher Successfully Created");
    }

    public function edit($id)
    {
        $data['getRecord'] = User::getSingle($id);
        $data['getSubject'] = SubjectModel::all();
        if (!empty($data['getRecord'])) {
            $data['header_title'] = 'Edit Teacher';
            return view('admin.teacher.edit', $data);
        } else {
            return abort(404);
        }
    }


    public function update($id, Request $request)
    {

        request()->validate([
            'email' => 'required|email|unique:users,email,' . $id
        ]);
        $user = User::getSingle($id);
        $user->name = trim($request->name);
        $user->last_name = trim($request->last_name);
        $user->gender = $request->gender;
        $user->religion = trim($request->religion);
        $user->date_of_birth = $request->date_of_birth;
        $user->date_of_join = $request->date_of_join;
        $user->mobile_number = $request->mobile_number;
        $user->current_address = $request->current_address;
        $user->subject_id = $request->subject_id;
        $user->status = $request->status;
        $user->email = trim($request->email);
        if (!empty($request->file('profile_pic'))) {
            $ext = $request->file('profile_pic')->getClientOriginalExtension();
            $file = $request->file('profile_pic');
            $randomStr = Str::random(20);
            $filename = strtolower($randomStr) . '.' . $ext;
            $file->move('upload/profile/', $filename);
            $user->profile_pic = $filename; // Set the profile_pic property with the filename
        }
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect('admin/teacher/list')->with('success', "Teacher Update Successfully");
    }
    public function delete($id)
    {
        $user = User::getSingle($id);
        $user->is_delete =1;
        
        $user->save();

        return redirect('admin/teacher/list')->with('success', 'Teacher deleted successfully');
    }
    public function detail($id)
    {
        $data['getRecord'] = User::getSingle($id);
        $data['getSubject'] = SubjectModel::all();
        if (!empty($data['getRecord'])) {
            $data['header_title'] = 'Edit Teacher';
            return view('admin.teacher.detail', $data);
        } else {
            return abort(404);
        }
    }

}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\SubjectModel;

class SubjectController extends Controller
{
    public function list(){
      $data['getRecord']= SubjectModel::getRecord();
        $data['header_title'] = 'Subject List';
        return view('admin.subject.list',$data);
    }
    public function add(){
      
        $data['header_title'] = 'Add New Subject';
        return view('admin.subject.add',$data);
    }
     public function insert(Request $request){
        //dd($request->all());	
        $save = new SubjectModel;
        $save->name = $request->name;
        $save->type = $request->type;
        $save->status = $request->status;
        $save->created_by = Auth::user()->id;
       
        $save->save();
        return redirect('admin/subject/list')->with('success', "Subject Added Successfully");
    }
    public function edit($id){
        $data['getRecord'] = SubjectModel::getSingle($id);
        if(!empty($data['getRecord'])){
            $data['header_title'] = 'Edit Subject';
            return view('admin.subject.edit',$data);
        }else{
            return abort(404);
        }
    }

    public function update($id ,Request $request){

        
        $save = SubjectModel::getSingle($id);
        $save->name = $request->name;
        $save->type = $request->type;
        $save->status = $request->status;
        $save->save();

        return redirect('admin/subject/list')->with('success', "Subject Update Successfully");
    } 
    public function delete($id)
    {
        $user = SubjectModel::getSingle($id);
        $user->is_delete =1;
        
        $user->save();

        return redirect('admin/subject/list')->with('success', 'Subject deleted successfully');
    }
}

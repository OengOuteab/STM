<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    protected function search(){
        $student = StudentModel::all()->where('active',1);
        return view('layouts.student.student-list' ,compact('student'));
    }
    //
    protected function create(Request $request){
        $this->validate($request, [
            'fullName'=>'required|max:50',
            'gender'=>'required',
            'dob'=>'required',
            'phone'=>'required',
            'subjectId'=>'required',
            'active'=>'required'
        ]);
    //     SubjectModel::create(
    //         $request->all(),
    // );
    $student=new StudentModel();
    $student->fullName =$request->fullName;
    $student->gender =$request->gender;
    $student->dob =$request->dob;
    $student->phone =$request->phone;
    $student->subjectId =$request->subjectId;
    $student->active =1;
    $student->save();


        return redirect("/student");

    }
    protected function find($id)
    {
        $student = StudentModel::find($id);
        return view('layouts.student.student-edit' ,compact('student'));
    }

     protected function show($id)
    {
        $student = StudentModel::find($id);
        return view('layouts.student.student-delete' ,compact('student'));
    }

    protected function update(Request $request,$id){
         $this->validate($request, [
            'fullName'=>'required|max:50',
            'gender'=>'required',
            'dob'=>'required',
            'phone'=>'required',
            'subjectId'=>'required',
            'active'=>'required'
        ]);
        $student = StudentModel::find($id);
        $student->update($request->all());
        return redirect("/student");
    }

    protected function delete($id){
        $student = StudentModel::find($id);
        $student->active=0;
        $student->update();
        return redirect("/student");
    }
}

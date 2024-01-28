@extends('layouts.master')
@section('title','Student')
@section('student','active')
@section('content')
    <div class="content-title">
        <h3>Subject</h3>
        <div>
            <a href="{{url('student/add')}}" class="btn btn-outline-primary"> <span data-feather="user-plus"></span> Add</a>
        </div>
        
    </div>
  
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>FullName</th>
          <th>Gender</th>
          <th>DOB</th>
          <th>Phone</th>
          <th>Subject ID</th>
          <th width="140px"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($student as $student)
        <tr>
          <td>{{$student->id}}</td>
         <td>{{$student->fullName}}</td>
         <td>{{$student->gender}}</td>
         <td>{{$student->dob}}</td>
         <td>{{$student->phone}}</td>
         <td>{{$student->subjectId}}</td>
         <td class="btn-action"> 
           <a href="{{url('student/edit',$student->id)}}"><span class="text-warning" data-feather="edit"></span>Edit</a>
           <a href="{{url('student/show',$student->id)}}"><span class="text-danger" data-feather="trash-2"></span>Delete</a> 
       </td>
       </tr>
       @endforeach
        
      </tbody>
    </table>
  </div> 
@endsection
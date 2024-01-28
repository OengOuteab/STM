@extends('layouts.master')
@section('title','Student')
@section('student','active')

@section('content')

          <h4 class="mb-3">Delete{{$student->fullName}}</h4>
          <form class="needs-validation" novalidate  method="POST" action="{{route("student.delete",$student->id)}}">
            {{method_field('PUT')}}
            {{ csrf_field() }}
            <div class="mb-3">
              <label for="username">Full Name</label>
                <input type="text" value=" {{$student->fullName}}" class="form-control" id="fullName" placeholder="Code" required>
              </div>
          

            <div class="mb-3">
              <label for="email">Name</label>
              <input type="email" value=" {{$student->name}}" class="form-control" id="name" placeholder="Name">
             
            </div>
            <div class="input-group">
        <div class="input-group-prepend">
        </div>
            </div>
          <div class="mb-3">
            <label for="name">Gender</label>
            <input type="text" name="gender" class="form-control" id="gender" placeholder="Gender" value="{{$student->gender}}">
          </div>
          <div class="mb-3">
            <label for="name">DOB</label>
            <input type="date" name="dob" class="form-control" id="dob" placeholder="DOB" value="{{$student->dob}}">
          </div>
          <div class="mb-3">
            <label for="name">Phone</label>
            <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone" value="{{$student->phone}}">
          </div>
          <div class="mb-3">
            <label for="username">SubjectID</label>
              <input type="number" name="subjectId" class="form-control" id="subjectId" placeholder="Full Name" value="{{$student->subjectId}}">
            </div>
          <div class="input-group">
            <input type="number" name="active" class="form-control" id="active" value="1" placeholder="Full Name" hidden>
      <div class="input-group-prepend">
      </div>
          </div>

            
            <hr class="mb-4">
            <button class="btn btn-danger btn-sm btn-lg btn-block" type="submit">Delete</button>
          </form>
        </div>
      </div>
    
</div>
@endsection
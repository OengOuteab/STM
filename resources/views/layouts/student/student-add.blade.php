@extends('layouts.master')
@section('title','Subject')
@section('student','active')

@section('content')

          <h4 class="mb-3">Student Add</h4>
          @if ($errors->any())
          <ul class="alert alert-danger">
              @foreach ($errors->all() as $error)
              <LI>{{$error}}</LI>
              @endforeach
          </ul>
          @endif
          <form class="needs-validation" method="POST" action="{{route("student.create")}}">
            {{ csrf_field() }}
            <div class="mb-3">
              <label for="username">Full Name</label>
                <input type="text" name="fullName" class="form-control" id="fullName" placeholder="Full Name">
              </div>
          

            <div class="mb-3">
              <label for="name">Gender</label>
              <select name="gender" class="form-control" id="gender" placeholder="Gender">
                <option value="male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="name">DOB</label>
              <input type="date" name="dob" class="form-control" id="dob" placeholder="DOB">
            </div>
            <div class="mb-3">
              <label for="name">Phone</label>
              <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone">
            </div>

            @php
              $subject = DB::table('subjects')->get();  
            @endphp
            <div class="mb-3">
              <label for="name">Subject</label>
             <select class="form-control" id="subject">
              @foreach ($subject as $subject)
                  <option value="{{$subject->id}}">{{$subject->name}}</option>
              @endforeach
             </select>
            </div>
            <div class="input-group">
              <input type="number" name="active" class="form-control" id="active" value="1" placeholder="Full Name" hidden>
        <div class="input-group-prepend">
        </div>
            
            
            <hr class="mb-4">
            <button class="btn btn-primary btn-sm btn-lg btn-block" type="submit">Submit</button>
          </form>
        </div>
      </div>
    
</div>
@endsection
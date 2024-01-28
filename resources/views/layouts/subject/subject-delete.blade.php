@extends('layouts.master')
@section('title','Subject')
@section('subject','active')

@section('content')

          <h4 class="mb-3">Delete{{$subject->name}}</h4>
          <form class="needs-validation" novalidate  method="POST" action="{{route("subject.delete",$subject->id)}}">
            {{method_field('PUT')}}
            {{ csrf_field() }}
            <div class="mb-3">
              <label for="username">Code</label>
                <input type="text" value=" {{$subject->code}}" class="form-control" id="code" placeholder="Code" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Code is required.
                </div>
              </div>
          

            <div class="mb-3">
              <label for="email">Name</label>
              <input type="email" value=" {{$subject->name}}" class="form-control" id="name" placeholder="Name">
             
            </div>
            <div class="input-group">
        <div class="input-group-prepend">
        </div>
            </div>
          <div class="mb-3">
          <label for="note">Note</label>
            
        <textarea class="form-control" id="note" rows="3" >{{$subject->note}}</textarea>
        </div>

            
            <hr class="mb-4">
            <button class="btn btn-danger btn-sm btn-lg btn-block" type="submit">Delete</button>
          </form>
        </div>
      </div>
    
</div>
@endsection
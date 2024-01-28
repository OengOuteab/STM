@extends('layouts.master')
@section('title','Subject')
@section('subject','active')

@section('content')

        <h4 class="mb-3">Subject Edit {{$subject->code}}</h4>
         @if ($errors->any())
          <ul class="alert alert-danger">
              @foreach ($errors->all() as $error)
              <LI>{{$error}}</LI>
              @endforeach
          </ul>
          @endif
          <form class="needs-validation" novalidate method="POST" action="{{route("subject.update",$subject->id)}}">
            {{method_field('PUT')}}
            {{ csrf_field() }}
            <div class="mb-3">
              <label for="username">Code</label>
                <input name="code" type="text" value="{{$subject->code}}" class="form-control" id="code" placeholder="Code">
                
              </div>
          

            <div class="mb-3">
              <label for="email">Name</label>
              <input name="name" type="email" value="{{$subject->name}}" class="form-control" id="name" placeholder="Name">
             
            </div>
            <div class="input-group">
        <div class="input-group-prepend">
        </div>
            </div>
          <div class="mb-3">
          <label for="note">Note</label>
            
        <textarea name="note" class="form-control" id="note" rows="3" >{{$subject->note}}</textarea>
        </div>

            
            <hr class="mb-4">
            <button class="btn btn-primary btn-sm btn-lg btn-block" type="submit">Submit</button>
          </form>
        </div>
      </div>
    
</div>
@endsection
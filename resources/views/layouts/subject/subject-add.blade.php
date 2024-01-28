@extends('layouts.master')
@section('title','Subject')
@section('subject','active')

@section('content')

          <h4 class="mb-3">Subject Add</h4>
          @if ($errors->any())
          <ul class="alert alert-danger">
              @foreach ($errors->all() as $error)
              <LI>{{$error}}</LI>
              @endforeach
          </ul>
          @endif
          <form class="needs-validation" method="POST" action="{{route("subject.create")}}">
            {{ csrf_field() }}
            <div class="mb-3">
              <label for="username">Code</label>
                <input type="text" name="code" class="form-control" id="code" placeholder="Code">
                {{-- <div class="invalid-feedback" style="width: 100%;">
                  Code is required.
                </div> --}}
              </div>
          

            <div class="mb-3">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Name">
              {{-- <div class="invalid-feedback">
                  Name is required.
              </div> --}}
            </div>
            <div class="input-group">
        <div class="input-group-prepend">
        </div>
            </div>
          <div class="mb-3">
          <label for="note">Note</label>
            
        <textarea class="form-control" name="note" id="note" rows="3" ></textarea>
        </div>
            
            <hr class="mb-4">
            <button class="btn btn-primary btn-sm btn-lg btn-block" type="submit">Submit</button>
          </form>
        </div>
      </div>
    
</div>
@endsection
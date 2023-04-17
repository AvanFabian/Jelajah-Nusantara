@extends('layouts.main')

@section('content')

@foreach($advice as $advice)
   <form method="POST" action="{{ route('update-advice', $advice->id) }}">
      @csrf
      @method('PUT')
      <div class="form-group">
         <label for="advice">Name</label>
         <input type="text" class="form-control" name="advice" value="{{ $advice->name }}">
      </div>
      <div class="form-group">
         <label for="category">Email</label>
         <input type="text" class="form-control" name="category" value="{{ $advice->email }}">
      </div>
      <div class="form-group">
         <label for="description">Users Advice</label>
         <textarea class="form-control" name="description">{{ $advice->advice }}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
   </form>
@endforeach
@endsection

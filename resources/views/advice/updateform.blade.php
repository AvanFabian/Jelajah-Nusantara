@extends('layouts.main')

@section('content')
   @foreach ($advice as $advice)
      @if ($advice->id == $id)
         <h1>Update Advice</h1>
         <form method="POST" action="{{ route('update-advice-function', $advice->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
               <label for="advice">Name</label>
               <input type="text" class="form-control" name="name" value="{{ $advice->name }}">
            </div>
            <div class="form-group">
               <label for="category">Email</label>
               <input type="text" class="form-control" name="email" value="{{ $advice->email }}">
            </div>
            <div class="form-group">
               <label for="description">Users Advice</label>
               <textarea class="form-control" name="advice">{{ $advice->advice }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
         </form>
      @endif
   @endforeach
@endsection

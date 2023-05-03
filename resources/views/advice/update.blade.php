@extends('layouts.main')

@section('content')
   <div class="container">
      <h1>Advice List</h1>
      @if (session('success'))
         <div class="alert alert-success">{{ session('success') }}</div>
      @endif
      @if (isset($errors) && count($errors) > 0)
         <div class="alert alert-danger">{{ session('error') }}</div>
      @endif
      <table class="table table-bordered">
         <thead>
            <tr>
               <th>Name</th>
               <th>Email</th>
               <th>Subject</th>
               <th>Users Advices</th>
               <th>Actions</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($advices as $advice)
               <tr>
                  <td>{{ $advice->name }}</td>
                  <td>{{ $advice->email }}</td>
                  <td>{{ $advice->subject }}</td>
                  <td>{{ $advice->advice }}</td>
                  <td>
                     {{-- <a href="{{ route('form-advice', ['id' => $advice->id]) }}" class="btn btn-primary">Edit</a> --}}
                     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Edit
                     </button>
                     {{-- <a href="{{ route('advices.update', $advice->id) }}" class="btn btn-primary">Edit</a> --}}
                     <form action="{{ route('advices.destroy', $advice->id) }}" method="POST"
                        style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                           onclick="return confirm('Are you sure you want to delete this advice?')">Delete</button>
                     </form>
                  </td>
               </tr>
               <!-- Start Modal -->
               <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Update Advice</h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                           <form method="POST" action="{{ route('update-advice-function', $advice->id) }}">
                              @csrf
                              @method('PUT')
                              <div class="mb-3">
                                 <label for="advice" class="form-label">Name</label>
                                 <input type="text" class="form-control" id="name" name="name" value="{{ $advice->name }}">
                              </div>
                              <div class="mb-3">
                                 <label for="category" class="form-label">Email</label>
                                 <input type="text" class="form-control" id="email" name="email" value="{{ $advice->email }}">
                              </div>
                              <div class="mb-3">
                                 <label for="subject" class="form-label">Subject</label>
                                 <input type="text" class="form-control" id="subject" name="subject" value="{{ $advice->subject }}">
                              </div>
                              <div class="mb-3">
                                 <label for="description" class="form-label">User's Advice</label>
                                 <textarea class="form-control" id="advice" name="advice">{{ $advice->advice }}</textarea>
                              </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary">Save changes</button>
                           {{-- <a href="{{ route('form-advice', ['id' => $advice->id]) }}" class="btn btn-primary">Update Advice</a> --}}
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
               {{-- End Modal --}}
            @endforeach
         </tbody>
      </table>
   </div>
@endsection

@extends('layouts.main')

@section('content')
   @foreach ($advice as $advice)
      @if ($advice->id == $id)
         <h1>Update Advice</h1>
         <form method="POST" action="{{ route('update-advice-function', $advice->id) }}">
            @csrf
            @method('PUT')
            <table>
               <tr>
                 <td>
                   <label for="advice">Name</label>
                 </td>
                 <td>
                   <input type="text" class="form-control" name="name" value="{{ $advice->name }}">
                 </td>
               </tr>
               <tr>
                 <td>
                   <label for="category">Email</label>
                 </td>
                 <td>
                   <input type="text" class="form-control" name="email" value="{{ $advice->email }}">
                 </td>
               </tr>
               <tr>
                 <td>
                   <label for="subject">Subject</label>
                 </td>
                 <td>
                   <input type="text" class="form-control" name="subject" value="{{ $advice->subject }}">
                 </td>
               </tr>
               <tr>
                 <td>
                   <label for="description">Users Advice</label>
                 </td>
                 <td>
                   <textarea class="form-control" name="advice">{{ $advice->advice }}</textarea>
                 </td>
               </tr>
               <tr>
                 <td colspan="2">
                   <button type="submit" class="btn btn-primary">Update</button>
                 </td>
               </tr>
             </table>
         </form>
      @endif
   @endforeach
@endsection

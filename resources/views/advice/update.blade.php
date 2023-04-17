@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Advice List</h1>
        @if(session('success'))
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
                    <th>Users Advices</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($advices as $advice)
                    <tr>
                        <td>{{ $advice->name }}</td>
                        <td>{{ $advice->email }}</td>
                        <td>{{ $advice->advice }}</td>
                        <td>
                            <a href="{{ route('form-advice') }}" class="btn btn-primary">Edit</a>
                            {{-- <a href="{{ route('advices.update', $advice->id) }}" class="btn btn-primary">Edit</a> --}}
                            <form action="{{ route('advices.destroy', $advice->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this advice?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

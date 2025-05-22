<!-- resources/views/users/show.blade.php -->
@extends('layouts.app')

@section('content')
<h1>{{ $user->name }}</h1>
<p>Email: {{ $user->email }}</p>

<a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
<form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

<a href="{{ route('users.index') }}" class="btn btn-secondary">Back to Users List</a>
@endsection
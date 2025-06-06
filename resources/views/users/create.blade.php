<!-- resources/views/users/create.blade.php -->
@extends('layouts.app')

@section('content')
<h1>Create New User</h1>

<form action="{{ route('users.store') }}" method="POST">
    @csrf <!-- CSRF protection -->

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Create User</button>
</form>
@endsection
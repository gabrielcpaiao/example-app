<!-- resources/views/users/edit.blade.php -->

@extends('layout')

@section('content')
    <h1>Edit User</h1>

    <!-- Display validation errors, if any -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- User edit form -->
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" id="password" name="password" class="form-control">
            <p>Leave blank if you don’t want to change the password</p>
        </div>

        <button type="submit" class="btn btn-success border border-dark">Update User</button>
    </form>

    <div class="d-flex flex-row-reverse">
        <a class="btn btn-dark border border-dark align-self-left" href="{{ route('users.index') }}">Back to User List</a>
    </div>
@endsection

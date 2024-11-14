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

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <p>Leave blank if you don’t want to change the password</p>
        </div>

        <button type="submit">Update User</button>
    </form>

    <a href="{{ route('users.index') }}">Back to User List</a>
@endsection

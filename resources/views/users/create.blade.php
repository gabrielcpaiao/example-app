@extends('layout')

@section('content')
<button type="button" class="btn btn-success">Create a new User</button>

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

<!-- User creation form -->
<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
    </div>

    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>

    <button type="submit">Create User</button>
</form>

<a href="{{ route('users.index') }}">Back to User List</a>
@endsection
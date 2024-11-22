@extends('layout')

@section('content')
<h1>New User</h1>

@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" id="password" name="password" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary border border-dark">Create User</button>
</form>

<div class="d-flex flex-row-reverse">
    <a class="btn btn-dark border border-dark align-self-left" href="{{ route('users.index') }}">Back to User List</a>
</div>

@endsection
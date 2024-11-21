@extends('layout')

@section('content')

<div class="d-flex">
    <div class="me-auto">
        <h1>User List</h1>
    </div>
    <div class="p-2">
        <a class="btn btn-success border border-dark align-self-center" href="{{ route('users.create') }}" role="button">Add new User</a>
    </div>
</div>

@if(session('success'))
<p>{{ session('success') }}</p>
@endif

<ul>
    @foreach($Users as $user)
    <ul class="list-group">
        <li class="list-group-item border border-dark mb-1">{{ $user->name }} > {{ $user->email }}
            <a class="btn btn-secondary border border-dark" href="{{ route('users.edit', $user) }}" role="button">Edit</a>
            <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger border border-dark" type="submit">Delete</button>
            </form>
        </li>
    </ul>
    @endforeach
</ul>
@endsection
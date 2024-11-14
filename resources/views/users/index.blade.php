@extends('layout')

@extends('content')
<h1>User List</h1>
<a href="{{ route('users.create') }}">Add New User</a>

@if(session('success'))
<p>{{ session('succes') }}</p>
@endif

<ul>
    @foreach($Users as $user)
    <li>{{ $user->name }} - {{ $user->email }}
        <a href="{{ route('users.edit', $user) }}">Edit</a>
        <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection
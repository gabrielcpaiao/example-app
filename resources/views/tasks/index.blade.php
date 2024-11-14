<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
</head>

<body>
    <h1>Taks</h1>

    <form action="/tasks" method="POST">
        @csrf
        <input type="text" name="name" placeholder="New Task" required>
        <button type="submit">Add Task</button>
    </form>

    <ul>
        @foreach ($tasks as $task)
        <li>
            <form action="/tasks/{{ $task->id }}" method="POST">
                @method('PATCH')
                @csrf
                <input type="checkbox" name="completed" {{ $task->completed ? 'checked' : ''}} onchange="this.form.submit()">
                {{ $task->name }}
            </form>
        </li>
        @endforeach
    </ul>
</body>

</html>
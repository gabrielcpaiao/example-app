<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
        // $tasks = Task::all();
        // return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        // $request->validate(['name' => 'required|string|max:255']);
        // Task::create(['name' => $request->name, 'completed' => false]);
        // return redirect('/tasks');
        $task = Task::create($request->all());
        return response()->json($task, 201);
    }

    public function update(Request $request, $id)
    {
        // $task->update(['completed' => $request->has('completed')]);
        // return redirect('/tasks');
        $task = Task::findOrFail($id);
        $task->update($request->all());
        return response()->json($task, 200);
    }

    public function show($id)
    {
        return Task::findOrFail($id);
    }
}

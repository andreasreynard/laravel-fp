<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Task_type;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    function show() {
        $tasks = Task::with(['user', 'task_type'])->get();
        return view('task.show', compact('tasks'));
    }
    
    function add() {
        $users = User::all();
        $task_types = Task_type::all();
        return view('task.add', compact('users', 'task_types'));
    }
    
    function submit(Request $request) {
        $task = new Task();
        $task->user_id = $request->user;
        $task->task_type_id = $request->task_type;
        $task->task_name = $request->task_name;
        $task->deadline = $request->deadline;
        $task->save();
        return redirect()->route('task.show');
    }
    
    function edit($id) {
        $task = Task::find($id);
        $users = User::all();
        $task_types = Task_type::all();
        return view('task.edit', compact('task', 'users', 'task_types'));
    }
    
    function update(Request $request, $id) {
        $task = Task::find($id);
        $task->user_id = $request->user;
        $task->task_type_id = $request->task_type;
        $task->task_name = $request->task_name;
        $task->deadline = $request->deadline;
        $task->save();
        return redirect()->route('task.show');
    }
    
    
    function finish($id) {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('task.show');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    function show() {
        $task = Task::get();
        return view('task.show',compact('task'));
    }
    
    function add() {
        return view('task.add');
    }
    
    function submit(Request $request) {
        $task = new Task();
        $task->user = $request->user;
        $task->task_type = $request->task_type;
        $task->task_name = $request->task_name;
        $task->deadline = $request->deadline;
        $task->save();
        return redirect()->route('task.show');
    }
    
    function edit($id) {
        $task = Task::find($id);
        return view('task.edit',compact('task'));
    }
    
    function update(Request $request, $id) {
        $task = Task::find($id);
        $task->user = $request->user;
        $task->task_type = $request->task_type;
        $task->task_name = $request->task_name;
        $task->deadline = $request->deadline;
        $task->update();
        return redirect()->route('task.show');
    }
    
    function finish($id) {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('task.show');
    }
}

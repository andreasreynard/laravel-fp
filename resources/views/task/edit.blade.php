@extends('layout')

@section('content')
<h4>Edit Task</h4>
<form action="{{ route('task.update', $task->id) }}" method="post">
    @csrf
    <label>User</label>
    <input type="text" name="user" value="{{ $task->user }}" class="form-control mb-2">
    <label>Task Type</label>
    <input type="text" name="task_type" value="{{ $task->task_type }}" class="form-control mb-2">
    <label>Task Name</label>
    <input type="text" name="task_name" value="{{ $task->task_name }}" class="form-control mb-2">
    <label>Deadline</label>
    <input type="datetime-local" name="deadline" value="{{ $task->deadline }}" class="form-control mb-2">
    <button class="btn btn-primary">Go!</button>
</form>
@endsection
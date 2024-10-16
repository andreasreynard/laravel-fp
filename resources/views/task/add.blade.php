@extends('layout')

@section('content')
<h4 style="color: blue; font-weight: bold;">Add Task</h4>
<form action="{{ route('task.submit') }}" method="post">
    @csrf
    <label>User</label>
    <input type="text" name="user" class="form-control mb-2">
    <label>Task Type</label>
    <input type="text" name="task_type" class="form-control mb-2">
    <label>Task Name</label>
    <input type="text" name="task_name" class="form-control mb-2">
    <label>Deadline</label>
    <input type="datetime-local" name="deadline" class="form-control mb-2">
    <button class="btn btn-primary">Go!</button>
</form>
@endsection
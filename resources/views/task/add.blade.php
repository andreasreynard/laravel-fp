@extends('layout')

@section('content')
<h4 style="color: blue; font-weight: bold;">Add Task</h4>
<form action="{{ route('task.submit') }}" method="post">
    @csrf
    <label>User</label>
    <select name="user" class="form-control mb-2">
        @foreach($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    <label>Task Type</label>
    <select name="task_type" class="form-control mb-2">
        @foreach($task_types as $task_type)
        <option value="{{ $task_type->id }}">{{ $task_type->name }}</option>
        @endforeach
    </select>
    <label>Task Name</label>
    <input type="text" name="task_name" class="form-control mb-2">
    <label>Deadline</label>
    <input type="datetime-local" name="deadline" class="form-control mb-2">
    <button class="btn btn-primary">Go!</button>
</form>
@endsection
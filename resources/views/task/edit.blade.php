@extends('layout')

@section('content')
<h4 style="color: blue; font-weight: bold;">Edit Task</h4>
<form action="{{ route('task.update', $task->id) }}" method="post">
    @csrf
    <label>User</label>
    <select name="user" class="form-control mb-2">
        @foreach($users as $user)
            <option value="{{ $user->id }}" {{ $user->id == $task->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
        @endforeach
    </select>
    <label>Task Type</label>
    <select name="task_type" class="form-control mb-2">
        @foreach($task_types as $task_type)
            <option value="{{ $task_type->id }}" {{ $task_type->id == $task->task_type_id ? 'selected' : '' }}>{{ $task_type->name }}</option>
        @endforeach
    </select>
    <label>Task Name</label>
    <input type="text" name="task_name" value="{{ $task->task_name }}" class="form-control mb-2">
    <label>Deadline</label>
    <input type="datetime-local" name="deadline" value="{{ $task->deadline }}" class="form-control mb-2">
    <button class="btn btn-primary">Go!</button>
</form>
@endsection
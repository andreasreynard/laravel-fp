@extends('layout')

@section('content')
<div class="d-flex">
    <h4 style="color: blue; font-weight: bold;">Task List</h4>
    <div class="ms-auto">
        <a class="btn btn-success" style="font-size: 30px; padding: 10px 20px;" href="{{ route('task.add') }}">Add Task</a>
    </div>
</div>
<table class="table">
    <tr>
        <th>Num.</th>
        <th>User</th>
        <th>Task Type</th>
        <th>Task Name</th>
        <th>Deadline</th>
        <th>Actions</th>
    </tr>
    @foreach($task as $no=>$data)
    <tr>
        <td>{{ $no+1 }}</td>
        <td>{{ $data->user }}</td>
        <td>{{ $data->task_type }}</td>
        <td>{{ $data->task_name }}</td>
        <td>{{ $data->deadline }}</td>
        <td>
            <a href="{{ route('task.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('task.finish', $data->id) }}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger">Finish</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
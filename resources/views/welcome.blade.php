<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>
    <h1 class="text-center mt-3">WELCOME TO MY TASKS</h1>
    <div class="text-center">
        <a href="{{ route('task.show') }}" class="btn btn-primary">MANAGE THEM</a>
    </div>
</body>
</html>

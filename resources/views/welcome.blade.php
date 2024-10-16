<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>
    <div class="mt-3 container" style="background-color: #333333; color: yellow;">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <span class="fs-4" style="font-weight: bold;">WELCOME TO MY TASKS</span>
        </header>
    </div>
    <div class="text-center">
        <a href="{{ route('task.show') }}" class="btn btn-primary" style="font-size: 20px; padding: 15px 30px;">MANAGE THEM</a>
    </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-12 d-flex justify-content-center align-items-center">
            <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Group 26, Inc</span>
        </div>
    </footer>
</body>
</html>

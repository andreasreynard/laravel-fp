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
            <span class="fs-4" style="font-weight: bold;">My C.R.U.D.-able Tasks</span>
        </header>
    </div>
    <div class="mt-3 container">
        @yield('content')
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Fun to School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
    <a class="navbar-brand" href="{{ route('home') }}">🎓 FunToSchool</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('school') }}">School</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('classes') }}">Classes</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('events') }}">Events</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('students') }}">Students</a></li>
        </ul>
    </div>
</nav>
<div class="container mt-4">
    @yield('content')
</div>
</body>
</html>

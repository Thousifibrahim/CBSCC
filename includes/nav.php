<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Navbar</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-nav, .navbar-collapse { justify-content: center; flex: 1; }
        .nav-item { margin: 0 20px; }
        .nav-link { font-size: 1.25rem; }
        .btn-custom { border-radius: 50px; border-width: 2px; font-weight: bold; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav">
            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.claretcollege.edu.in/">College</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php#users">Admin</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php#users">Student</a></li>
            <li class="nav-item"><a class="nav-link" href="internship.php">Internship</a></li>
            <li class="nav-item"><a class="nav-link" href="course.php">Course</a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.overleaf.com/login">Resume builder</a></li>
        </ul>
    </div>
</nav>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

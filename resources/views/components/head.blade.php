<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="p-3 pt-0" style="max-width:100vw;">
    <nav class="navbar nav-fill navbar-light">
        <h1 class="navbar-brand">
            {{ config('app.name') }}
        </h1>
        <div class="navbar justify-content-end">
            <a href="/posts" class="nav-link">posts</a>
            @auth
            <a href="/dashboard" class="nav-link">dashboard</a>
            <a href="/logout" class="nav-link">logout</a>
            @endauth
            @guest
            <a href="/login" class="nav-link">login</a>
            <a href="/register" class="nav-link">register</a>
            @endguest
        </div>
    </nav>


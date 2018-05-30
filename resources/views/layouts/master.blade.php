<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="col-md-3">
        <a class="navbar-brand" href="#"><i class="fab fa-adversal fa-4x"></i></a>
        <span class="text-muted">Site Slogan</span>
    </div>
    <div class="col-md-7">
        <form class="row">
            <div class="col-md-8">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </div>
            <div class="col-md-4">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </div>
        </form>
    </div>
    <div class="col-md-2 mt-3">
        <img src="https://www.overleaf.com/assets/logos/overleaf_og_logo.png" alt=""
             class="img-thumbnail rounded-circle w-25 mr-2 float-left">
        <div class="mt-3">
            <strong>Admin</strong>
            <a href="#">(Logout)</a>
        </div>
    </div>
    </div>
</nav>
<div class="container-fluid row">
    <nav class="col-md-2">
        <div class="nav flex-column nav-tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link" id="v-pills-profile-tab" href="/"
               aria-controls="v-pills-profile" aria-selected="false">Home</a>
            <a class="nav-link" id="v-pills-profile-tab" href="/products"
               aria-controls="v-pills-profile" aria-selected="false">Product Manager</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
               aria-controls="v-pills-messages" aria-selected="false">Order Manager</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
               aria-controls="v-pills-settings" aria-selected="false">Settings</a>
        </div>
    </nav>
    <main class="col-md-10">
        @section('content')
        @show
    </main>
</div>

<footer class="container-fluid">
    <p class="text-center">Copyright @2017</p>
</footer>

<script src="{{asset('js/app.js')}}"> </script>
</body>
</html>
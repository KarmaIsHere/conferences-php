<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/86cbdb02af.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://bootswatch.com/5/journal/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://media.giphy.com/media/l2v1YQMVH8rEAstMyK/giphy.gif');
            background-size: cover;
            background-position: center;
            font-family: Trebuchet MS, sans-serif;
            height: 100vh;
            overflow: hidden;
            color: black;
        }

        .frame {
            border: 1px solid black;
            padding: 10px;
            margin-bottom: 20px;
            background-color: rgba(255, 255, 255, 0.7);
        }

        h1 {
            text-align: center;
        }

        header {
            text-align: right;
            margin: 10px;
        }
    </style>
    <title>@yield('title')</title>

</head>
<body>
<div class="row mt-5 justify-content-center">
    <div class="col-md-auto">
        <header>
            @guest
                <a href="{{route('login')}}">Login</a>
            @else
                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout({{auth()->user()->name}})</a>
                <form action="{{route('logout')}}" method="post" id="logout-form" style="display: none">
                    @csrf
                </form>
            @endguest
        </header>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="frame">
                <h1>@yield('title')</h1>
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
</html>

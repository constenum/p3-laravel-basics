<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="description" content="CSCI E-15 P3: Laravel Basics">
    <meta name="author" content="Mark Miller">

    <title>@yield('title', 'P3 - Laravel Basics')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cerulean/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
</head>

<body>
    {{-- Fixed navbar --}}
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home.index') }}">Developer's Best Friend</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('home.index') }}">Home</a></li>
                    <li><a href="{{ route('lorem.index') }}">Lorem Ipsum</a></li>
                    <li><a href="{{ route('user.index') }}">Random User</a></li>
                    <li><a href="{{ route('color.index') }}t">Color</a></li>
                    <li><a href="{{ route('xkcd.index') }}t">xkcd Password</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Page content --}}
    @yield('content')

    {{-- Sticky footer --}}
    <footer class="navbar navbar-default footer">
        <div class="container">
            <p class="text-center">&copy; 2016 Mark Miller</p>
        </div>
    </footer>

    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/js/scripts.js"></script>
</body>
</html>

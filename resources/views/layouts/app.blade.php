<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.10.0/styles/default.min.css">
    <link rel="stylesheet" href="/css/bulma.css">
    <link rel="stylesheet" href="/css/app.css">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

<section class="hero is-medium is-primary is-bold">
    <div class="hero-body">
        <div class="container is-flex">

            <div class="flex">
                <h1 class="title">
                    <a href="/">Snippets</a>
                </h1>

                <h2 class="subtitle">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </h2>

                <p>
                    <a href="/snippets/create" class="button is-primary">Create New</a>
                </p>
            </div>

            @if(Auth::guest())
                <a href="/login">Sign In</a>&nbsp;|&nbsp;<a href="/register">Sign Up</a>
            @else
                <h2 class="title is-2"><a href="/home">{{ Auth::user()->name }}</a></h2> &nbsp;



                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                    {{ csrf_field() }}
                </form>

            @endif

        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        {{ $slot }}
    </div>
</section>

<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.10.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>
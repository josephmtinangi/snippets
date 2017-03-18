<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="/css/bulma.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

    <section class="hero is-medium is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    <a href="/">Snippets</a>
                </h1>

                <h2 class="subtitle">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </h2>

                <p>
                    <a href="/snippets/create" class="button is-primary">Create Snippet</a>
                </p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            {{ $slot }}
        </div>  
    </section>

</body>
</html>
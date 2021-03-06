<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') - julianvos.nl</title>

    <meta charset="utf-8" />
    <meta name="description" content="My personal website." />
    <meta name="author" content="Julian Vos" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.webp" />
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.webp" />
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.webp" />
    <link rel="icon" type="image/png" sizes="194x194" href="/icons/favicon-194x194" />
    <link rel="icon" type="image/png" sizes="192x192" href="/icons/android-chrome-192x192.webp" />
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.webp" />
    <link rel="manifest" href="/icons/site.webmanifest" />
    <link rel="mask-icon" href="/icons/safari-pinned-tab.svg" color="#e58c45" />
    <link rel="shortcut icon" href="/icons/favicon.ico" />
    <meta name="apple-mobile-web-app-title" content="Julian Vos" />
    <meta name="application-name" content="Julian Vos" />
    <meta name="msapplication-TileColor" content="#2b5797" />
    <meta name="msapplication-TileImage" content="/icons/mstile-144x144.webp" />
    <meta name="msapplication-config" content="/icons/browserconfig.xml" />
    <meta name="theme-color" content="#2b5797" />
    <meta name="Description" content="Personal website of Julian Vos" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="/styles/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/material.css">
    <script src="/javascript/jquery-3.6.0.min.js"></script>
    <script src="/javascript/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/c24dda3d1f.js" crossorigin="anonymous"></script>

    @stack('assets')
</head>

<body>
    @include('layouts.nav')

    <div class="content">
        <div class="content-inside">
            <div class="container p-1">
                @yield('content')
                <span class="fixed-bottom" id="warning"></span>
                <span class="fixed-bottom" id="success"></span>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>

</html>

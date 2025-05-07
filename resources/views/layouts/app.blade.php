<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'OA Tutor Blog')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}" />
</head>
<body class="light-theme">
    <main>
        @yield('content')
        @include('components.scripts')
        @include('partials.footer')
    </main>
</body>
</html>

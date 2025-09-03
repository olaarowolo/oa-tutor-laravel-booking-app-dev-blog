<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'OA Tutor Blog')</title>
    @vite(['resources/css/app.css', 'resources/css/pages/packages.css', 'resources/css/partials/footer.css', 'resources/js/app.js'])
</head>
<body class="light-theme">
    <main>
        @yield('content')
        @include('components.scripts')
        @include('partials.footer')
    </main>

    @vite('resources/js/app.js')
</body>
</html>

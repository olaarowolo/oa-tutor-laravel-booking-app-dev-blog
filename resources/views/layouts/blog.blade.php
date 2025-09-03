<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.blog.head')
    <link rel="stylesheet" href="{{ asset('css/blog-custom.css') }}">
    @vite(['resources/css/app.css', 'resources/css/pages/packages.css', 'resources/css/partials/footer.css', 'resources/js/app.js'])
</head>

<body class="light-theme">
    @include('partials.navbar')

    <main>
        @include('partials.blog.profile')
        @yield('content')
        @include('components.scripts')
        @include('partials.blog.footer')
    </main>

    @vite('resources/js/app.js')
</body>

</html>

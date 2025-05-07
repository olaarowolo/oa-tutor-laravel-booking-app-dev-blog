<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.blog.head')
    <link rel="stylesheet" href="{{ asset('css/blog-custom.css') }}">
</head>

<body class="light-theme">
    @include('partials.navbar')

    <main>
        @include('partials.blog.profile')
        @yield('content')
        @include('components.scripts')
        @include('partials.blog.footer')
    </main>
</body>

</html>

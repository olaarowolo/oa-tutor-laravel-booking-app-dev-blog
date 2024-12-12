<!DOCTYPE html>
<html lang="en">
@include('components.blog.head')

<body class="light-theme">
    @include('partials.blog.nav')
    <main>
        @include('components.slider')
        @yield('content')
        @include('components.scripts')
        @include('partials.blog.footer')
    </main>
</body>

</html>

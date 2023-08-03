<!DOCTYPE html>
<html lang="en">

{{--Header--}}
<head>
    @include('includes.header')
</head>
{{--Header--}}

<body>

    <div class="container mt-2">
        @yield('content')
    </div>

    <br>
    <br>

{{--    Footer--}}
    <footer class="text-center text-lg-start bg-light text-muted">
        @include('includes.footer')
    </footer>
{{--    Footer--}}

</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('custom/img/favicon.png') }}" type="image/png">

    <title>Task | Form</title>
    @include ('layouts.style')

    @yield ('style')

</head>

<body>
    @include ('layouts.header')

    @yield ('content')

    @include ('layouts.footer')
    
    @include ('layouts.script')

    @stack ('script')

</body>
</html>
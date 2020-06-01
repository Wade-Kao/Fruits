<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

</head>
<body>
    @yield('content')
{{ $tel }}

    @section('js')
        <script src="js/1.js" /></script>

    @show
    <p>js結束</p>
    {{ $address }}
</body>
</html>

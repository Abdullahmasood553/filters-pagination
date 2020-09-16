<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filter App</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    @include('inc.header')
    <div class="main-box">
        @yield('content')
    </div>
    @include('inc.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  @stack('scripts')
</body>
</html>
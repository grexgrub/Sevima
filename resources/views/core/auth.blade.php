


<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ URL::asset('js/jquery.js') }}" ></script>
    <link rel="stylesheet" href="{{ URL::asset('css/auth.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/components/peringatan.css') }}">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>
<body >
    <main id="main" class="w-full h-full bg-gray-100">
        @yield('main')
    </main>
    @yield('script')
</body>
</html>
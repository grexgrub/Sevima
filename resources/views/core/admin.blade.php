<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="{{ URL::asset('js/jquery.js') }}" ></script>
    <link rel="stylesheet" href="{{ URL::asset('css/auth.css')}}">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <main id="main" class="">
        @yield('main')
    </main>
   <script type="module"  src="{{ URL::asset('js/flowbite/dist/flowbite.js') }}"></script>
   <script src="https://kit.fontawesome.com/57645609e7.js" crossorigin="anonymous"></script>
    @yield('script')
</body>
</html>
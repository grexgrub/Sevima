
<?php
use App\utiliti\Flasher;

?>


<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ URL::asset('js/jquery.js') }}" ></script>
    <script src="https://kit.fontawesome.com/57645609e7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    @yield('css')
</head>
<body class="bg-gray-50">
   @include('components.sidebar')
    <main id="main" class="relative {{($title == 'Baca' ? 'py-0' : 'py-4')}} lg:px-4">
        <div class="absolute w-1 scroll"></div>
        @yield('main')
    </main>
<script>
$('#main').on('load', function(){
    $('#load').addClass('hidden');
})
</script>
   @yield('script')
   <script type="module"  src="{{ URL::asset('js/main.js') }}"></script>
   <script type="module"  src="{{ URL::asset('js/flowbite/dist/flowbite.js') }}"></script>
</body>
</html>
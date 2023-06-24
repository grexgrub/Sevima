

<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ URL::asset('js/jquery.js') }}" ></script>
    <link rel="stylesheet" href="{{ URL::asset('css/components/peringatan.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/auth.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/ck.css')}}">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
@php
use App\utiliti\Flasher;
Flasher::flash();
@endphp
    <main id="main" class="flex">
        @yield('main')
    </main>
   <script type="module"  src="{{ URL::asset('js/flowbite/dist/flowbite.js') }}"></script>
   <script src="https://kit.fontawesome.com/57645609e7.js" crossorigin="anonymous"></script>
    @yield('script')
@if(session('warning'))
    @include('script.peringatan')
@endif
</body>
</html>

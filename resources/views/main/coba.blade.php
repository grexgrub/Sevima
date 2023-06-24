@extends('layout/main')


@section('main')
<div class="flex flex-col justify-start w-64 relative">
    <span class="w-full">
        <input type="text" class="w-full" id="search" data-url="{{route('coba')}}">
    </span>
    <span class="relative">
    <span id="search-dropdown" class="flex shadow-lg rounded-b-md flex-col bg-white w-full absolute">
    </span>
    </span>
</div>
<div class="mt-10">
    <div class="">
    </div>
</div>
@include('script.aray')
@endsection()

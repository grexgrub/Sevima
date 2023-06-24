@extends('core.auth')


@section('main')
@php
use App\utiliti\Flasher;
Flasher::flash();
@endphp
<form action="{{route('admin._login')}}" id="login-user-form" class="w-4/12 form-login bg-white flex flex-col p-3 py-16 shadow-lg" method="post">
    @csrf
    @include('components.loginUser', ['type' => 'a']);
    <button class="w-10/12 bg-purple-400 hover:bg-purple-500 self-center mt-3 p-2 rounded-sm " type="submit">Login</button>
    <div class="self-center bold italic text-purple-800">
        Clesson
    </div>
</form>
@if(session('warning'))
    @include('script.peringatan')
@endif
@endSection()

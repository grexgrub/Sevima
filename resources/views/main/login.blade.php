@extends('layout/auth')



@section('main')
<form action="{{ route('user.login.owner') }}" id="login-user-form" class="w-4/12 form-login bg-white flex flex-col p-3 py-16 shadow-lg" method="post">
    @csrf
    @include('components/loginUser')
    <button class="w-10/12 bg-purple-400 hover:bg-purple-500 self-center mt-3 p-2 rounded-sm " type="submit">Login</button>
    <div class="self-center w-10/12 my-5">
        <span class="text-blue-500">tidak punya akun?</span>
        <span class="text-blue-600"><a href="/register">Buat akun</a></span>
    </div>
    <div class="self-center bold italic text-purple-800">
        Artic
    </div>
</form>
@if(session('warning'))
    @include('script.peringatan')
@endif
@endSection()

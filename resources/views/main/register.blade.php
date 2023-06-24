@extends('layout.auth')


@section('main')
<?php

use App\utiliti\Flasher;

Flasher::flash(); ?>
<form action="{{ route('user._registering') }}" id="login-user-form" class="w-4/12 form-login bg-white flex flex-col px-6 py-16 shadow-lg" method="post">
    @csrf
  <div class="mb-6">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
    <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    <span class="text-sm ml-1" id="emailWarn">Harus di isi</span>
    <br>
    <span class="text-sm ml-1 text-red-700" id="emailBackendError">{{ $errors->error->first('email')}}</span>

  </div>
  <div class="mb-6">
    <label for="username" class="block mb-2 text-sm font-medium text-gray-900">User Name</label>
        <input id="username" name="username" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  >
    <span class="text-sm ml-1 text-red-600" id="usernameWarn">Harus di isi</span>
    <br>
    <span class="text-sm ml-1 text-red-700" id="usernameBackendError">{{ $errors->error->first('username')}}</span>
  </div>
  <div class="mb-6">
    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
    <input type="password" id="password" name="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
    <span class="text-sm ml-1 text-red-600" id="passwordWarn">Harus di isi</span>
    <br>
    <span class="text-sm ml-1 text-red-700" id="passwordBackendError">{{ $errors->error->first('password')}}</span>
  </div>
  <div id="strengMeter" class="mb-4 h-1 w-10/12 self-center rounded hidden">
        <div class="h-full bg-green-400 rounded"  id="meter"></div>
  </div>
    <input name="text" id="text" type="texty">
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Register new account</button>
  <div class="mt-6">
        <span>sudah punya akun?</span>
        <span class="text-blue-600"><a href="/">Login</a></span>
  </div>
<div class="hidden bg-blue-600"></div>
</form>
<script>
</script>
@if(session('warning'))
    @include('script.peringatan')
@endif
@endsection()
@section('script')
<script src="{{ URL::asset('js/components/register.js')}}"></script>
@endsection()

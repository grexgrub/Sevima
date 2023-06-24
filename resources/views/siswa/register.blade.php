@extends('core.auth')


@section('main')
<form action="{{ route('user._registering') }}" id="login-user-form" class="w-4/12 form-login bg-white flex flex-col px-6 py-16 shadow-lg" method="post">
    @csrf
    @include('components.siswa.register')
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Register new account</button>
  <div class="mt-6">
        <span>sudah punya akun?</span>
        <span class="text-blue-600"><a href="/">Login</a></span>
  </div>
<div class="hidden bg-blue-600"></div>
</form>
<script>
</script>
@endsection()
@section('script')
<script src="{{ URL::asset('js/components/register.js')}}"></script>
@endsection()

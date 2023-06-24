@extends('core.auth')


@section('main')
<form action="{{route('siswa._register')}}" id="login-user-form" class="w-4/12 form-login bg-white flex flex-col px-6 py-16 shadow-lg" method="post">
    @csrf
    @include('components.siswa.register')
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
<script src="{{ URL::asset('js/components/siswaRegister.js')}}"></script>
@endsection()

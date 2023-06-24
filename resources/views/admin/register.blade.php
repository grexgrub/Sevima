@extends('core.auth')

@section('main')
<form action="{{route('admin._register')}}" id="login-user-form" class="w-4/12 form-login bg-white flex flex-col p-3 py-16 shadow-lg" method="post">
    @csrf
    @include('components.admin.register', ['type' => 'a'])
    <div class="self-center bold italic text-purple-800">
        Clesson
    </div>
</form>
@if(session('warning'))
    @include('script.peringatan')
@endif
@endSection()

@section('script')
<script src="{{URL::asset('js/components/register.js')}}"></script>
@endSection()

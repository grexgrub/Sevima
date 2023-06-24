@extends('core.admin')

@section('main')
@php
use App\utiliti\Flasher;
Flasher::flash();
@endphp
    @include('components.admin.dashboard')
<div class="p-4 sm:ml-64 w-8/12 h-full mt-20 ">
    <div class="w-full mb-5 flex items-center justify-between">
        @include('components.admin.search')
        <div class="ml-4">
            <a href="{{route('admin.tambah.kelas.view')}}" class="p-2 bg-blue-700 text-white rounded-sm"><i class="fa-solid text-green-300 fa-plus-square mr-1"></i>Tambah</a>
        </div>
    </div>
    @include('components.admin.table')
</div>
@include('components.admin.modal')
@if(session('warning'))
    @include('script.peringatan')
@endif
@endsection()

@section('script')
<script>
$(document).ready(function(){
    const jadwalbtn = document.getElementsByClassName('jadwal-btn')
    for(let i = 0; i < jadwalbtn.length;i++){
        jadwalbtn[i].addEventListener('click', function(){
            console.log($('.jadwal-btn'))
        })
    }
})
</script>

@endsection

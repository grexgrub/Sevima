
@extends('core.admin')


@section('main')
    @include('components.admin.dashboard')
<div class="p-4 flex sm:ml-64 justify-center w-8/12">
<div class="ml-20 sm:ml-64 w-8/12 px-8 shadow-md py-10 rounded-sm  mt-20 flex bg-white">
    <div class="w-64">
        <img src="{{URL::asset('blank-profile.webp')}}" alt="">
    </div>
    <div class="ml-10">
        <h2 class="font-bold">Detail</h2>
        @if($siswa['nama'] == null)
           <span class="text-red-600 font-bold">Non Aktif</span>
        @else
        <ul class="">
            <li>Nama: {{$siswa['nama']}} </li>
            <li>No siswa: {{$siswa['noSiswa']}}</li>
            <li>No absen: {{$siswa['noAbsen']}}</li>
            <li>kelas: {{$siswa['kelas']}}</li>
            <li>jenis kelamin: {{$siswa['jenisKelamin']}}</li>
            <li>umur: {{$siswa['umur']}}</li>
        </ul>
        @endif
    </div>
    </div>
</div>
@endsectison()

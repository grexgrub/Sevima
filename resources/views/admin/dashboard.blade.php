@extends('core.admin')

@section('main')
@php
use App\utiliti\Flasher;
Flasher::flash();
@endphp
    @include('components.admin.dashboard')
<div class="p-4 sm:ml-64 w-8/12 h-full mt-32 ">
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
            $.ajax({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: 'http://localhost:8000/admin/jadwalKelasModal',
                data: {data: jadwalbtn[i].getAttribute('data-namaKelas')},
                method: 'post',
                success: function(data){
                    $('#jadwal-modal').html(data);
                }
            })
        })
    }

    $('#search-kelas').on('input', function(){
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/admin/search',
            method: 'post',
            data: {data: $('#search-kelas').val()},
            success: function (data){
                let res = '';
                for(let i = 0; i < data.length; i++){
                res += '<tr class="bg-white border-b "><th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">'+data[i].namaKelas+'</th><td class="px-6 py-2">32</td>32<td class="px-6 py-2"><button type="button" data-modal-target="staticModal" data-modal-toggle="staticModal" data-namaKelas="'+data[i].namaKelas+'" class="focus:outline-none jadwal-btn text-white bg-blue-700 mt-5 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 rounded-sm font-bold text-sm px-3 py-1 mb-2 ">Jadwal</button></td><td class="px-6 py-2"><a href="/admin/edit/'+data[i].namaKelas+'"class="font-medium text-blue-600 dark:text-blue-500 hover:underline ml-2">Edit</a><a href="/admin/delete/'+data[i].namaKelas+'" onclick="return confirm(\'apakah anda yakin menghapus kelas\')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline ml-2">Delete</a><a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline ml-2">Detail</a></td></tr>'
                }
                $('#admin-kelas-body').html(res)
            }
        })
    })

})
</script>

@endsection


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
            <a href="{{route('admin.tambah.siswa.view')}}" class="p-2 bg-blue-700 text-white rounded-sm"><i class="fa-solid text-green-300 fa-plus-square mr-1"></i>Tambah</a>
        </div>
    </div>
    @include('components.admin.table-siswa')
</div>
@if(session('warning'))
    @include('script.peringatan')
@endif
@endsection()

@section('script')
<script>
$(document).ready(function(){
    $('#search-kelas').on('input', function(){
        $.ajax({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/admin/search-siswa',
            method: 'post',
            data: {data: $('#search-kelas').val()},
            success: function (data){
                let res = '';
                for(let i = 0; i < data.length; i++){
                res += '<tr class="bg-white border-b "><th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">'+(data[i].nama == null ? 'Kosong' : data[i].nama)+'</th><td class="px-6 py-2">32</td>'+data[i].noSiswa+'<td class="px-6 py-2">'+data[i].kelas+'</td><td class="px-6 py-2"><a href="/admin/detalSiswa/'+data[i]/noSiswa+'" class="font-medium text-blue-600 dark:text-blue-500 hover:underline ml-2">Detail</a></td></tr>'
                }
                $('#admin-siswa').html(res)
            }
        })
    })

})
</script>

@endsection

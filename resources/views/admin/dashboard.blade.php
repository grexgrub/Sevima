@extends('core.admin')

@section('main')
    @include('components.admin.dashboard')
<div class="p-4 sm:ml-64 w-8/12 h-full mt-20 ">
    <div class="w-full mb-5 flex items-center justify-between">
        @include('components.admin.search')
        <div class="ml-4">
            <button class="p-2 bg-blue-700 text-white rounded-sm"><i class="fa-solid text-green-300 fa-plus-square mr-1"></i>Tambah</button>
        </div>
    </div>
    @include('components.admin.table')
</div>
@endsection()

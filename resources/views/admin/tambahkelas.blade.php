@extends('core.admin')

@section('main')
    @include('components.admin.dashboard')
<div class="p-4 sm:ml-64 w-8/12 h-full mt-20 ">
    <form action="">
        <div>
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Nama Kelas</label>
            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-sm bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="mt-4">
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Jadwal</label>
            <textarea name="editor" id="editor" cols="30" rows="10">{{ old('editor') }}</textarea>
        </div>
            <button type="button" class="focus:outline-none text-white bg-blue-700 mt-5 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 rounded-sm font-bold text-sm px-5 py-2.5 mb-2 ">Tambah</button>
    </form>
</div>
@endsection()
@section('script')
<script src="{{ URL::asset('js/ckeditor/ckeditor5super.js') }}"></script>
@include('jadwalCkeditor')
@endsection()

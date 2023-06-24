@extends('core.admin')


@section('main')
    @include('components.admin.dashboard')
<div class="p-4 sm:ml-64 w-8/12 h-full mt-20 ">
    <form action="{{route('admin.tambah.kelas')}}" method="post">
        @csrf
        <div {{$save == 'true' ? 'hidden' : ''}}>
            <label for="small-input" class="block mb-2 text-md font-medium text-gray-900">Nama Kelas</label>
            <input value="{{old('namaKelas')}}" type="text" id="small-input" name="namaKelas" id="namaKelas" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-sm bg-gray-50 text-md focus:ring-blue-500 focus:border-blue-500">
            <span class="text-red-700 text-sm">{{ $errors->tambahKelas->first('namaKelas') }}</span>
        </div>
        <div class="mt-4">
            <label for="small-input" class="block mb-2 text-md font-medium text-gray-900">Jadwal</label>
            <textarea name="editor" id="editor" cols="30" rows="10">{{ old('editor') }}</textarea>
            <span class="text-red-700 text-sm">{{ $errors->tambahKelas->first('editor') }}</span>
        </div>
        <input type="text" name="save" id="save" value="{{$save == 'true' ? $save : ''}}" hidden>
        <button type="submit" class="focus:outline-none text-white bg-blue-700 mt-5 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 rounded-sm font-bold text-sm px-5 py-2.5 mb-2 ">{{$save == 'true' ? 'Save' : 'Tambah'}}</button>
    </form>
</div>
@if(session('warning'))
    @include('script.peringatan')
@endif
@endsection()
@section('script')
<script src="{{ URL::asset('js/ckeditor/ckeditor5super.js') }}"></script>
@include('jadwalCkeditor')
@endsection()

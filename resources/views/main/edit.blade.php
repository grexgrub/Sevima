@extends('layout.main')



@section('main')
<form action="" method="post" id="artikelform" class="container mx-auto flex-col justify-evenly md:justify-start  flex-wrap flex columns-4">
    @csrf
    <div class="flex-col flex mb-4 w-full lg:w-6/12">
        <div class="mt-4">
        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900"><strong>Judul</strong></label>
        <input id="judl" name="judul" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-none bg-white sm:text-xs focus:ring-blue-500 focus:border-blue-500 " value="{{ $artikel->getAttributes()['judul']}}">
        {{ $errors->first('judul') }}
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 mt-3 "><strong>Description</strong> Opsional</label>
        <textarea id="description" name="description" rows="4" class="block p-2.5 w-full rounded-none text-sm text-gray-900 bg-white border border-gray-300 focus:ring-blue-500 focus:border-blue-500 ">{{$artikel->getAttributes()['deskripsi']}}</textarea>
        <textarea name="second_desc" id="second_desc" cols="30" rows="10" hidden>{{ old('second_desc') }}</textarea>
    </div>
    </div>
    <textarea name="editor" id="editor" cols="30" rows="10">{{$artikel->getAttributes()['isi']}}</textarea>
    {{ $errors->first('editor') }}
    <div>
        @include('components/btn', ['aksi' => 'upload', 'bg' => 'bg-blue-700', 'fungsi' => 'Upload', 'text' => 'text-white', 'hover' => 'bg-blue-800'])
        @include('components/btn', ['aksi' => 'save', 'bg' => 'bg-yellow-300', 'fungsi' => 'Save', 'text' => 'text-gray-900','hover' => 'bg-yellow-500'])
    </div>
</form>
@include('components/tooltip')
@endsection()

@section('script')
<script src="{{ URL::asset('js/ckeditor/ckeditor5super.js') }}"></script>
<script src="{{ URL::asset('js/components/description-filler.js') }}"></script>
<script src="{{ URL::asset('js/components/saveORupload.js') }}"></script>
@include('ckeditor')
@endsection()

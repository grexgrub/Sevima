@extends('core.main')



@section('main')
<form action="{{route('siswa.savecatatan')}}" method="post" id="artikelform" class="container mx-auto flex-col justify-evenly md:justify-start w-10/12 h-full overflow-scroll   flex-wrap flex columns-4">
    @csrf
    <div class="flex-col flex mb-4 w-full lg:w-6/12">
        <label for="small-input" class="block mb-1 bold font-medium " id="username" name="username">Judul</label>
        <input  type="text" id="judul" name="judul" class="block w-full p-1 text-gray-900 border border-gray-300 rounded-sm bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
        <span class="text-sm ml-1 text-red-700" id="judulBackendError">{{ $errors->save->first('judul')}}</span>
    </div>
    <label for="editor" class="block mb-1 bold font-medium " id="username" name="username">Catatan</label>
    <textarea name="editor" id="editor" cols="30" rows="10">{{ old('editor') }}</textarea>
    <span class="text-sm ml-1 text-red-700" id="editorBackendError">{{ $errors->save->first('editor')}}</span>
    {{ $errors->first('editor') }}
    <div class="mt-5">
        @include('components/btn', ['type' => 'submit','aksi' => 'save', 'bg' => 'bg-yellow-300', 'fungsi' => 'Save', 'text' => 'text-gray-900','hover' => 'bg-yellow-500'])
    </div>
</form>
@include('components/tooltip')
@endsection()

@section('script')
<script src="{{ URL::asset('js/ckeditor/ckeditor5super.js') }}"></script>
<script src="{{ URL::asset('js/components/description-filler.js') }}"></script>
<script src="{{ URL::asset('js/components/saveORupload.js') }}"></script>
@include('catatanCk')
@endsection()

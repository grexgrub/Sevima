@extends('core.guru')



@section('main')
<form action="{{route('guru.upload')}}" method="post" id="artikelform" class="container  w-10/12 mx-auto flex-col justify-evenly md:justify-start  flex-wrap flex columns-4">
    @csrf
    <div class="flex-col flex mb-4 w-full lg:w-6/12">
         @include('components/input-materi')
    </div>
    <textarea name="editor" id="editor" cols="30" rows="10">{{ old('editor') }}</textarea>
    {{ $errors->first('editor') }}
    <div class="mt-5">
        @include('components/btn', ['type' => 'submit','aksi' => 'upload', 'bg' => 'bg-blue-600', 'fungsi' => 'uploa6', 'text' => 'text-gray-900','hover' => 'bg-yellow-500'])
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

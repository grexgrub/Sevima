
@extends('core.main')
@section('css')
    <link rel="stylesheet" href="{{URL::asset('css/components/ckeditor.css')}}">
@endsection
@section('main')
    <div class="container mx-auto  p-4 min-h-screen flex-wrap flex columns-4" id="card-isi">
        @include('components/tooltip')
        @include('components/baca')
    </div>
@endsection()

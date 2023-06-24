@extends('layout.main')


@section('css')
@endsection()


@section('main')

        @include('components/toolbar', ['hidden1' => 'hidden', 'hidden2' => 'hidden', 'hidden3' => 'hidden', 'url' => route('search') ]);
    <div class="container mx-auto justify-evenly xl:justify-start  flex-wrap flex columns-4" id="card-isi">
        @include('components/nullArtikel')
        @include('components/card')
    </div>
@include('components/tooltip')
<div id="pagin">
@include('components/pagination')
</div>
@include('script/search')
@endsection()

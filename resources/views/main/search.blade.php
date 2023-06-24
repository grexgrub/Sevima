@extends('layout.main')


@section('css')
@endsection()


@section('main')

        @include('components/toolbar', ['hidden1' => 'hidden', 'hidden2' => 'hidden', 'hidden3' => 'hidden' ]);
    <div class="container mx-auto justify-evenly xl:justify-start  flex-wrap flex columns-4" id="card-isi">
        @include('components/card')
        @include('components/tooltip')
    </div>
@include('script/search')
<div id="pagin">
@include('components/paginateJson')
</div>
@endsection()

@extends('core.main')


@section('main')

        @include('components/toolbar', ['hidden1' => 'hidden', 'hidden2' => 'hidden', 'hidden3' => 'hidden', 'url' => 'asd' ]);
    <div class="container mx-auto justify-evenly xl:justify-start  flex-wrap flex columns-4" id="card-isi">
    </div>
@include('components/tooltip')
<div id="pagin">
</div>
@endsection()

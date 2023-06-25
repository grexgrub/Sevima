@extends('core.main')


@section('main')
    <div class="container mx-auto h-full items-start justify-evenly xl:justify-start  flex-wrap flex columns-4" id="card-isi">
    @include('components.card')
    </div>
@include('components/tooltip')
<div id="pagin">
</div>
@endsection()

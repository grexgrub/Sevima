
@extends('core.main')


@section('main')
@include('components.siswa.search')
<div class="container mx-auto  h-full justify-evenly xl:justify-start w-10/12  items-start  flex-wrap flex columns-4" id="card-isi">
    @include('components/card')
    </div>
@include('components/tooltip')
<div id="pagin">
</div>
@endsection()

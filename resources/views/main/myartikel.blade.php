@extends('layout.main')



@section('main')
@include('components/toolbar', ['A' => 'Uploaded', 'B' => 'Saved', 'C' => 'All', 'link1' => '/myartikel/uploaded', 'link2' => '/myartikel/saved', 'link3' => '/myartikel', 'url' => route('search.myartikel') ] )
<div class="container mx-auto justify-evenly xl:justify-start  flex-wrap flex columns-4 " id="card-isi">
    @include('components/cardme')
</div>
@include('components/tooltip')
@include('script/search')
@endsection()

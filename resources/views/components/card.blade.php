@foreach($materi as $a)
<div class="lg:max-w-sm md:w-5/12 w-max p-6 bg-white  border border-gray-200 rounded-lg shadow m-3">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$a->getAttributes()['judul']}}</h5>
    </a>
    <h5>Dibuat: {{ $a->getAttributes()['created_at'] }}</h5>
    <h5 class="mb-2">Author: {{ $a->getAttributes()['author'] }}</h5>
    <a href="/siswa/materi/{{$a->getAttributes()['slug']}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
        Baca
    </a>
</div>
@endforeach

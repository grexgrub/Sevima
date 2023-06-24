@foreach($artikel as $a)
<div class="lg:max-w-sm md:w-5/12 w-max p-6 bg-white border border-gray-200 rounded-lg shadow m-3">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$a->getAttributes()['judul']}}</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700">{{$a->getAttributes()['deskripsi']}}</p>
    <h5>Dibuat: {{ $a->getAttributes()['created_at'] }}</h5>
    <h5 class="mb-2">Author: {{ $a->getAttributes()['id_artikel'] }}</h5>
    <a href="/artikel/{{$a->getAttributes()['slug']}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
        Read more
    </a>
    <a href="/artikel/edit/{{$a->getAttributes()['slug']}}" type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5  mb-2">Edit</a>
    <a href="/artikel/delete/{{$a->getAttributes()['slug']}}" type="button" class="focus:outline-none text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-500 font-medium rounded-lg text-sm px-5 py-2.5  mb-2">Delete</a>
</div>
@endforeach

<div class="relative overflow-x-auto shadow-md ">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama Kelas
                </th>
                <th scope="col" class="px-6 py-3">
                    Jumlah murid
                </th>
                <th scope="col" class="px-6 py-3">
                    Jadwal
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $k)
            <tr class="bg-white border-b ">
                <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                    {{$k['namaKelas']}}
                </th>
                <td class="px-6 py-2">
                    32
                </td>
                <td class="px-6 py-2">
                    <button type="button" data-modal-target="staticModal" data-modal-toggle="staticModal" data-namaKelas="{{$k['namaKelas']}}" class="focus:outline-none jadwal-btn text-white bg-blue-700 mt-5 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 rounded-sm font-bold text-sm px-3 py-1 mb-2 ">Jadwal</button>
                </td>
                <td class="px-6 py-2">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline ml-2">Edit</a>
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline ml-2">Delete</a>
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline ml-2">Detail</a>
                </td>
            </tr>
            @endforeach
    </table>
</div>

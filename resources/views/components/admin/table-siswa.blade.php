<div class="relative overflow-x-auto shadow-md ">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama Siswa
                </th>
                <th scope="col" class="px-6 py-3">
                    No Siswa
                </th>
                <th scope="col" class="px-6 py-3">
                    kelas
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody id="admin-siswa">
            @foreach ($siswa as $s)
            <tr class="bg-white border-b ">
                <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">
                    {{$s['nama'] == null ? 'Kosong' : $s['nama']}}
                </th>
                <td class="px-6 py-2">
                    {{$s['noSiswa']}}
                </td>
                <td class="px-6 py-2">
                    {{$s['kelas']}}
                </td>
                <td class="px-6 py-2">
                    <a href="/admin/detailSiswa/{{$s['noSiswa']}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline ml-2">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

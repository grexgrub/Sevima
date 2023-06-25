<div class="mt-4">
<label for="small-input" class="block mb-2 text-sm font-medium text-gray-900"><strong>Judul</strong></label>
<input id="judl" name="judul" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-none bg-white sm:text-xs focus:ring-blue-500 focus:border-blue-500 " value="{{ old('judul') }}">
<span class="text-sm ml-1 text-red-700" id="emailBackendError">{{ $errors->save->first('judul')}}</span>
<label for="small-input" class="block mb-2 mt-2 text-sm font-medium text-gray-900"><strong>Kelas</strong></label>
<input id="kelas" name="kelas" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-none bg-white sm:text-xs focus:ring-blue-500 focus:border-blue-500 " value="{{ old('judul') }}">
<span class="text-sm ml-1 text-red-700" id="emailBackendError">{{ $errors->save->first('kelas')}}</span>
</div>




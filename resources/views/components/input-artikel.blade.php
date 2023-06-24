<div class="mt-4">
<label for="small-input" class="block mb-2 text-sm font-medium text-gray-900"><strong>Judul</strong></label>
<input id="judl" name="judul" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-none bg-white sm:text-xs focus:ring-blue-500 focus:border-blue-500 " value="{{ old('judul') }}">
{{ $errors->first('judul') }}
<label for="message" class="block mb-2 text-sm font-medium text-gray-900 mt-3 "><strong>Description</strong> Opsional</label>
<textarea id="description" name="description" rows="4" class="block p-2.5 w-full rounded-none text-sm text-gray-900 bg-white border border-gray-300 focus:ring-blue-500 focus:border-blue-500 ">{{ old('description') }}</textarea>
<textarea name="second_desc" id="second_desc" cols="30" rows="10" hidden>{{ old('second_desc') }}</textarea>
</div>




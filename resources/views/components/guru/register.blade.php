<div class="mb-6">
    <div class="pilihan-login border border-blue-300 bg-blue-200 flex p-1 self-center rounded-sm">
        <{{$type}} href="{{route('guru.login')}}" class="flex-grow bg-blue-499 hover:bg-blue-300 flex justify-center {{$type == 'a' && $title == 'guru-Login' ? 'bg-blue-500' : '' }} items-center rounded-sm" type="button" id="murid-btn" type="button">Login</{{$type}}>
        <{{$type}} href="{{route('guru.register')}}" class="flex-grow bg-blue-499 hover:bg-blue-300 flex justify-center {{$type == 'a' && $title == 'guru-register' ? 'bg-blue-500' : '' }} items-center rounded-sm" type="button" id="murid-btn" type="button">Register</{{$type}}>
    </div>

</div>
<div class="mb-6">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">email</label>
    <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    <span class="text-sm ml-1" id="emailWarn">Harus di isi</span>
    <br>
    <span class="text-sm ml-1 text-red-700" id="emailBackendError">{{ $errors->error->first('email')}}</span>
  </div>
  <div class="mb-6">
    <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
        <input id="name" name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  >
    <span class="text-sm ml-1 text-red-600" id="nameWarn">Harus di isi</span>
    <br>
    <span class="text-sm ml-1 text-red-700" id="nameBackendError">{{ $errors->error->first('username')}}</span>
  </div>
  <div class="mb-6">
    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">password</label>
    <input type="password" id="password" name="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="" required>
    <span class="text-sm ml-1 text-red-600" id="passwordWarn">Harus di isi</span>
    <br>
    <span class="text-sm ml-1 text-red-700" id="passwordBackendError">{{ $errors->error->first('password')}}</span>
  </div>
  <div id="strengMeter" class="mb-4 h-1 w-10/12 self-center rounded hidden">
        <div class="h-full bg-green-400 rounded"  id="meter"></div>
  </div>
    <input name="text" id="text" type="texty">
  <button type="submit" class="text-white bg-purple-400 hover:bg-purple-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-sm text-sm px-5 py-2.5 text-center">Daftar</button>
<div class="hidden bg-blue-600"></div>

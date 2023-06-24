
  <div class="relative z-0 w-full mb-6 group">
      <input type="text" name="noSiswa" id="noSiswa" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
      <label for="noSiswa" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No Siswa</label>
    <span class="text-sm ml-1 text-red-700" id="noSiswaBackendError">{{ $errors->siswaRegister->first('noSiswa')}}</span>
  </div>
  <div class="relative z-0 w-full mb-6 group">
      <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
      <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
      <span class="text-sm ml-1" id="emailWarn">Harus di isi</span>
      <span class="text-sm ml-1 text-red-700" id="emailBackendError">{{ $errors->siswaRegister->first('email')}}</span>
  </div>
  <div class="relative z-0 w-full mb-6 group">
      <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
      <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
      <span class="text-sm ml-1 text-red-600" id="passwordWarn">Harus di isi</span>
      <span class="text-sm ml-1 text-red-700" id="passwordBackendError">{{ $errors->siswaRegister->first('password')}}</span>
  </div>
  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="nama" id="nama" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="nama" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">nama</label>
      <span class="text-sm ml-1 text-red-700" id="nameBackendError">{{ $errors->siswaRegister->first('nama')}}</span>
    </div>
    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="umur" id="umur" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="umur" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">umur</label>
        <span class="text-sm ml-1 text-red-700" id="umurBackendError">{{ $errors->siswaRegister->first('umur')}}</span>
    </div>
  </div>

<fieldset>
  <legend class="sr-only">jenis Kelamin</legend>

  <div class="flex items-center mb-4">
    <input id="jenisKelamin-option-1" type="radio" name="jenisKelamin" value="L" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 " checked>
    <label for="jenisKelamin-option-1" class="block ml-2 text-sm font-medium text-gray-900 ">
        laki-laki
    </label>
  </div>
  <div class="flex items-center mb-4">
    <input id="jenisKelamin-option-2" type="radio" name="jenisKelamin" value="P" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300" >
    <label for="jenisKelamin-option-2" class="block ml-2 text-sm font-medium text-gray-900 ">
        perempuan
    </label>
  </div>

</fieldset>
  <div id="strengMeter" class="mb-4 h-1 w-10/12 self-center rounded hidden">
        <div class="h-full bg-green-400 rounded"  id="meter"></div>
  </div>

  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Daftar</button>


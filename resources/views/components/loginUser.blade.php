
    <div class="pilihan-login w-10/12 h-4/12 border border-blue-300 bg-blue-200 flex p-1 self-center rounded-sm">
        <button class="flex-grow bg-blue-500 hover:bg-blue-300 rounded-sm" type="button" id="murid-btn" type="button">Murid</button>
        <button class="flex-grow rounded-sm hover:bg-blue-300" id="guru-btn" type="button">Guru</button>
    </div>
    <div class="w-10/12 self-center mt-5">
        <label for="small-input" class="block mb-2 bold font-medium " id="username" name="username">User Name</label>
        <input  type="text" id="username" name="username" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-sm bg-gray-50 focus:ring-blue-500 focus:border-blue-500 ">
        <span class="text-red-700 text-sm">{{ $errors->login->first('username')}}</span>
    </div>
    <div class="w-10/12 self-center mt-5">
        <label for="small-input" class="block mb-2 bold font-medium ">Password</label>
        <input value="{{old('username')}}" type="text" id="password" name="password" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-sm bg-gray-50 focus:ring-blue-500 focus:border-blue-500 ">
        <span class="text-red-700 text-sm">{{ $errors->login->first('password')}}</span>
    </div>
    <div class="flex items-center mt-4 self-center w-10/12">
      <input id="checkbox-2" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 focus:ring-2">
      <label for="checkbox-2" class="ml-2 text-sm font-medium ">Remember Me</label>
    </div>

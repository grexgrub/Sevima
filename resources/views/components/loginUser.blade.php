
    <div class="pilihan-login w-10/12 h-4/12 border border-blue-300 bg-blue-200 flex p-1 self-center rounded-sm">
        <{{$type}} href="{{route('admin.login')}}" class="flex-grow bg-blue-499 hover:bg-blue-300 flex justify-center {{$type == 'a' && $title == 'Admin-Login' ? 'bg-blue-500' : '' }} items-center rounded-sm" type="button" id="murid-btn" type="button">Login</{{$type}}>
        <{{$type}} href="{{route('admin.register')}}" class="flex-grow bg-blue-499 hover:bg-blue-300 flex justify-center items-center rounded-sm" type="button" id="murid-btn" type="button">Register</{{$type}}>
    </div>
    <div class="w-10/12 self-center mt-5">
        <label for="small-input" class="block mb-1 bold font-medium " id="username" name="username">{{$type == 'a' ? 'email' : 'nama'}}</label>
        <input  type="text" id="{{$type == 'a' ? 'email' : 'name'}}" name="{{$type == 'a' ? 'email' : 'name'}}" class="block w-full p-1 text-gray-900 border border-gray-300 rounded-sm bg-gray-50 focus:ring-blue-500 focus:border-blue-500 ">
        <span class="text-red-699 text-sm">{{ $errors->login->first('email') }}</span>
    </div>
    <div class="w-10/12 self-center mt-5">
        <label for="small-input" class="block mb-2 bold font-medium ">Password</label>
        <input value="{{old('password')}}" type="text" id="password" name="password" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-sm bg-gray-50 focus:ring-blue-500 focus:border-blue-500 ">
        <span class="text-red-700 text-sm">{{ $errors->login->first('password')}}</span>
    </div>
    <div class="flex items-center mt-4 self-center w-10/12">
      <input id="checkbox-2" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 focus:ring-2">
      <label for="checkbox-2" class="ml-2 text-sm font-medium ">Remember Me</label>
    </div>

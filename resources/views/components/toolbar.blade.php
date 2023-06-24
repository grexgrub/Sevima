<div class="toolbar  w-12/12 p-1 flex justify-between">
<div class="flex justify-center items-center">
        <a href="{{(isset($hidden1) ? '' : $link1)}}"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md {{(isset($hidden1) ? $hidden1 : '')}} text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">{{(isset($hidden1) ? '' : $A)}}</a>
        <a href="{{(isset($hidden2) ? '' : $link2)}}"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md {{(isset($hidden2) ? $hidden2 : '')}} text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">{{(isset($hidden2) ? '' : $B)}}</a>
        <a href="{{(isset($hidden3) ? '' : $link3)}}"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md {{(isset($hidden3) ? $hidden3 : '')}} text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">{{(isset($hidden3) ? '' : $C)}}</a>
</div>
<form method="post" action="" class="w-6/12 justify-self-end">
    <div class="flex">
        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only">Your Email</label>
        <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-1.5 lg:py-2.5 lg:px-4 px-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 type="button">categories</button>
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                @include('components/dropdown-toolbar')
        </div>
        <div class="relative w-full">
            <input type="search" id="search-dropdown" data-url="{{$url}}" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500  placeholder="Search Mockups, Logos, Design Templates..." required>
        </div>
    </div>
</form>
</div>

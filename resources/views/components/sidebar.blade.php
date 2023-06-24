  <nav class="sidebar shadow-lg bg-white border-gray-200 text-gray-500" id="sidebar">
      <ul class="navbar-nav">
        <li class="logo">
          <span class="logo-text text-gray-500 "><strong>Clesson</strong></span>
          <i class="fa-solid fa-angles-right logo-icon"></i>
        </li>
        <li class="navbar-item">
          <a href="/artikel" data-tooltip-placement='right' data-tooltip-target="tooltip-artikel" class="navbar-link hover:bg-gray-300 {{ $title == 'artikel' ? 'bg-gray-300 text-black' : ''}}">
            <i class="fa-solid fa-book-open-reader link-icon {{ $title == 'artikel' ? 'active' : ''}}"></i>
            <span class="link-text text-gray-500"><strong>Artikel</strong></span>
          </a>
          <a href="/myartikel" data-tooltip-placement='right' data-tooltip-target="tooltip-myartikel" class="navbar-link  hover:bg-gray-300 {{ $title == 'myartikel' ? 'bg-gray-300' : '' }}">
            <i class="fa-solid fa-book link-icon {{ $title == 'myartikel' ? 'active' : ''}}"></i>
            <span class="link-text text-gray-500" ><strong>My Artikel</strong></span>
          </a>
          <a href="/buatartikel" data-tooltip-placement='right' data-tooltip-target="tooltip-buatartikel" class="navbar-link {{ $title == 'buatartikel' ? 'bg-gray-300' : ''}}  hover:bg-gray-300">
            <i class="fa-solid fa-pen-to-square link-icon {{ $title == 'buatartikel' ? 'active' : ''}}"></i>
            <span class="link-text"><strong>Buat Artikel</strong></span>
          </a>
          <a href="/Coba" data-tooltip-placement='right' data-tooltip-target="tooltip-buatartikel" class="navbar-link {{ $title == 'buatartikel' ? 'bg-gray-300' : ''}}  hover:bg-gray-300">
                  <i class="fa-solid fa-bug link-icon {{ $title == 'bug' ? 'active' : ''}}"></i>
                  <span class="link-text"><strong>Coba</strong></span>
          </a>
        </li>
        <li class="mt-auto self-end justify-self-end h-20 w-20 flex justify-center items-center">
            <a href="{{route('siswa.logout')}}" class="p-2 bg-green-500 rounded">log out</a>
        </li>
      </ul>
  </nav>




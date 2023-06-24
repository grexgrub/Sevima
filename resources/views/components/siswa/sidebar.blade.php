  <nav class="sidebar shadow-lg bg-white border-gray-200 text-gray-500" id="sidebar">
      <ul class="navbar-nav">
        <li class="logo">
          <span class="logo-text text-gray-500 "><strong>Clesson</strong></span>
          <i class="fa-solid fa-angles-right logo-icon"></i>
        </li>
        <li class="navbar-item">
          <a href="/materi" data-tooltip-placement='right' data-tooltip-target="tooltip-artikel" class="navbar-link hover:bg-gray-300 {{ $title == 'artikel' ? 'bg-gray-300 text-black' : ''}}">
            <i class="fa-solid fa-book-open-reader link-icon {{ $title == 'artikel' ? 'active' : ''}}"></i>
            <span class="link-text text-gray-500"><strong>Artikel</strong></span>
          </a>
          <a href="{{route('siswa.catatan')}}" data-tooltip-placement='right' data-tooltip-target="tooltip-buatartikel" class="navbar-link {{ $title == 'buatartikel' ? 'bg-gray-300' : ''}}  hover:bg-gray-300">
            <i class="fa-solid fa-pen-to-square link-icon {{ $title == 'buatartikel' ? 'active' : ''}}"></i>
            <span class="link-text"><strong>Catatan</strong></span>
          </a>
          <a href="" data-tooltip-placement='right' data-tooltip-target="tooltip-myartikel" class="navbar-link  hover:bg-gray-300 {{ $title == 'myartikel' ? 'bg-gray-300' : '' }}">
            <i class="fa-solid fa-user link-icon {{ $title == 'myartikel' ? 'active' : ''}}"></i>
            <span class="link-text text-gray-500" ><strong>Profile</strong></span>
          </a>
        </li>
        <li class="lg:mt-auto ml-auto self-end justify-self-end lg:h-20 h-full  flex justify-center items-center lg:w-full">
              <a href="{{route('siswa.logout')}}" class="navbar-link hover:bg-gray-300 w-full flex">
                  <i class="fa-solid fa-right-from-bracket link-icon"></i>
                  <span class="link-text"><strong>Log Out</strong></span>
              </a>
        </li>
      </ul>
  </nav>




  <nav class="sidebar shadow-lg bg-white border-gray-200 text-gray-500" id="sidebar">
      <ul class="navbar-nav">
        <li class="logo">
          <span class="logo-text text-gray-500 "><strong>Clesson</strong></span>
          <i class="fa-solid fa-angles-right logo-icon"></i>
        </li>
        <li class="navbar-item">
          <a href="" data-tooltip-placement='right' data-tooltip-target="tooltip-myartikel" class="navbar-link  hover:bg-gray-300 {{ $title == 'Materi' ? 'bg-gray-300' : '' }}">
            <i class="fa-solid fa-book link-icon {{ $title == 'Materi' ? 'active' : ''}}"></i>
            <span class="link-text text-gray-500" ><strong>Materi</strong></span>
          </a>
          <a href="" data-tooltip-placement='right' data-tooltip-target="tooltip-buatartikel" class="navbar-link {{ $title == 'Buat materi' ? 'bg-gray-300' : ''}}  hover:bg-gray-300">
            <i class="fa-solid fa-pen-to-square link-icon {{ $title == 'Buat materi' ? 'active' : ''}}"></i>
            <span class="link-text"><strong>Buat Materi</strong></span>
          </a>
        </li>
        <li class="lg:mt-auto ml-auto self-end justify-self-end lg:h-20 h-full  flex justify-center items-center lg:w-full">
              <a href="{{route('guru.logout')}}" class="navbar-link hover:bg-gray-300 w-full flex">
                  <i class="fa-solid fa-right-from-bracket link-icon"></i>
                  <span class="link-text"><strong>Log Out</strong></span>
              </a>
        </li>
      </ul>
  </nav>




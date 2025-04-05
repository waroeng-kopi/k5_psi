<nav class="flex items-center justify-between flex-wrap bg-sky-500">
  <a class="flex items-center flex-shrink-0 text-white p-6 text-2xl font-semibold" href="./">
    Perpustakaan
  </a>

  <div class="block lg:hidden p-6">
    <button class="flex items-center px-3 py-2 border rounded text-sky-200 border-sky-400 hover:text-white hover:border-white" onclick="navbarHamburger()" id="burger-navbar">
      <svg class="fill-current h-4 w-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg>
    </button>
  </div>

  <div class="w-full block flex-grow-0 lg:flex lg:items-center lg:w-auto hidden" id="navbar-menu">
    <div class="text-lg lg:flex-grow lg:mb-0 mb-6 lg:mr-10">

      <button class="text-sky-200 hover:text-black hover:bg-sky-50 lg:hover:bg-sky-500 lg:hover:text-sky-50 font-medium lg:px-3 py-4 px-6 text-center inline-flex items-center w-full lg:w-auto" onclick="dropdownDataMaster()" id="dropdownDataMaster">
        Data Master
        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg>
      </button>

      <div id="dropdownDataMasterMenu" class="hidden bg-white lg:w-44 lg:absolute lg:top-20 border lg:mx-0 z-20 rounded-b-lg">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
            <li>
              <a href="data_buku.php" class="block px-4 py-2 text-black hover:bg-sky-400 hover:text-white">Buku</a>
            </li>
            <li>
              <a href="data_penulis.php" class="block px-4 py-2 text-black hover:bg-sky-400 hover:text-white">Penulis</a>
            </li>
            <li>
              <a href="data_penerbit.php" class="block px-4 py-2 text-black hover:bg-sky-400 hover:text-white">Penerbit</a>
            </li>
            <li>
              <a href="data_kategori.php" class="block px-4 py-2 text-black hover:bg-sky-400 hover:text-white">Kategori</a>
            </li>
            <li>
              <a href="data_anggota.php" class="block px-4 py-2 text-black hover:bg-sky-400 hover:text-white">Anggota</a>
            </li>
          </ul>
      </div>


      <button class="text-sky-200 hover:text-black hover:bg-sky-50 lg:hover:bg-sky-500 lg:hover:text-sky-50 font-medium lg:px-3 py-4 px-6 text-center inline-flex items-center w-full lg:w-auto" onclick="dropdownTransaksi()" id="dropdownTransaksi">
        Transaksi
        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg>
      </button>

      <div id="dropdownTransaksiMenu" class="hidden bg-white lg:w-44 lg:absolute lg:top-20 border lg:mx-32 z-20 rounded-b-lg">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
            <li>
              <a href="peminjaman.php" class="block px-4 py-2 text-black hover:bg-sky-400 hover:text-white">Peminjaman</a>
            </li>
            <li>
              <a href="pengadaan.php" class="block px-4 py-2 text-black hover:bg-sky-400 hover:text-white">Pengadaan</a>
            </li>
          </ul>
      </div>


      <a href="data_admin.php" class="block lg:px-3 lg:inline-block lg:mt-0 text-sky-200 hover:text-black hover:bg-sky-50 lg:hover:bg-sky-500 lg:hover:text-sky-50 py-4 px-6">
        Admin
      </a>


      <a href="logout.php" class="block lg:px-3 lg:inline-block lg:mt-0 text-sky-200 hover:text-black hover:bg-sky-50 lg:hover:bg-sky-500 lg:hover:text-sky-50 py-4 px-6">
        Logout
      </a>
    </div>
  </div>
</nav>
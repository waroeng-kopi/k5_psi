<?php include './model/koneksi.php' ?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="./script.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
</head>
<body class="flex flex-col min-h-screen">
  <!-- navbar -->
  <?php include "./header.php"?>
  <!-- end navbar -->
  
  <!-- content -->
  <div class="lg:m-10 m-4 bg-white flex-grow"">
    <div class="py-8 px-4 mx-auto max-w-screen-xl">
      <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
        <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">Perpustakaan</h1>
        <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Buku merupakan jendela dunia, membaca buku samahalnya dengan melihat dunia.</p>
      </div>
    </div>

    <div class="relative overflow-x-auto flex-grow m-auto size-full" ">
      
      <div class="flex lg:flex-row flex-col flex-grow justify-between mb-auto lg:px-10">
        <div class="lg:max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 grow lg:m-3 m-2">
          <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Peminjaman</h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Jumlah transaksi peminjaman 5</p>
          <a href="#" class="text-center flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700">
            <div class="m-auto">Peminjaman</div>
          </a>
        </div>

        <div class="lg:max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 grow lg:m-3 m-2">
          <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pengembalian</h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Jumlah transaksi pengembalian 5</p>
          <a href="#" class="text-center flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700">
            <div class="m-auto">Pengembalian</div>
          </a>
        </div>

        <div class="lg:max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 grow lg:m-3 m-2">
          <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Data Buku</h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Jumlah buku yang tersedia 5 buku</p>
          <a href="#" class="text-center flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700">
            <div class="m-auto">Data Buku</div>
          </a>
        </div>

        <div class="lg:max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 grow lg:m-3 m-2">
          <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Data Anggota</h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Jumlah anggota yang ada 5 Anggota</p>
          <a href="#" class="text-center flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700">
            <div class="m-auto">Data Anggota</div>
          </a>
        </div>
      </div>

    </div>
  </div>
  <!-- end content -->

  <!-- footer -->
  <?php include "./footer.php"?>
  <!-- end footer -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
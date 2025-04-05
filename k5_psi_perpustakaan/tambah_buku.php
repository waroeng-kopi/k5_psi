
<?php include "./model/koneksi.php";?>

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
  <div class="lg:m-10 m-4 bg-white flex-grow">
    <a class="flex px-6 py-3 border rounded-lg mb-4 w-fit bg-gray-100" href="./data_buku.php">
      Kembali
    </a>


    <div class="bg-sky-50 text-black p-4 rounded-t-lg border">Tambah Buku</div>
    

    <form class="py-8 border rounded-b-lg" action="./controller/save_buku.php" method="POST" enctype="multipart/form-data">
      <div class="sm:max-w-sm sm:mx-auto mx-4">

        <?php 
          $colKodeKategori = mysqli_query($koneksi,'SELECT * FROM tb_kategori');
          $jumlahColKodeKategori = mysqli_num_rows($colKodeKategori);
        ?>
        <div class="mb-4">
          <label for="input-kode-buku" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Buku</label>
          <input type="text" id="input-kode-buku" value="B-<?php echo $jumlahColKodeKategori+1 ?>" name="kode_buku" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" readonly>
        </div>

        <div class="mb-4">
          <label for="input-judul-buku" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Buku</label>
          <input type="text" id="input-judul-buku" placeholder="Judul Buku" name="judul_buku" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>

        <div class="mb-4">
          <label for="input-isbn-buku" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ISBN</label>
          <input type="text" id="input-isbn-buku" placeholder="ISBN: 1234-567-890" name="isbn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>

        <div class="mb-4">
          <label for="input-penulis-buku" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penulis</label>
          <input type="text" id="input-penulis-buku" placeholder="Penulis" name="penulis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>

        <div class="mb-4">
          <label for="input-penerbit-buku" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penerbit</label>
          <input type="text" id="input-penerbit-buku" placeholder="Penerbit" name="penerbit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>

        <div class="mb-4">
          <label for="input-kategori-buku" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
          <input type="text" id="input-kategori-buku" placeholder="Kategori" name="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>

        <div class="mb-4">
          <label for="input-tahun-terbit-buku" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Terbit</label>
          <input type="text" id="input-tahun-terbit-buku" placeholder="Tahun Terbit" name="tahun_terbit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>

        <div class="mb-4">
          <label for="input-sinopsis-buku" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sinopsis</label>
          <input type="text" id="input-sinopsis-buku" placeholder="Sipnosis" name="sipnosis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>

        <input type="submit" value="Submit" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
      </div>
    </form>
    </div>
  </div>
  <!-- end content -->

  <!-- footer -->
  <?php include "./footer.php"?>
  <!-- end footer -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>

<?php include "./model/koneksi.php"; ?>

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
  <div   class="lg:m-10 m-4 bg-white flex-grow">
    <a class="flex px-6 py-3 border rounded-lg my-4 w-fit bg-gray-100" href="./data_kategori.php">
      Kembali
    </a>


    <div class="bg-sky-50 text-black p-4 rounded-t-lg border">Edit Data Kategori</div>
    

    <form class="py-8 border rounded-b-lg" action="./controller/remove_kategori.php" method="POST">
      <div class="sm:max-w-sm sm:mx-auto mx-4">

        <?php
          $id=$_GET['id'];
          $query = mysqli_query($koneksi,"SELECT * FROM tb_kategori WHERE id_kategori='$id'");
          while ($ambil_data=mysqli_fetch_array($query)) {
        ?>
        <div class="mb-5">
          <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode kategori</label>
          <input type="text" id="base-input" value="<?php echo $ambil_data['id_kategori']; ?>" name="kode_kategori" class="bg-gray-50 border border-gray-200 text-gray-400 text-sm rounded-lg block w-full p-2.5" readonly>
        </div>

        <div class="mb-5">
          <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama kategori</label>
          <input type="text" id="base-input" value="<?php echo $ambil_data['nama_kategori']; ?>" placeholder="Nama Kategori" name="nama_kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" readonly>
        </div>
        <?php 
          }
        ?>

        <input type="submit" value="Submit" class="text-white bg-red-500 hover:bg-red-600 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
      </div>
    </form>
  </div>
  <!-- end content -->

  <!-- footer -->
  <?php include "./footer.php"?>
  <!-- end footer -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
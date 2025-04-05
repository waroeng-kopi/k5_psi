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
  <?php include "header.php"?>
  <!-- end navbar -->
  
  <!-- content -->
  <div class="lg:m-10 m-4 bg-white flex-grow">
    <div class="bg-sky-50 text-black p-4 rounded-t-lg border">Tambah Data Kategori</div>
    

    <form class="py-8 border rounded-b-lg">
      <div class="sm:max-w-sm sm:mx-auto mx-4">
        <div class="mb-5">
          <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode kategori</label>
          <input type="text" id="base-input" placeholder="Kode Kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>

        <div class="mb-5">
          <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama kategori</label>
          <input type="text" id="base-input" placeholder="Nama Kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
      </div>
    </form>
    </div>
  </div>
  <!-- end content -->

  <!-- footer -->
  <?php include "footer.php"?>
  <!-- end footer -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
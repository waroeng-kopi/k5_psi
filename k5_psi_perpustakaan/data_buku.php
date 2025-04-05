<?php 
  include "./model/koneksi.php";
?>

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
  <div class="lg:m-10 m-4 bg-white">
    <div class="bg-sky-50 text-black p-4 rounded-t-lg border">Data Buku</div>
    
    
    <div class="lg:p-6 p-4 flex justify-between rounded-b-lg border md:flex-row flex-col gap-4">
      
      <a href="tambah_buku.php" class="flex text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-3 items-center gap-2">
        <svg width="30px" height="30px" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="SVGRepo_iconCarrier">
            <path d="M4 12H20M12 4V20" stroke="#FFFFFF" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path>
          </g>
        </svg>
        Tambah Buku
      </a>

      <form method="GET">
        <div class="flex">
          <div class="relative h-full flex">
            <input type="search" id="search-dropdown" name="keyword" class="w-full bg-gray-50 rounded-s-lg border border-gray-300" placeholder="Cari buku">
            
            <button type="submit" name="cari" class="top-0 end-0 py-3 px-4 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"></path>
              </svg>
              <span class="sr-only">Search</span>
            </button>
          </div>
        </div>
      </form>

    </div>


    <div class="relative overflow-x-auto flex flex-wrap justify-around gap-x-3">

      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-6">
        <a href="#">
          <img class="rounded-t-lg w-40 m-auto" src="https://s3-ap-southeast-1.amazonaws.com/ebook-previews/45496/168985/1.jpg" alt="" />
        </a>
        <div class="p-5">
          <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Filosofi Teras</h5>
          <span class="text-sm font-normal">by Henry Manampiring</span>
          <p class="font-bold mt-3">Category : </p>
          <div class="flex gap-3 m-2">
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
          </div>
        </div>
      </div>

      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-6">
        <a href="#">
          <img class="rounded-t-lg w-40 m-auto" src="https://s3-ap-southeast-1.amazonaws.com/ebook-previews/45496/168985/1.jpg" alt="" />
        </a>
        <div class="p-5">
          <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Filosofi Teras</h5>
          <span class="text-sm font-normal">by Henry Manampiring</span>
          <p class="font-bold mt-3">Category : </p>
          <div class="flex gap-3 m-2">
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
          </div>
        </div>
      </div>

      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-6">
        <a href="#">
          <img class="rounded-t-lg w-40 m-auto" src="https://s3-ap-southeast-1.amazonaws.com/ebook-previews/45496/168985/1.jpg" alt="" />
        </a>
        <div class="p-5">
          <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Filosofi Teras</h5>
          <span class="text-sm font-normal">by Henry Manampiring</span>
          <p class="font-bold mt-3">Category : </p>
          <div class="flex gap-3 m-2">
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
          </div>
        </div>
      </div>

      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-6">
        <a href="#">
          <img class="rounded-t-lg w-40 m-auto" src="https://s3-ap-southeast-1.amazonaws.com/ebook-previews/45496/168985/1.jpg" alt="" />
        </a>
        <div class="p-5">
          <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Filosofi Teras</h5>
          <span class="text-sm font-normal">by Henry Manampiring</span>
          <p class="font-bold mt-3">Category : </p>
          <div class="flex gap-3 m-2">
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
          </div>
        </div>
      </div>

      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-6">
        <a href="#">
          <img class="rounded-t-lg w-40 m-auto" src="https://s3-ap-southeast-1.amazonaws.com/ebook-previews/45496/168985/1.jpg" alt="" />
        </a>
        <div class="p-5">
          <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Filosofi Teras</h5>
          <span class="text-sm font-normal">by Henry Manampiring</span>
          <p class="font-bold mt-3">Category : </p>
          <div class="flex gap-3 m-2">
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
          </div>
        </div>
      </div>

      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-6">
        <a href="#">
          <img class="rounded-t-lg w-40 m-auto" src="https://s3-ap-southeast-1.amazonaws.com/ebook-previews/45496/168985/1.jpg" alt="" />
        </a>
        <div class="p-5">
          <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Filosofi Teras</h5>
          <span class="text-sm font-normal">by Henry Manampiring</span>
          <p class="font-bold mt-3">Category : </p>
          <div class="flex gap-3 m-2">
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
          </div>
        </div>
      </div>

      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-6">
        <a href="#">
          <img class="rounded-t-lg w-40 m-auto" src="https://s3-ap-southeast-1.amazonaws.com/ebook-previews/45496/168985/1.jpg" alt="" />
        </a>
        <div class="p-5">
          <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Filosofi Teras</h5>
          <span class="text-sm font-normal">by Henry Manampiring</span>
          <p class="font-bold mt-3">Category : </p>
          <div class="flex gap-3 m-2">
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
          </div>
        </div>
      </div>

      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-6">
        <a href="#">
          <img class="rounded-t-lg w-40 m-auto" src="https://s3-ap-southeast-1.amazonaws.com/ebook-previews/45496/168985/1.jpg" alt="" />
        </a>
        <div class="p-5">
          <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Filosofi Teras</h5>
          <span class="text-sm font-normal">by Henry Manampiring</span>
          <p class="font-bold mt-3">Category : </p>
          <div class="flex gap-3 m-2">
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
            <p class="px-4 py-1.5 rounded-full bg-green-400">Filsafat</p>
          </div>
        </div>
      </div>





      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class=" px-6 py-3">
              No
            </th>
            <th scope="col" class="px-6 py-3">
              Kode Kategori
            </th>
            <th scope="col" class="px-6 py-3">
              ISBN
            </th>
            <th scope="col" class="px-6 py-3">
              Judul Buku
            </th>
            <th scope="col" class="px-6 py-3">
              Penulis
            </th>
            <th scope="col" class="px-6 py-3">
              Penerbit
            </th>
            <th scope="col" class="px-6 py-3">
              Kategori
            </th>
            <th scope="col" class="px-6 py-3">
              Tahun terbit
            </th>
            <th scope="col" class="px-6 py-3">
              Sinopsis
            </th>

            <th scope="col" class="px-6 py-3 w-40">
              Aksi
            </th>
          </tr>
        </thead>
        
        <tbody>
          <?php
            if (isset($_GET['cari'])) {
              $keyword=$_GET['keyword'];
              $query=mysqli_query($koneksi,"SELECT * FROM tb_kategori WHERE nama_kategori LIKE '%$keyword%'");
            } else {
              $query=mysqli_query($koneksi,"SELECT * FROM tb_kategori");
            }
            $no=1;
            while ($ambil_data=mysqli_fetch_array($query)) {
          ?>
          <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 border-b">
            <th scope="row" class="px-6 py-4 font-medium text-lg text-gray-900 whitespace-nowrap"><?php echo $no++; ?></th>
            <td class="px-6 py-4 text-lg"><?php echo $ambil_data['id_kategori']; ?></td>
            <td class="px-6 py-4 text-lg"><?php echo $ambil_data['nama_kategori']; ?></td>
            <td class="flex px-6 py-4 w-fit gap-4 lg:gap-0">
              <a class="flex bg-yellow-400 text-white py-2 px-4 rounded-md border lg:mx-4 mx-auto flex-row justify-evenly items-center gap-2 text-lg" href="edit_kategori.php?id=<?php echo $ambil_data['id_kategori']; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512"><path fill="#ffffff" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"></path></svg>
                Edit
              </a>
              <a class="flex bg-red-600 text-white py-1 px-3 rounded-md border lg:mx-4 mx-auto flex-row justify-evenly items-center gap-2 text-lg" href="./hapus_kategori.php?id=<?php echo $ambil_data['id_kategori']; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 448 512"><path fill="#ffffff" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path></svg>
                Delete
              </a>
            </td>
          </tr>
          <?php 
            }
          ?>
        
        </tbody>
      </table>
    </div>
  </div>
  <!-- end content -->

  <!-- footer -->
  <?php include "./footer.php"?>
  <!-- end footer -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
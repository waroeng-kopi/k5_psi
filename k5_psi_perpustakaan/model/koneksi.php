<?php 
  $koneksi=mysqli_connect("localhost","root","","db_library");

  if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
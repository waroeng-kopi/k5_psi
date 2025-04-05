<?php
  include "../model/koneksi.php";
  $kode_kategori=$_POST['kode_kategori'];
  $nama_kategori=$_POST['nama_kategori'];
  $query=mysqli_query($koneksi,"DELETE FROM tb_kategori WHERE id_kategori='$kode_kategori'");
  header('location:../data_kategori.php');
<?php
 require "koneksi.php";
 // menangkap data yang di kirim dari form\
 $id = $_GET['id'];
 
// menghapus data dari database
mysqli_query($con,"delete from mahasiswa where id='$id'");
 
 // mengalihkan halaman kembali ke index.php
 header("location:index.php");
 ?>
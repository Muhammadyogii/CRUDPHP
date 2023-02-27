<?php 
require'koneksi.php';

$id=$_GET['id'];

$result= mysqli_query($koneksi,"DELETE from mahasiswa2 WHERE id='$id'");

 // mengalihkan halaman kembali ke index.php
 header("location:index.php");

?>
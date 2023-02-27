<?php 
require "koneksi.php";

$nama = $_POST['nama'];
$npm = $_POST['npm'];
$jurusan= $_POST['jurusan'];

$result= mysqli_query($koneksi, "INSERT into mahasiswa2 values ('','$nama','$npm','$jurusan')");
 // mengalihkan halaman kembali ke index.php
 header("location:index.php");
?>
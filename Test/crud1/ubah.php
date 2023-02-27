<?php

include "koneksi.php";
  // Mengambil data / query
 $id = $_POST['id'];
 $nama = $_POST['nama'];
 $npm = $_POST['npm'];
 $email = $_POST['email'];
 $jurusan = $_POST['jurusan'];
 
 mysqli_query($con,"UPDATE mahasiswa SET nama='$nama', npm='$npm', email='$email', jurusan='$jurusan' WHERE id='$id'");
 
 header("location:index.php");
 ?>
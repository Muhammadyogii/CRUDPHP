<?php
 require "koneksi.php";
 // menangkap data yang di kirim dari form\
 $nama = $_POST['nama'];
 $npm = $_POST['npm'];
 $email = $_POST['email'];
 $jurusan = $_POST['jurusan'];
 
 // menginput data ke database
 mysqli_query($con, "insert into mahasiswa values ('','$nama','$npm','$email','$jurusan')");
 
 // mengalihkan halaman kembali ke index.php
 header("location:index.php");
 ?>
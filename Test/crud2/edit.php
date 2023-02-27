<?php 
 include'koneksi.php';

 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $npm=$_POST['npm'];
 $jurusan=$_POST['jurusan'];

 mysqli_query($koneksi,"UPDATE mahasiswa2 SET nama='$nama', npm='$npm', jurusan='$jurusan' WHERE id='$id'");

 header("location:index.php");
?>
<?php 
  // Untuk menghubungkan ke database   
  include'koneksi.php';
  //mengambil data dari database
  $result= mysqli_query($koneksi, "SELECT * FROM mahasiswa2");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin 2</title>
</head>
<body>
   <a href="tambah.php">+Tambah Mahasiswa</a>
   <table border="1" cellpadding="10" cellspacing="1">
  <tr>
    <th>No</th>
    <th>Aksi</th>
    <th>Nama</th>
    <th>Npm</th>
    <th>Jurusan</th>
  </tr>
  <?php $i= 1;?>
  <?php while($row = mysqli_fetch_assoc($result)) : ;?>
  <tr>
    <td><?= $i++?></td>
    <td>
       <a href="ubah.php?id=<?php echo $row['id']?>" >Ubah</a>|
       <a href="hapus.php?id=<?php echo $row['id']?>" >Hapus</a>
    </td>
    <td><?php echo $row["nama"]?></td>
    <td><?php echo $row["npm"]?></td>
    <td><?php echo $row["jurusan"]?></td>
</tr>
<?php endwhile ?>
</body>
</html>
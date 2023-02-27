<?php 
 //Menghubungkan ke databsae
 include'koneksi.php';
 // Mengambil data / query
 $result= mysqli_query($con, "SELECT * FROM mahasiswa");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
     <h1>Daftar Mahasiswa</h1>
     <table border="1" cellpadding="10" cellspacing="0">
     <a href="tambah.php">+ TAMBAH MAHASISWA</a>
     <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>Nama</th>
        <th>Npm</th>
        <th>Email</th>
        <th>Jurusan</th>
        
     </tr>
     <?php $i = 1; ?>
      <?php while ($row= mysqli_fetch_assoc($result)) : ?>
     <tr>
        <td><?= $i++; ?></td>
        <td>
					<a href="edit.php?id=<?php echo $row['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $row['id']; ?>">HAPUS</a>
				</td>
        <td><?= $row["nama"] ?></td>
        <td><?= $row["npm"] ?></td>
        <td><?= $row["email"] ?></td>
        <td><?= $row["jurusan"] ?></td>
        </td>
     </tr>
     <?php endwhile ?>
</body>
</html>
<?php  
require'koneksi.php';
$id = ''; 
if( isset( $_GET['id'])) {
    $id = $_GET['id']; 
} 
$result= mysqli_query($koneksi,"SELECT * FROM mahasiswa2 WHERE id='$id'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
<h1>Ubah Mahasiwa</h1>
     <h4><a href="index.php">kembali</a></h4>
    <form method="post" action="edit.php">
        <table>
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td>Nama</td>
                <input type="hidden" name="id" value= <?php echo $row['id']?>></td>
                <td><input type="text" name="nama" value="<?php echo $row['nama']?>"></td>
            </tr>
            <tr>
                <td>Npm</td>
                <td><input type="text" name="npm" value="<?php echo $row['npm']?>"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan"value="<?php echo $row['jurusan']?>"></td>
            </tr>

            <tr>
                <td><input type="submit" valeu="simpan" ></td>
            </tr>
            <?php endwhile ?>
        </table>
    </form>
</body>
</html>
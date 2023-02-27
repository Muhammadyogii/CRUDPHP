<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
     <h1>Tambah Mahasiwa</h1>
     <h4><a href="index.php">kembali</a></h4>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"</td>
            </tr>
            <tr>
                <td>Npm</td>
                <td><input type="text" name="npm"</td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"</td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan"</td>
            </tr>

            <tr>
                <td><input type="submit" valeu="simpan"</td>
            </tr>
        </table>


    </form>
     </body>
</html>
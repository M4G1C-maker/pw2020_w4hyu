<?php 
//koneksi ke db
$conn = mysqli_connect('localhost', 'root', '', 'admin');

//query
$result = mysqli_connect($conn, "SELECT * FROM mahasiswa");

//ubah ke array
while( $row = mysqli_connect_fetch_assoc($result)){
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Daftar Mahasiswa</h3>

  <table  border="1" cellpadding="10" cellspacing="0">  
   <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
    <th>Aksi</th>
   </tr>
   <tr>
    <td>1</td>
    <td><img src="" alt=""></td>
    <td>08420957</td>
    <td>nama</td>
    <td>email</td>
    <td>jurusan</td>
    <td>  <a href="">ubah</a>| <a href="">hapus</a>
    </td>
   </tr>
  </table>
</body>
</html>
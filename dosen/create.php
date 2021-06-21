<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="create.css">
  </head>
  <body>

<?php

include '../connect.php';

$nama_dosen = $_POST['nama_dosen'];
$telp = $_POST['telp'];

$query = "INSERT INTO dosen (nama_dosen, telp)
VALUES ('$nama_dosen' , '$telp')";

$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);
if($num > 0)
{ echo "berhasil tambah data";}
else
{echo "gagal tambah data";}
echo "<a href='read.php'>lihat data<a/>";
 ?>





</body>
</html>

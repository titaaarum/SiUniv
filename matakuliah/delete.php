<?php
include '../connect.php';
$kode = $_GET['kode'];
$query = "delete from matakuliah where kode ='$kode'";
$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);
if ($num > 0)
{
  echo "berhasil hapus data <br>";
}
else {
  echo "gagal hapus data <br>";
}
echo "<a href = 'read.php'>lihat data </a>";
 ?>

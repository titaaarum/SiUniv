<?php

include '../connect.php';

$id_dosen = $_GET['id_dosen'];

$query = "DELETE FROM dosen WHERE id_dosen = $id_dosen";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);


if($num > 0)
{
  echo "berhasil hapus data <br>";
}
else {
  echo "gagal hapus data <br>";
}

echo "<a href='read.php'>lihat data</a>";
 ?>

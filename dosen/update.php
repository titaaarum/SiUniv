<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  <link rel="stylesheet" href="master.css">
  </head>
  <body>
    <div class="wrapper">

    <?php

    include '../connect.php';

    $id_dosen = $_POST['id_dosen'];
    $nama_dosen = $_POST['nama_dosen'];
    $telp = $_POST['telp'];

    $query = "UPDATE dosen SET nama_dosen = '$nama_dosen', telp = '$telp' WHERE id_dosen = $id_dosen";

    $result = mysqli_query($connect, $query);

    $num = mysqli_affected_rows($connect);

    if($num > 0)
    {
      echo "Berhasil update data <br>";
      echo "<a href='read.php'> Lihat Data </a>";
    }
    else {
      echo "Gagal update data <br>";
      echo "<a href='read.php'> Lihat Data </a>";
    }
    ?>
  </div>
  </body>
</html>

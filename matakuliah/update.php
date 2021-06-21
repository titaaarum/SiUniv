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
    $kode = $_POST['kode'];
    $id_dosen = $_POST['id_dosen'];
    $nama_matkul =$_POST['nama_matkul'];
    $sks = $_POST['sks'];
    $semester = $_POST['semester'];

    $query = "update matakuliah set nama_matkul = '$nama_matkul',
    sks= $sks,
    semester= $semester,
    id_dosen = $id_dosen
    where kode ='$kode'";
    $result = mysqli_query($connect, $query);
    $num = mysqli_affected_rows($connect);
    if ($num > 0 )
    {
      echo "BERHASIL UBAH DATA <br>";
    }
    else {
      echo "GAGAL UBAH DATA <br>";
    }
    echo "<a href = 'read.php'>lihat data </a>";
    ?>

  </div>
  </body>
</html>

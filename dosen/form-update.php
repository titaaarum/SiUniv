<?php


include '../connect.php';

$id_dosen = $_GET['id_dosen'];

$query = "SELECT * FROM dosen WHERE id_dosen = $id_dosen";

$result = mysqli_query ($connect, $query);

$row = mysqli_fetch_assoc($result);

 ?>


  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="fcreate.css">
    </head>
    <body>
    <div class="form">
<img src="user.png">
      <form action="update.php" method="post">
        <h3>Update Data</h3>
            <label for="nama">Nama Dosen :</label ></td>
              <input type="text" name="nama_dosen" class="form-input" id="nama" value="<?php echo $row['nama_dosen'];?>"></td>
            <label for="no_telp">No. Telepon :</label></td>
              <input type="text" name="telp" class="form-input" id="no_telp" value="<?php echo $row['telp'];?>"></td>
          <input type="hidden" name="id_dosen" value="<?php echo $row['id_dosen'];?>"</td>
              <input type="submit" value="simpan" name="btnSimpan" class="button">
      </form>

    </div>
    </body>
  </html>

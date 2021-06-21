<?php
include '../connect.php';
$kode = $_GET['kode'];
$query = "select kode, nama_matkul, sks, semester, matakuliah.id_dosen, nama_dosen
          from matakuliah left join dosen using (id_dosen)
          where kode = '$kode'";
$result = mysqli_query($connect, $query);
$data_dosen =mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="form.css">
  </head>
  <body>
    <div class="form">

    <h2>Ubah Data Matakuliah </h2>
    <form action="update.php" method="post">
<p>
         <label for="kode">Kode :</label>
                    <input type="text"  class="form-input "name="kode" id="kode" value="<?php echo $data_dosen['kode']; ?>" > </td>
                  </p>
                  <p>
         <label for="nama_matkul">Matakuliah :</label>
             <input type="text" class="form-input" name="nama_matkul" id="nama_matkul" value="<?php echo $data_dosen['nama_matkul'] ?>"> </td>
           </p>
           <p>
         <label for="sks">SKS :</label>
        <input type="number" class="form-input" name="sks" id="sks" value="<?php echo $data_dosen['sks']; ?>"> </td>
      </p>
      <p>
           <label for="kode">Semester :</label>
           <input type="number" class="form-input" name="semester" id="semester" value="<?php echo $data_dosen['semester']; ?>"> </td>
         </p>
<p>
           <label for="nama_dosen">Dosen Pengajar :</label>

            <select name="id_dosen" id="nama_dosen">
              <option value="-">--Pilih salah satu</option>
              <?php
              $query2 = "SELECT id_dosen, nama_dosen from dosen";
              $result2 = mysqli_query($connect, $query2);
              while ($data = mysqli_fetch_assoc($result2)) {
                ?>
                <option value="<?php echo $data['id_dosen']; ?>"  <?php if($data_dosen['id_dosen']==$data['id_dosen']) {echo "selected";} ?>>
                  <?php echo $data['nama_dosen']; ?>
                </option>
                <?php
              }
               ?>
            </select>
          </p>
            <p>
              <input type="submit" value="Simpan" class="button"></td>
            </p>
        </tr>
      </div>
    </form>
  </table>
  </body>
</html>

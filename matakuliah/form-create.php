<?php
include '../connect.php';
$query ="select id_dosen, nama_dosen from dosen";
$result = mysqli_query($connect, $query);

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

     <form action="create.php" method="post">

       <h2>Tambah Data Dosen</h2>
       <p>
         <label> Kode : </label>
         <input type="text" name="kode" value="" class="form-input">
       </p>
     <p>
     <label> Matakuliah : </label>
     <input type="text" name="nama_matkul" value="" class=" form-input">
     </p>
     <p>
     <label> SKS : </label>
     <input type="text" name="sks" value="" class="form-input">
     </p>
     <p>
     <label>  Semester : </label>
     <input type="text" name="semester" value="" class="form-input">
     </p>
     <p>
       <label> Dosen Pengajar : </label>
       <select name="id_dosen" id="nama_dosen">
        <option value="-">--pilih salah satu </option>
         <?php
         while ($data = mysqli_fetch_assoc($result)) {
          ?>
          <option value="<?php echo $data['id_dosen']; ?>">
            <?php echo  $data ['nama_dosen']; ?>
          </option>
          <?php
         }

          ?>
       </select>
     </p>
     <p>
     <button type="submit" name="btnSimpan" class="button">Simpan</button>
     </p>
     </form>

   </div>
   </body>
 </html>

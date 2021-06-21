<?php

include '../connect.php';
$cari = $_GET['cari'];
$query = " SELECT * FROM dosen where nama_dosen like '%$cari%'";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <link rel="stylesheet" href="read.css">
   <body>
     <div class="wrapper">
       <ul>
         <form action="search.php" method="get">
         <li><a href="../login/logout.php"> <img id="out" src="out.png"> </a></li>
         <li><a href="form-create.php"> <img id="add" src="add.png"> </a> </li>
           <input type="search" name="cari" placeholder="Masukan Pencarian...">
           <li> <a href="../matakuliah/read.php"> <img id="list" src="list.png"> </a> </li>
           <li> <a href="read.php"> <img class="dsn" src="fdsn.png" alt=""> </a> </li>

         </form>
       </ul>

     </div>

<div class="container">

       <h2>Data Dosen</h2>
       <table>
<tr>
  <th>No.</th>
  <th>Nama Dosen</th>
  <th>Telepon</th>
  <th colspan="2">Aksi</th>
</tr>
</div>
<?php
if ($num > 0)
{
  $no = 1;
  while($data = mysqli_fetch_assoc($result))
  {
    echo "<tr>";
    echo "<td>" . $no . "</td>";
    echo "<td>" . $data['nama_dosen'] . "</td>";
    echo "<td>" . $data['telp'] . "</td>";
    echo "<td><a href='form-update.php?id_dosen=" . $data['id_dosen'] . "'>Edit</a>  ";
    echo "<td><a href='delete.php?id_dosen=" . $data['id_dosen'] ."'onclick='return confirm(\"apakah anda yakin ingin menghapus data?\")'>Hapus</a></td>";
    echo "</tr>";
    $no++;
  }
}
else {
  echo ",td colspan='3'>tidak ada data</td>";
}
 ?>

</table>

   </body>
 </html>

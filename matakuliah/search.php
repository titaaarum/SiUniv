<?php
include '../connect.php';
$cari = $_GET['cari'];
$kategori = $_GET['kategori'];
$query = "select kode, nama_matkul, sks, semester, nama_dosen
          from matakuliah left join dosen
          using (id_dosen)
          where $kategori like '%$cari%'
          order by (kode)";
$result = mysqli_query($connect,$query);
$num = mysqli_num_rows($result);

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="read.css">
   </head>
   <body>
     <div class="wrapper">
       <ul>
       <form class="" action="search.php" method="get">
         <input type="search" name="cari" placeholder="Masukan Pencarian...">
         <select name="kategori" id="">
           <option value="nama_matkul"> Matakuliah </option>
           <option value="nama_dosen">Dosen</option>
           <option value="sks">SKS</option>
           <option value="semester">Semester</option>
         </select>
    <li><a href="../login/logout.php"> <img id="out" src="out.png"> </a></li>
    <li><a href="form-create.php"> <img id="add" src="add.png"> </a> </li>
      <li> <a href="read.php"> <img id="list" src="list.png"> </a> </li>
      <li> <a href="../dosen/read.php"> <img class="dsn" src="fdsn.png" alt=""> </a> </li>

  </ul>
</form>
</div>

<div class="container">

     <table>
       <tr>
         <th>No.</th>
         <th>Kode</th>
         <th>matakuliah</th>
         <th>SKS</th>
         <th>Semester</th>
         <th>Dosen Pengajar</th>
         <th>Aksi</th>
       </tr>
       <?php
       if($num >0){
         $no = 1;
         while ($data=mysqli_fetch_assoc($result)) {?>
           <tr>
             <td> <?php echo $no; ?> </td>
             <td><?php echo $data ['kode']?> </td>
             <td><?php echo $data['nama_matkul'] ?> </td>
             <td><?php echo $data ['sks'] ?> </td>
             <td> <?php echo $data['semester']  ?></td>
             <td>
               <?php
               if ($data['nama_dosen']!= null) {
                 echo $data['nama_dosen'];
               }
               else {
                 echo "-";
               }
              ?></td>
             <td><a href="form-update.php?kode=<?php echo $data['kode'] ?>">Edit</a>
               <a href="delete.php?kode=<?php echo $data['kode'];?>"onclick="return confirm('anda yakin ingin menghapus data?')"> Hapus </a>
             </td>
           <?php
           $no++;
         }
       }
       else {
         echo "<tr> <td colspan='7'>Tidak ada data</td></tr>";
       }
         ?>
       </div>
     </table>
   </body>
 </html>

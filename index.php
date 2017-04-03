<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>
 <link rel="stylesheet" href="header.css">
</head>
<body>
<a href="index.php" class="menu">BERANDA</a> ||
<a href="tambah.php" class="menu">TAMBAH DATA</a>
<br>
<br>
<form action="ubah.php" method="POST">
<table border="1" cellspacing="0" cellpadding="4">
 <tr style="text-align:center;background-color:#1abc9c">
  <td>No</td>
  <td>Nama Hewan</td>
  <td>Tindakan</td>
 </tr>
  <?php
  $no = 1;
   include "connect.php";
  $data = mysqli_query($con, "SELECT * FROM hewan") or die (mysqli_error());
       if(mysqli_num_rows($data) == 0){
    echo "<b>Tidak ada data yang tersedia</b>";
    }else{
      while($hasil = mysqli_fetch_array($data)):?>
   
 <tr style="text-align:center">
  <td><?php echo $no?></td>
  <td><?php echo $hasil['nama'] ?></td>
  <td>
   <a href="ubah.php?id=<?php echo $hasil['id'] ?>">Edit</a> ||
   <a href="hapus.php?id=<?php echo $hasil['id'] ?>" onClick='return confirm("Apakah Ada yakin menghapus?")'>Hapus</a>
  </td>
 </tr>
 <?php
 $no++;
  endwhile;
  }
 ?>
</table>
</form>
</body>
</html>

 <input type="hidden" value="" name="MtgTime">
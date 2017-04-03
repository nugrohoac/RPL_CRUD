<!DOCTYPE html>
 <html>
 <head>
  <title>EDIT DATA</title>
  <link rel="stylesheet" href="header.css">
 </head>
 <body>
 <a href="index.php" class="menu">BERANDA</a> ||
 <a href="add.php" class="menu">TAMBAH DATA</a>
  <h1>EDIT DATA</h1>

   <?php
  include "connect.php";

   $id = $_GET['id']; 

   $data = mysqli_query($con, "SELECT * FROM hewan WHERE id = '$id'");

   $hasil = mysqli_fetch_array($data);
   ?>

    <form action="ubah2.php" method="POST">
   <table>
   
   <tr>
    <td>Nama </td>
    <td><input type="text" name="nama" value="<?php echo $hasil['nama'] ?>"></td>
    <td><input type="hidden" name="id" value="<?php echo $id?>"</td>
   </tr>     
    <tr>
    <td></td>
      <td><input type="submit" name="edit" value="Edit">
    <button type="reset" value="Reset">Reset</button>
     </td>
    </tr>
    </table>
 </form>
 </body>
 </html>
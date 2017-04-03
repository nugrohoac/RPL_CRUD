<?php
include 'connect.php';
  if(isset($_POST['edit'])){

  $id     = $_POST['id'];
  $nama    = $_POST['nama'];
  

   $queryupdate = mysqli_query($con, "UPDATE hewan SET nama = '$nama' WHERE id = $id");

   if($queryupdate){
   header('location: index.php');
  }else{
   echo "Upss Something wrong..";
  }
  }

   ?>
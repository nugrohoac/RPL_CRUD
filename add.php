<?php
include 'connect.php';
if(isset($_POST['nama'])){
	$nama = $_POST['nama'];
	$masuk = mysqli_query($con,"INSERT INTO hewan (id,nama)values (NULL,'$nama')");
}
	
					
?>
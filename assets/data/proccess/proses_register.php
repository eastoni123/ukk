<?php
include '../connection/config.php';
if(isset($_POST['reg'])){
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$nama = $_POST['nama'];
	
	$query = mysql_query("INSERT INTO `member` (`id_member`, `email`, `nama`, `password`) VALUES (NULL, '$email', '$nama', '$pass')");
	if($query){
		header('location:../../../index.php');
	}
}

	?>
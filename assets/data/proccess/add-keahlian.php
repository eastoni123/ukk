<?php
include '../connection/config.php';
if(isset($_POST['add'])){
	$jurusan = $_POST['id_jurusan'];
	$jasa = $_POST['nama_jasa'];
	
	$query = mysql_query("INSERT INTO option_jurusan (`id_option` , `id_jurusan`, `nama_jasa`) VALUES (NULL, '$jurusan', '$jasa')");
	if($query){
		header('location:../views/keahlian.php');
	}
}

?>
<?php
include '../connection/config.php';
if(isset($_POST['add'])){
	$username = $_POST['username'];
	$nama = $_POST['nama_lengkap'];
	$alamat = $_POST['alamat'];
	$pass = $_POST['password'];
	
	$ekstensiboleh = array('png','jpg');
	$foto = $_FILES['file']['name'];
	$x = explode('.',$foto);
	$ekstensi = strtolower(end($x));
	$ukuran = $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];
	if(in_array($ekstensi,$ekstensiboleh) === true){
		move_uploaded_file($file_tmp,'../dist/img/'.$foto);
		$query = mysql_query("INSERT INTO admin VALUES (NULL,'$username','$nama','$foto','$alamat','$pass')");
		if($query){
			header('location:../views/admin.php');
		}else{
			echo "File gagal di upload";
		}
	}else{
		echo 'ekstensi file tak didukung';
	}
}
?>
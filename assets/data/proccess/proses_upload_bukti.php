<?php
include '../connection/config.php';
if(isset($_POST['upload'])){
	$id = $_POST['id'];
	$ekstensiboleh = array('png','jpg','jpeg');
	$foto = $_FILES['file']['name'];
	$x = explode('.',$foto);
	$ekstensi = strtolower(end($x));
	$ukuran = $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];
	if(in_array($ekstensi,$ekstensiboleh) === true){
		move_uploaded_file($file_tmp,'../dist/img/'.$foto);
		$query = mysql_query("UPDATE `order` SET foto_bukti = '$foto', status = '1' WHERE id_order = '$id' ");
		if($query){
			header('location:../views/riwayat_order.php');
		}else{
			echo "File gagal di upload";
		}
	}else{
		echo 'ekstensi file tak didukung';
	}
}
?>
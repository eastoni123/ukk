<?php 
include '../connection/config.php';
$jurusan = '';
if(isset($_GET['jurusan'])){
	$q = "select * from hal_jurusan where kategori='".$_GET['jurusan']."'";
	$query = mysql_query($q);
	
		//exit;
	$jurusan .='<option value="" disabled selected>Pilih</option>';
	while($row=mysql_fetch_array($query)){
		$jurusan .='<option value="'.$row['id_jurusan'].'">'.$row['singkatan'].'</option>';
	}

	echo $jurusan;	
}

?>
<?php
// sertakan file koneksi
include "../connection/config.php";
// Ubah POST menjadi variabel
$idm = $_POST['id_member'];
$alamat = $_POST['alamat'];
$tgl = $_POST['tgl'];
$option = $_POST['jasa'];
$orderan = $_POST['orderan'];
$bayar = $_POST['bayar'];
$id = $_POST['id'];
// Proses penyimpanan ke dalam database
$sql = mysql_query ("insert into `order` (id_member,alamat,tgl,id_option,orderan,bayar,id_jurusan)
	values ('$idm','$alamat','$tgl','$option','$orderan','$bayar','$id')");

// Jika penyimpanan berhasil
if ($sql) {
	echo "<script>
	window.location='../views/dashboard-member.php';
	</script>";
}
// Jika gagal
else {
	echo "Gagal Order";
}
?>
<?php
// sertakan file koneksi
include "../connection/config.php";
// Ubah POST menjadi variabel
$idm = $_POST['id_member'];
$alamat = $_POST['alamat'];
$lat = $_POST['lat'];
$long = $_POST['long'];
$tgl = $_POST['tgl'];
$option = $_POST['jasa'];
$orderan = $_POST['orderan'];
$bayar = $_POST['bayar'];
$id = $_POST['id'];
// Proses penyimpanan ke dalam database
$q = "INSERT into `order` (id_member,alamat,lat,`long`,tgl,id_option,orderan,bayar,id_jurusan) values ('$idm','$alamat','$lat','$long','$tgl','$option','$orderan','$bayar','$id')";
$sql = mysql_query ($q);

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
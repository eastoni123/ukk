<?php
session_start();//memulai session
include"../connection/config.php";
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM admin WHERE username='$username' AND password = '$password'";
$query = mysql_query($sql) or die(mysql_error());
if (mysql_num_rows($query) == 0 ) {
	echo "<script>";
	echo "alert('Username atau password tidak ditemukan !!');";
	echo "window.location='../../../index.php';";
	echo "</script>";
} else {
	header("location:../views/dashboard.php");
	$fetch = mysql_fetch_array($query);
	$_SESSION['username'] = $fetch['username'];
	$_SESSION['password'] = $fetch['password'];
	$_SESSION['nama_lengkap'] = $fetch['nama_lengkap'];
	$_SESSION['foto_profil'] = $fetch['foto_profil'];
	$_SESSION['alamat'] = $fetch['alamat'];
}

?>
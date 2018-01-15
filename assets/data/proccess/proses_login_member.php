<?php
session_start();//memulai session
include"../connection/config.php";
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM `member` WHERE email='$email' AND password = '$password'";
$query = mysql_query($sql) or die(mysql_error());
if (mysql_num_rows($query) == 0 ) {
	echo "<script>";
	echo "alert('Email atau password tidak ditemukan !!');";
	echo "window.location='../../../index.php';";
	echo "</script>";
} else {
	header("location:../views/dashboard-member.php");
	$fetch = mysql_fetch_array($query);
	$_SESSION['id_member'] = $fetch['id_member'];
	$_SESSION['email'] = $fetch['email'];
	$_SESSION['password'] = $fetch['password'];
	$_SESSION['nama'] = $fetch['nama'];
}

?>
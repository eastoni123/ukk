<?php
session_start();//memulai session
include"../connection/config.php";
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM admin WHERE username='$username' AND password = '$password'";
$query = mysql_query($sql) or die(mysql_error());
if (mysql_num_rows($query) == 0 ) {
	header("location:../../../index.php?Login=gagal");
} else {
	header("location:../views/dashboard.php");
	$_SESSION['login'] = $username;
	$_SESSION['pass'] = $password;
}

?>
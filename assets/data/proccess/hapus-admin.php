<?php
include '../connection/config.php';
if(@$_GET['hapus']){
	$kweri = "DELETE FROM admin where id_admin=".$_GET['hapus'];
	$result = mysql_query($kweri);
	header("location:../views/admin.php");
}
<?php
include '../connection/config.php';
if(@$_GET['hapus']){
	$kweri = "DELETE FROM `order` where id_order=".$_GET['hapus'];
	$result = mysql_query($kweri);
	header("location:../views/dashboard.php");
}
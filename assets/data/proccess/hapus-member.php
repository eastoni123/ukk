<?php
include '../connection/config.php';
if(@$_GET['hapus']){
	$kweri = "DELETE FROM `member` where id_member=".$_GET['hapus'];
	$result = mysql_query($kweri);
	header("location:../views/member.php");
}
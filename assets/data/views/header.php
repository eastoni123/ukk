<?php 
include '../connection/config.php';
session_start();
$pass = $_SESSION['password'];
$user = $_SESSION['username'];
if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
  header("location:../../../index.php");
}
?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Aplikasi Order Jasa">
  <meta name="author" content="Muhammad Eastoni Maulana">
  <title>MESENJASA | <?php echo $_SESSION['nama_lengkap'] ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="../../component/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="../../component/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" type="text/css" href="../../component/css/style.css">
  <link rel="icon" href="../dist/img/mbiru.png">
</head>
<body class="grey lighten-5">
  <!-- NAVBAR -->
  <nav>
    <div class="nav-wrapper blue">
      <a href="#" class="brand-logo center"><img src="../dist/img/mputih.png" style="height: 60px"></a>
      <ul id="nav-mobile" >
        <li class="waves-effect waves-light button-collapse" data-activates="sidenav"><a><i class="zmdi zmdi-menu"></i></a></li>
      </ul>
    </div>
  </nav>
  <!-- END NAVBAR -->
  <!-- SIDENAV MENU -->
  <ul class="side-nav collapsible" id="sidenav" data-collapsible="accordion">
    <li>
      <div class="row white-text" style="background: url(../dist/img/<?php echo $_SESSION['foto_profil'] ?>);background-repeat: no-repeat;background-size: cover;background-position: center;">
        <div class="col s12" style="padding-top: 15px; position: relative;height: 100%;background-color:rgba(0,0,0,0.5);">
          <div class="col s3 m3 z-depth-2" style="border:1px solid white;background: url(../dist/img/<?php echo $_SESSION['foto_profil'] ?>);height: 100px; background-repeat: no-repeat;background-position: center;background-size: cover;"></div>
          <div class="col s9 m9" style="margin-top: 15px">
            <h6 class="col s12 m12"><i class="zmdi zmdi-account left"></i> <?php echo $_SESSION['nama_lengkap'] ?></h6>
          </div>
          <a href="" class="col s12 white-text"><h6><i class="zmdi zmdi-edit"></i>&nbsp;Sunting Profil</h6></a>
        </div>
      </div>
    </li>
    <li><a href="dashboard.php" class="collapsible-header"><i class="zmdi zmdi-home"></i>Dashboard</a></li>
    <li><a href="member.php" class="collapsible-header"><i class="zmdi zmdi-accounts"></i> Data Member</a></li>
    <li><a href="keahlian.php" class="collapsible-header"><i class="zmdi zmdi-settings"></i> Bidang Keahlian dan Jurusan</a></li>
    <li>
      <a class="collapsible-header waves-effect"><i class="zmdi zmdi-shopping-cart"></i> Data Order</a>
      <ul class="collapsible-body">
       <?php
       $sql = "SELECT * FROM bidang";
       $query = mysql_query($sql);
       while ($data = mysql_fetch_array($query)) 
       {
        ?>

        <li><a class="black-text" href="data-order.php?id=<?php echo $data['id_bidang']?>"><?php echo $data['nama_bidang']?></a></li>

        <?php
      }
      ?>
    </ul>
  </li>
  <li><a href="../proccess/logout.php" class="collapsible-header"><i class="zmdi zmdi-power"></i> Keluar</a></li>
</ul>
<!-- END SIDENAV MENU -->


<div class="container-fluid">
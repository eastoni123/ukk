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
  <title>E-Kita | <?php echo $_SESSION['nama_lengkap'] ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="../../component/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="../../component/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" type="text/css" href="../../component/css/animate.css">
  <link rel="stylesheet" type="text/css" href="../../component/css/hover.css">
  <link rel="stylesheet" type="text/css" href="../../component/css/style.css">
</head>
<body class="grey lighten-5">
  <!-- NAVBAR -->
  <nav class="blue">
    <div class="nav-wrapper">
      <a href="#" data-activates="sidenav" class="button-collapse"><i class="zmdi zmdi-menu"></i></a>
      <a href="#" class="brand-logo"><img src="../../component/img/logo-putih.png" style="height: 60px"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="hvr-underline-from-left"><a href="caritukang.php">Cari Tukang</a></li>
        <li class="hvr-underline-from-left"><a href="badges.html">Riwayat Pembookingan</a></li>
        <li id="btn-akun">
          <a>
            <div class="chip blue darken-2 white-text">
              <img src="../dist/img/<?php echo $_SESSION['foto_profil'] ?>" alt="<?php echo $_SESSION['username'] ?>">
              <?php echo $_SESSION['username'] ?>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- END NAVBAR -->
  <!-- SIDENAV MENU -->
  <ul class="side-nav" id="sidenav">
    <li>
      <div class="row white-text" style="background: url(../dist/img/<?php echo $_SESSION['foto_profil'] ?>);background-repeat: no-repeat;background-size: cover;background-position: center;">
        <div class="col s12" style="padding-top: 15px; position: relative;height: 100%;background-color:rgba(0,0,0,0.5);">
          <div class="col s4 z-depth-2" style="border:1px solid white;background: url(../dist/img/<?php echo $_SESSION['foto_profil'] ?>);height: 100px; background-repeat: no-repeat;background-position: center;background-size: cover;"></div>
          <div class="col s8" style="margin-top: 15px">
            <h6 class="col s12"><i class="zmdi zmdi-account left"></i> <?php echo $_SESSION['nama_lengkap'] ?></h6>
          </div>
          <a href="" class="col s12 white-text"><h6><i class="zmdi zmdi-edit"></i>&nbsp;Sunting Profil</h6></a>
        </div>
      </div>
    </li>
    <li><a href="caritukang.php"><i class="zmdi zmdi-search"></i>Cari Tukang</a></li>
    <li><a href="badges.html"><i class="zmdi zmdi-time-restore"></i> Riwayat Pembookingan</a></li>
    <li><a href="../proccess/logout.php"><i class="zmdi zmdi-power"></i> Keluar</a></li>
  </ul>
  <!-- END SIDENAV MENU -->
  
  <div class="white z-depth-2 hide-on-med-and-down" id="kotak-akun">
    <div class="row">
      <div id="foto-akun" style="background: url(../dist/img/<?php echo $_SESSION['foto_profil'] ?>);" class="z-depth-2 col"></div>
      <div class="col m7">
        <h6 class="col m12">Nama : <?php echo $_SESSION['nama_lengkap'] ?></h6>
      </div>
    </div>
    <div class="row" style="margin-top: 20px">
      <a href="profil-member.php" class="col m6 btn blue waves-effect waves-default">Atur Profil <i class="zmdi zmdi-edit"></i> </a>
      <a href="../proccess/logout.php" class="col m5 offset-m1 btn red waves-effect waves-default">Keluar <i class="zmdi zmdi-power"></i> </a>
    </div>
  </div>
  <div class="container-fluid">
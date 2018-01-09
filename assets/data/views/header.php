<?php session_start();
include '../connection/konek.php';
$pass = $_SESSION['pass'];
$user = $_SESSION['login'];
if(!isset($_SESSION['login'])){
  header("location:../../../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ADMIN | <?php echo $_SESSION['login'] ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" type="text/css" href="../../component/css/materialize.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../component/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../../component/css/eas-icon.css">
  <!-- Ionicons -->
  <!-- jvectormap -->
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" type="text/css" href="../../component/css/style.css">
  <!-- Theme style -->
  <link href="../dist/css/jquery.tagsinput.css" rel="stylesheet" />
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- autocomplete -->
  <link href="../dist/css/jquery.autocomplete.css" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="../../../assets/css/bootstrap-datetimepicker.min.css">
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-red-light sidebar-mini">
  <div class="wrapper row">

    <header class="main-header" style="z-index: 999;">

      <!-- Logo -->
      <a href="dashboard.php" class="logo blue darken-3">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="../dist/img/owl.png" style="height: 35px; margin-top: 10px"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img class="brand-logo" src="../../component/img/logo.png" style="height: 30px; margin-top: 10px"></span>
      </a>
      <?php
      $sql = "SELECT * FROM admin WHERE username = '$user' and password = '$pass'";
      $query = mysqli_query($conn,$sql);
      while ($fetch = $query->fetch_assoc()) {
        $tes = $fetch['foto_profil'];
        $nama = $fetch['nama_lengkap'];
      }
      ?>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="nav-wrapper blue darken-3" style="height: 50px;">
        <!-- Sidebar toggle button-->
        <i class="fa fa-bars waves-effect waves-light sidebar-toggle" data-toggle="offcanvas" role="button">
        </i>
        
      </nav>
      
    </header>
    
    <!-- Left sidebar -->
    <aside class="main-sidebar grey lighten-4" >
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel blue darken-3">
          <div class="chip center white col m10 s10 blue darken-4 white-text">
            <img src="../dist/img/<?php echo $tes; ?>" alt="Contact Person">
            <?php echo $nama; ?>
          </div>
        </div>
        <!-- /.search form -->
        <?php  
        include ("../connection/config.php");
        ?>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">

          <li class="active treeview">
            <a href="../views/dashboard.php" class="waves-effect waves-default">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
            </a>
          </li>
          <li>
            <a href="../views/admin.php" class="waves-effect waves-default">
              <i class="fa fa-user"></i><span>Admin</span>
            </a>
          </li>
          <li>
            <a href="../views/member.php" class="waves-effect waves-default">
              <i class="fa fa-users"></i><span>Data Member</span>
            </a>
          </li>
          <li class="treeview">
            <a href="" class="waves-effect waves-default">
              <i class="fa fa-inbox"></i><span>Data Order</span>
            </a>
            <ul class="treeview-menu">
              <?php
              $sql = "SELECT * FROM bidang";
              $query = mysql_query($sql);
              while ($data = mysql_fetch_array($query)) {
                ?>
                <li>
                  <a href="../views/data-order.php?id=<?php echo $data['id_bidang']?>" class="waves-effect waves-default">
                    <i class="fa fa-angle-right"></i><span><?php echo $data['nama_bidang']?></span>
                  </a>
                </li>
                <?php
              }
              ?>
            </ul>
          </li>


          <li class="treeview">
            <a href="../proccess/logout.php" class="waves-effect waves-default">
              <i class="fa fa-sign-out"></i> <span>Logout</span></i>
            </a>
          </li>


        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <script type="text/javascript" src="../../component/js/jquery.min.js"></script>


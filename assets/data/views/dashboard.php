<?php 
include 'header.php';
include "../connection/config.php";
$sql = mysql_query ("select * from admin");
$totaladmin = mysql_query("SELECT COUNT(*) as total FROM admin");
$totalmember = mysql_query("SELECT COUNT(*) as total FROM member");
$totalorder = mysql_query("SELECT COUNT(*) as total FROM `order`");
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper row">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <span class="fa-stack fa-lg fa-2x">
        <i class="fa fa-stack-2x fa-circle" style="color: #1565c0;"></i>
        <i class="fa fa-stack-1x fa-dashboard white-text"></i>
      </span>
      Dashboard "<?php echo $nama ?>"
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->
    <div class="box-dash red col m3 white-text z-depth-3" style="padding: 10px;">
      <h6 class="col m12 s12 right-align">Admin</h6>
      <i class="fa fa-user col m2 s12 center-align" style="font-size: 100px"></i>
      <?php while ($data = mysql_fetch_array($totaladmin)) {
        ?>
        <p class="col m6 offset-m4 s12 center-align" style="font-size: 30px"><?php echo $data['total'] ?> Orang</p>
        <?php } ?>
        <a href="admin.php" style="border-radius: 50px;border: 1.5px solid white !important" class="transparent btn col m6 offset-m6 s12 waves-effect waves-light">Lihat</a>
      </div>

      <div class="box-dash orange col m3 offset-m1 white-text z-depth-3" style="padding: 10px;">
        <h6 class="col m12 s12 right-align">Member</h6>
        <i class="fa fa-users col m2 s12 center-align" style="font-size: 100px"></i>
        <?php while ($data = mysql_fetch_array($totalmember)) {
          ?>
          <p class="col m6 offset-m4 s12 center-align" style="font-size: 30px"><?php echo $data['total'] ?> Orang</p>
          <?php } ?>
          <a href="member.php" style="border-radius: 50px;border: 1.5px solid white !important" class="transparent btn col m6 offset-m6 s12 waves-effect waves-light">Lihat</a>
        </div>

        <div class="box-dash green col m3 offset-m1 white-text z-depth-3" style="padding: 10px;">
          <h6 class="col m12 s12 right-align">Total Orderan</h6>
          <i class="fa fa-shopping-cart col m2 s12 center-align" style="font-size: 100px"></i>
          <?php while ($data = mysql_fetch_array($totalorder)) {
            ?>
            <p class="col m6 offset-m4 s12 center-align" style="font-size: 30px"><?php echo $data['total'] ?></p>
            <?php } ?>
            <a href="total_order.php" style="border-radius: 50px;border: 1.5px solid white !important" class="transparent btn col m6 offset-m6 s12 waves-effect waves-light">Lihat</a>
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <?php 
      include 'footer.php' ?>

      <!-- jQuery 2.2.0 -->
      <script src="../plugins/jQuery/jQuery-2.2.0.min.js"></script>
      <script type="text/javascript" src="../../component/js/materialize.min.js"></script>
      <script type="text/javascript">
       $('.tooltipped').tooltip({delay: 50});
     </script>
     <!-- Bootstrap 3.3.6 -->
     <!-- FastClick -->
     <script src="../plugins/fastclick/fastclick.js"></script>
     <!-- AdminLTE App -->
     <script src="../dist/js/app.min.js"></script>
     <!-- Sparkline -->
     <script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
     <!-- jvectormap -->
     <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
     <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
     <!-- SlimScroll 1.3.0 -->
     <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
     <!-- ChartJS 1.0.1 -->
     <script src="../plugins/chartjs/Chart.min.js"></script>
     <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
     <script src="../dist/js/pages/dashboard2.js"></script>
     <!-- AdminLTE for demo purposes -->
     <script src="../dist/js/demo.js"></script>
   </body>
   </html>

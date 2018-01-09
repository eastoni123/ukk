<?php 
include 'header.php';
include "../connection/config.php";
$bidang = $_GET['bidang'];
$sql = "SELECT * FROM bidang";
$query = mysql_query($sql);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper row">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1 >
      <span class="fa-stack fa-lg fa-2x">
        <i class="fa fa-stack-2x fa-circle" style="color: #1565c0;"></i>
        <i class="fa fa-stack-1x fa-user white-text"></i>
      </span>
      Data Admin
    </h1>
    <button data-target="modal-admin" class="col m2 offset-m1 blue darken-3 btn waves-effect waves-light">Tambah Bidang Keahlian</button>
  </section><br>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->
    
    <?php
    while ($data = mysql_fetch_array($query)) {
      ?>
      
      <?php
    }
    ?>
    
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
  $('.modal').modal();
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

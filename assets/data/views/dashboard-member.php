<?php 
include 'header_member.php';
include "../connection/config.php";
$sql = mysql_query ("select * from `order`");

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
    <img src="../dist/img/Kipli.png" class="owl-color tooltipped col m2 s6 offset-s3 offset-m4" data-position="top" data-delay="50" data-tooltip="Halo <?php echo $nama ?>" >
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php 
include 'footer.php';
include 'footer-member.php'; 
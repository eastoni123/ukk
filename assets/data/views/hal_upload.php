<?php 
include 'header_member.php';
include "../connection/config.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper row">
	<!-- Content Header (Page header) -->
	<section class="content-header">

	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Info boxes -->
		<form action="../proccess/proses_upload_bukti.php" method="post" enctype="multipart/form-data">
			<div class="file-field input-field col s12 m8 offset-m2">
				<div class="btn blue darken-4">
					<span>Pilih File <i class="fa fa-camera"></i></span>
					<input type="file" name="file">
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text">
				</div>
			</div>
			<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
			<button type="submit" name="upload" class="btn col m2 offset-m5 s12 blue darken-4">Kirim</button>
		</form>
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
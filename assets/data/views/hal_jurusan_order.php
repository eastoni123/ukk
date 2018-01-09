<?php
include 'header_member.php';
include "../connection/config.php";
$bidang = $_GET['bidang'];
$sql = "SELECT * FROM hal_jurusan WHERE kategori = $bidang";
$query = mysql_query($sql);

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper row">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<span class="fa-stack fa-lg fa-2x">
				<i class="fa fa-stack-2x fa-circle" style="color: #1565c0;"></i>
				<i class="fa fa-stack-1x fa-shopping-cart white-text"></i>
			</span>
			Silahkan Order
		</h1>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Info boxes -->
		<?php
		while ($data = mysql_fetch_array($query)) {
			?>
			<div class="col s12 m4 offset-m1 white z-depth-2" style="padding: 10px; border-bottom:5px solid #0277bd; margin-top: 25px;">
				<div class="bg-photo darken-4 center z-depth-2" style="background: url(../dist/img/<?php echo $data['foto_profil'] ?>);background-size: cover; ">
					<div id="hov" >
						<div class="avatar-admin" style="background: url(../dist/img/<?php echo $data['foto_profil'] ?>);background-size: cover; "></div>
						<h5 class="center-align col m12 s12 white-text" style="position:relative;">"<?php echo $data['nama_jurusan']?>"</h5>
						<a style="position: relative;" href="order_member.php?id=<?php echo $data['id_jurusan']; ?>" class="btn-view-delete-admin btn waves-effect waves-light transparent col m6 s6 offset-m3 offset-s3">Order</a>
					</div>
				</div>
			</div>
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
<?php
include 'header.php';
include "../connection/config.php";
$id = $_GET['id'];
$sql = "SELECT o.*, j.nama_jurusan, oj.nama_jasa FROM `order` o INNER JOIN hal_jurusan j ON o.id_jurusan = j.id_jurusan INNER JOIN option_jurusan oj ON o.id_option = oj.id_option WHERE id_member = $id";
$query =mysql_query($sql);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper row">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<span class="fa-stack fa-lg fa-2x">
				<i class="fa fa-stack-2x fa-circle" style="color: #1565c0;"></i>
				<i class="fa fa-stack-1x fa-inbox white-text"></i>
			</span>
			Orderan
		</h1>
		<button onclick="goBack()" class="col m2 offset-m10 waves-effect waves-light s12 btn orange dark-3"><i class="fa fa-chevron-left"></i> Kembali</button>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Info boxes -->
		<img src="../dist/img/Kipli.png" class="owl-color tooltipped col m2 s6 offset-s3" data-position="top" data-delay="50" data-tooltip="Halo <?php echo $nama ?>" >
		<table class="striped z-depth-1 bordered centered responsive-table blue darken-4 col m10">
			<table class="striped z-depth-1 bordered centered responsive-table blue darken-4 col m10">
				<thead class="white-text">
					<tr>
						<th>Deadline</th>
						<th>Jasa</th>
						<th>Orderan</th>
						<th>Bayar via</th>
						<th>Jurusan</th>
						<th>Status</th>
					</tr>
				</thead>
				<?php 
				while ($data = mysql_fetch_array($query)) {
					?>
					<tr class="white ">
						<td><?php echo $data['tgl_ambil'] ?></td>
						<td><?php echo $data['nama_jasa'] ?></td>
						<td><?php echo $data['orderan'] ?></td>
						<td><?php echo $data['bayar'] ?></td>
						<td><?php echo $data['nama_jurusan'] ?></td>
						<td>
							<?php
							if($data['status'] == 1){
								?>
								<a href=""><i class="fa fa-check fa-2x green-text"></i></a>
								<?php
							}else{
								?>
								<a href=""><i class="fa fa-close fa-2x red-text"></i></a>
								<?php
							}

							?>
						</td>
					</tr>
					<?php 
				}
				?>
			</table>
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
	<script type="text/javascript">
		function goBack() {
			window.history.back();
		}
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
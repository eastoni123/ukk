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
		while ($data = mysql_fetch_array($query)) 
		{
			?>
			<div class="col m3 offset-m1 s12 white z-depth-2" style="padding: 0px !important;margin-top: 20px">
				<div class="col m12 s12" style="height: 245px;background: url(../dist/img/<?php echo $data['foto_profil'] ?>);background-position: center;background-repeat: no-repeat;background-size: cover;">

				</div>

				<div class="col m12 s12" style="margin-top: 1vh">
					<h6 class="col m12 s12 grey-text">Jurusan :</h6>
					<h5 class="col m12 s12" style="font-size: 18px;font-family: Roboto Light"><?php echo $data['nama_jurusan'] ?></h5>
				</div>

				<a href="order_member.php?id=<?php echo $data['id_jurusan'] ?>" class="btn waves-effect blue darken-2 col m12 s12">Order <i class="zmdi zmdi-shopping-cart right"></i></a>
			</div>
			<?php
		}
		?>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php 
include 'footer.php';
include 'footer-member.php';
?>
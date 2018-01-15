<?php
include "../connection/config.php";
$bidang = $_GET['bidang'];
$sql = "SELECT * FROM hal_jurusan WHERE kategori = $bidang";
$query = mysql_query($sql);
$sql2 = "SELECT * FROM bidang";
$query2 = mysql_query($sql2);

?>
<!DOCTYPE html>
<html>
<head>
	<title>MESENJASA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="../../component/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../../component/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../component/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../component/css/swiper.min.css">
	<link rel="icon" href="../dist/img/mbiru.png">
</head>
<body class="grey lighten-5">

	<?php 
	include 'navbar.php';
	?>
	<div class="container-fluid">
		<div class="row">
			<span class="fa-stack fa-lg kiri col m1 offset-m3 s1" style="z-index: 99;cursor: pointer;padding: 0px !important">
				<i class="fa fa-circle fa-stack-2x blue-text"></i>
				<i class="fa fa-angle-left fa-stack-1x white-text"></i>
			</span>
			<div class="swiper-container col m4 s10" style="height: auto;">
				
				<div class="swiper-wrapper col m12 s12" style="height: auto;">
					<?php while ($data2 = mysql_fetch_array($query2)) 
					{
						?>
						<div class="swiper-slide" style="padding: 0px !important;margin-right: 5px;min-width:25%; margin-left: 5px">

							<div class="chip blue center-align" style="padding: 0px 10px !important;min-width: 100% !important;margin-right: 5px;margin-left: 5px">
								<a class="white-text" href="hal_jurusan.php?bidang=<?php echo $data2['id_bidang'] ?>"><?php echo $data2['nama_bidang'] ?></a>
							</div>
							
						</div>
						<?php 
					} 
					?>
				</div>
			</div><!-- END SWIPER -->
			<span class="fa-stack fa-lg kanan col m1 s1" style="z-index: 99;cursor: pointer;padding: 0px !important">
				<i class="fa fa-circle fa-stack-2x blue-text"></i>
				<i class="fa fa-angle-right fa-stack-1x white-text"></i>
			</span>
			<div class="col m10 s12">
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

						<a href="detail-jurusan.php?id=<?php echo $data['id_jurusan'] ?>" class="btn waves-effect blue darken-2 col m12 s12">Detail</a>
					</div>
					<?php
				}
				?>	
			</div>
			<div class="col m2 s12 white">
				<h6 class="col m12 s12 grey-text">Tag</h6>
				<?php 
				while ($data3 = mysql_fetch_array($query)) 
				{
					?>
					<a href="" class="col m1">AKU</a>
					
				</div>
				<?php 
			}
			?>
		</div>
	</div>
	<?php include 'footer.php' ?>
	<!--JAVASCRIPT-->
	<script type="text/javascript" src="../../component/js/jquery.min.js"></script>
	<script type="text/javascript" src="../../component/js/global.js"></script>
	<script type="text/javascript" src="../../component/js/materialize.min.js"></script>
	<script type="text/javascript" src="../../component/js/swiper.min.js"></script>
	<script type="text/javascript">
		$('.carousel').carousel();
		$('.modal').modal();
	</script>
	<script type="text/javascript">
		function goBack() {
			window.history.back();
		}
	</script>
	<script type="text/javascript">
		var swiper = new Swiper('.swiper-container', {
			slidesPerView: 4,
			centeredSlides: true,
			nextButton: '.kanan',
			prevButton: '.kiri',
		});

	</script>
</body>
</html>
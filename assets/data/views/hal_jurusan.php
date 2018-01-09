<?php
include "../connection/config.php";
$bidang = $_GET['bidang'];
$sql = "SELECT * FROM hal_jurusan WHERE kategori = $bidang";
$query = mysql_query($sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="../../component/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../../component/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../component/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../component/css/swiper.min.css">

</head>
<body>


	<nav>
		<div class="nav-wrapper blue darken-3">
			<ul id="nav-mobile" class="left hide-on-med-and-down">
				<li class="waves-effect waves-light"><a onclick="goBack()"><i class="fa fa-arrow-left"></i></a></li>
			</ul>
			<a onclick="goBack()" class="button-collapse"><i class="fa fa-arrow-left"></i></a>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row grey lighten-4">
			<h6 class="col m12 s12">
				<span class="fa-stack fa-lg fa-2x">
					<i class="fa fa-stack-2x fa-circle" style="color: #1565c0;"></i>
					<i class="fa fa-stack-1x fa-gears white-text"></i>
				</span>
				Lihat Jurusan
			</h6>		
			<!-- baru -->
			<img src="../dist/img/Kipli.png" class="owl-color tooltipped col m2 s6 offset-s3" data-position="top" data-delay="50" data-tooltip="Lihat dulu Jurusannya, baru order jasanya" >
			<?php
			while ($data = mysql_fetch_array($query)) {
				?>
				<div class="col s12 m3 offset-m1 white z-depth-2" style="padding: 10px; border-bottom:5px solid #0277bd; margin-top: 25px;">
					<div class="bg-photo darken-4 center z-depth-2" style="background: url(../dist/img/<?php echo $data['foto_profil'] ?>);background-size: cover; ">
						<div id="hov" >
							<div class="avatar-admin" style="background: url(../dist/img/<?php echo $data['foto_profil'] ?>);background-size: cover; "></div>
							<h5 class="center-align col m12 s12 white-text" style="position:relative;">"<?php echo $data['nama_jurusan']?>"</h5>
							<a style="position: relative;" href="detail-jurusan.php?id=<?php echo $data['id_jurusan'] ?>" class="btn-view-delete-admin btn waves-effect waves-light transparent col offset-m3 offset-s3 m6 s6">Detail</a>
						</div>
					</div>
				</div>
				<?php
			}
			?>
			<!-- baru -->
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
</body>
</html>
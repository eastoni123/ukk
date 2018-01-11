<?php 
include ('../connection/config.php');
$id = $_GET['id'];
$sql = "SELECT * FROM hal_jurusan WHERE id_jurusan = $id";
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
	<style type="text/css">
	.photo-detail{
		height:500px;
	}
	@media only screen and (max-width: 768px){
		.photo-detail{
			height: 200px;
		}
	}
</style>
</head>
<body class="grey lighten-5">
	<nav>
		<div class="nav-wrapper blue darken-3">
			<ul id="nav-mobile" class="left hide-on-med-and-down">
				<li class="waves-effect waves-light"><a onclick="goBack()"><i class="fa fa-arrow-left"></i></a></li>
			</ul>
			<a onclick="goBack()" class="button-collapse"><i class="fa fa-arrow-left"></i></a>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<h6 class="col m12 s12">
				<span class="fa-stack fa-lg fa-2x">
					<i class="fa fa-stack-2x fa-circle" style="color: #1565c0;"></i>
					<i class="fa fa-stack-1x fa-gears white-text"></i>
				</span>
				Detail Jurusan
			</h6>	
			<?php 
			while ($data = mysql_fetch_array($query)) {
				?>
				<h5 class="col m7 s12 blue darken-3 white-text center-align" style="padding-top: 10px;padding-bottom: 10px;"><?php echo $data['nama_jurusan'] ?></h5>
				<div class="col m12 s12 photo-detail z-depth-3" style="background: url(../dist/img/<?php echo $data['foto_profil'] ?>);background-size: cover;background-repeat: no-repeat;">
				</div>
				<p class="col m6 s12" style="text-align: justify;">Detail<br>
					<br>
					<?php echo $data['penjelasan'] ?></p>
					<div class="col m5 offset-m1 s12">	
						<a class="btn-large waves-effect waves-default blue darken-3 col m12 s12" style="border-radius: 50px;margin-top: 25px" href="#" onclick="Materialize.toast('Silahkan Login Sebagai Member untuk Order', 4000)"><h5>Order</h5></a>
						<hr class="col m6 offset-m3 s6 offset-s3">
						<h6 class="col m12 s12 center-align">Bagikan</h6><hr class="col m6 offset-m3 s6 offset-s3">
						<div class="col m6 s6 offset-m3 offset-s3">
							<span class="col m6 sosmed s6 fa-stack fa-lg fa-2x">
								<i class="fa fa-circle blue-text text-lighten-1 fa-stack-2x"></i>
								<i class="fa fa-twitter white-text fa-stack-1x"></i>
							</span>
							<span class="col m6 sosmed s6 fa-stack fa-lg fa-2x">
								<i class="fa fa-circle blue-text text-darken-4 fa-stack-2x"></i>
								<i class="fa fa-facebook white-text fa-stack-1x"></i>
							</span>
						</div>
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
		<script type="text/javascript">
			function goBack() {
				window.history.back();
			}
		</script>
	</body>
	</html>
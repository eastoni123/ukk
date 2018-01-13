<?php  
include ("assets/data/connection/config.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>MESENJASA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="assets/component/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="assets/component/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/component/css/style.css">
</head>
<body>


	<div class="container-fluid">
		<div class="row z-depth-2 white">
			<img src="assets/component/img/logobiru.png" class="col m1 s4 offset-s4 offset-m1" style="height: auto;margin-top: 15px">
			<div class="col m10 s12">
				<div class="col m12 s12">
					<div class="col m8 s12">
						<h4 class="col m12 s12 center-align" style="font-family: LemonMilk">MESENJASA</h4>
						<p class="col m12 s12 center-align" style="font-size: 10px">"Aplikasi Order Jasa Jurusan SMK"</p>
					</div>
					<a href="" class="btn blue col m2 s6 waves-effect" style="border-radius: 50px 0px 0px 50px;margin-top:2%">Gabung Sekarang</a>
					<a href="" class="btn white blue-text col m2 s6 waves-effect" style="border-radius:0px 50px 50px 0px;margin-top:2%">Masuk</a>
				</div>
				<nav class="col m12 s12 transparent z-depth-0">
					<div class="nav-wrapper">
						<a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars blue-text"></i></a>
						<ul id="nav-mobile" class="right hide-on-med-and-down">
							<li><a href="" class="blue-text text-darken-3  hvr-underline-from-left">Beranda</a></li>
							<li><a href="" class="blue-text text-darken-3  hvr-underline-from-left">Keunggulan Kami</a></li>
							<li><a href="assets/data/views/hal_jurusan.php?bidang=1" class="blue-text text-darken-3  hvr-underline-from-left">Lihat Jurusan</a></li>
							<li><a href="" class="blue-text text-darken-3  hvr-underline-from-left">Cara Order</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div><!--CONTAINER-->

	<ul id="slide-out" class="side-nav">
		<li><a class="waves-effect" href="#!">Beranda</a></li>
		<li><a class="waves-effect" href="#!">Keunggulan Kami</a></li>
		<li><a class="waves-effect" href="assets/data/views/hal_jurusan.php?bidang=1">Lihat Jurusan</a></li>
		<li><a class="waves-effect" href="#!">Cara Order</a></li>
	</ul>

	<?php include 'assets/data/views/footer.php' ?>

	<!--JAVASCRIPT-->
	<script type="text/javascript" src="assets/component/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/component/js/global.js"></script>
	<script type="text/javascript" src="assets/component/js/materialize.min.js"></script>
	<script type="text/javascript">
		$('.dropdown-button').dropdown({
			inDuration: 300,
			outDuration: 225,
			constrain_width:false, 
			hover: true,
			gutter: 0,
			belowOrigin: true,
			alignment: 'left'
		}
		);
		$('.modal').modal();
	</script>
</body>
</html>
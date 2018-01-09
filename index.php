<?php  
include ("assets/data/connection/config.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>E-Kita</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="assets/component/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="assets/component/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/component/css/style.css">
</head>
<body>
	<!--NAVBAR-->
	<?php 
	include 'assets/data/views/navbar.php'
	?>


	<div class="container-fluid">
		<div class="row utama" style="">
			<div  class="center col m6 s12 white-text">
				<img class="brand-logo" src="assets/component/img/logo.png" style="height: 100px;">
				<h6 >"Aplikasi Order Jasa dari Jurusan di SMK"</h6>
			</div>
			
			<div class="z-depth-4 col m4 offset-m1 s12  grey lighten-5" style="padding-bottom: 15px; margin-top: 10px;">
				<h4 class="center blue darken-4 col m12 s12 white-text" style="padding: 5px; margin-top: 0px">MEMBER</h4>
				<form method="post" action="assets/data/proccess/proses_login_member.php">
					<div class="input-field col s12">
						<input id="email" type="email" class="validate" name="email">
						<label for="email">E-mail</label>
					</div>
					<div class="input-field col s12">
						<input id="password" type="password" class="validate" name="password">
						<label for="password">Password</label>
					</div>
					<button data-target="modal-reg" type="register" name="" class="btn col m6 s6 btn-flat waves-effect waves-default">Daftar</button>
					<button type="submit" name="" class="btn col m6 s6 blue darken-3 waves-effect waves-light">Masuk</button>
				</form>
			</div>
		</div>


		<?php 
		include 'assets/data/views/modal-bottom.php'
		?>
	</div><!--CONTAINER-->

	<div id="modal-reg" class="modal white">
		<div class="modal-content">
			<h4>Daftar</h4>
			<form action="assets/data/proccess/proses_register.php" method="post" enctype="multipart/form-data">
				<div class="input-field col s12 m12">
					<input id="email" type="email" class="validate" name="email">
					<label for="email"><i class="fa fa-envelope"></i> E-mail</label>
				</div>
				<div class="input-field col s12 m12">
					<input id="password" type="password" class="validate" name="password">
					<label for="password"><i class="fa fa-lock"></i> Password</label>
				</div>
				<div class="input-field col s12 m12">
					<input id="nama" type="text"  name="nama">
					<label for="nama"><i class="fa fa-user"></i> Nama</label>
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn blue darken-3" name="reg" value="Tambah">
				</div>
			</form>
		</div>
	</div>
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
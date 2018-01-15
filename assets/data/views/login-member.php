<?php
include "../connection/config.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>MESENJASA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="../../component/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../../component/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="../../component/css/style.css">
	<link rel="icon" href="../dist/img/mbiru.png">
</head>
<body class="grey lighten-5">

	<?php 
	include 'navbar.php';
	?>
	<div class="container-fluid">
		<div class="row">
			<div class="white col m4 s12 z-depth-2" style="padding: 0px !important">
				<p class="col m12 s12 flow-text center-align blue white-text" style="margin-top: 0px;padding: 10px 0px">Silahkan Masuk</p>
				<form class="col m12 s12" action="../proccess/proses_login_member.php" method="post">
					<div class="input-field col s12 m12">
						<input id="email" type="email" class="validate" name="email">
						<label for="email" data-error="Email harus mengandung '@' yah 😊" data-success="Valid"><i class="zmdi zmdi-email"></i> Email</label>
					</div>
					<div class="input-field col s12 m12">
						<input id="pas" type="password" class="validate" name="password">
						<label for="pass"><i class="zmdi zmdi-lock"></i> Password</label>
					</div>
					<button type="submit" class=" blue btn waves-effect col m6 right">Masuk <i class="zmdi zmdi-mail-send right"></i></button>
				</form>
			</div>
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
	</html>
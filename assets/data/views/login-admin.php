<?php 
include ('../connection/config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="../../component/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../../component/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="../../component/css/style.css">
</head>
<body class="grey lighten-5">
	<div class="container-fluid">
		<div class="row">
			<div class="z-depth-4 col m6 offset-m3 s12  grey lighten-5" style="padding:0px !important; margin-top: 15vh;">
				<p class="center blue col m12 s12 white-text" style="padding: 5px; margin-top: 0px;font-family: roboto light;font-size: 30px">LOGIN ADMIN</p>
				<img src="../dist/img/mbiru.png" class="col m4 offset-m1 s6 offset-s3" style="height: auto;margin-bottom: 3vh">
				<form method="post" action="../proccess/proses_login_admin.php" class="col m7 s12" style="margin-bottom: 5vh">
					<div class="input-field col s12">
						<input id="username" type="text" class="validate" name="username" required>
						<label for="username"><i class="zmdi zmdi-account"></i> Username</label>
					</div>
					<div class="input-field col s12">
						<input id="password" type="password" class="validate" name="password" required>
						<label for="password"><i class="zmdi zmdi-lock"></i> Password</label>
					</div>
					<button type="submit" name="" class="btn col m6 s12 right red waves-effect">Masuk <i class="zmdi zmdi-sign-in right"></i></button>
				</form>
			</div>
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
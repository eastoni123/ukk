<?php 
include ('../connection/config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="../../component/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../../component/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../component/css/style.css">
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
		<div class="row" style="padding-top: 15%;
		padding-bottom: 10%">
		<div class="z-depth-4 col m6 offset-m3 s12  grey lighten-5" style="padding-bottom: 15px; margin-top: 10px;">
			<h4 class="center blue darken-4 col m12 s12 white-text" style="padding: 5px; margin-top: 0px">LOGIN</h4>
			<form method="post" action="../proccess/proses_login_admin.php">
				<div class="input-field col s12">
					<input id="username" type="text" class="validate" name="username">
					<label for="username">Username</label>
				</div>
				<div class="input-field col s12">
					<input id="password" type="password" class="validate" name="password">
					<label for="password">Password</label>
				</div>
				<button type="submit" name="" class="btn col m12 s12 blue darken-3">Masuk</button>
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
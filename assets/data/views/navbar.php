<nav>
	<div class="nav-wrapper blue darken-3">
		<img class="brand-logo" src="assets/component/img/logo.png" style="height: 50px; margin-top: 5px;">
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="">Beranda</a></li>
			<li><a class="dropdown-button" href="" data-activates="drop-jurusan-desk">Lihat Bidang Keahlian</a></li>
			<li><a href="assets/data/views/login-admin.php">Login</a></li>
		</ul>
		<ul class="side-nav collapsible" data-collapsible="accordion" id="mobile-demo">
			<li><a href="">Beranda</a></li>
			<li>
				<div class="collapsible-header black-text waves-effect waves-dark">Lihat Bidang Keahlian</div>
				<div class="collapsible-body black-text">
					<ul>
						<?php
						$sql = "SELECT * FROM bidang";
						$query = mysql_query($sql);
						while ($data = mysql_fetch_array($query)) {
							?>

							<li><a class="black-text" href="assets/data/views/hal_jurusan.php?bidang=<?php echo $data['id_bidang']?>"><?php echo $data['nama_bidang']?></a></li>

							<?php
						}
						?>
					</ul>
				</div>
			</li>
			<li><a href="assets/data/views/login-admin.php">Login</a></li>
		</ul>
	</div>
</nav><!--NAVBAR-->
<!--DROPDOWN-->

<ul id="drop-jurusan-desk" class="grey lighten-5 dropdown-content">
	<li><a href="" class="disabled">Bidang</a></li>
	<li class="divider"></li>
	<?php
	$sql = "SELECT * FROM bidang";
	$query = mysql_query($sql);
	while ($data = mysql_fetch_array($query)) {
		?>

		<li><a class="black-text" href="assets/data/views/hal_jurusan.php?bidang=<?php echo $data['id_bidang']?>"><?php echo $data['nama_bidang']?></a></li>

		<?php
	}
	?>
</ul>
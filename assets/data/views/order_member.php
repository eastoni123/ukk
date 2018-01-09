<?php
include 'header_member.php';
include "../connection/config.php";
$id = $_GET['id'];
$sql = "SELECT * FROM hal_jurusan WHERE id_jurusan = $id";
$sql2 = "SELECT *  FROM option_jurusan WHERE id_jurusan = $id";
$query = mysql_query($sql);
$query2 = mysql_query($sql2);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper row">
	<!-- Content Header (Page header) -->
	<section class="content-header">

	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Info boxes -->
	
		<?php
		while ($data = mysql_fetch_array($query)) {
			?>

			<form class="col m6 offset-m3 white s12 z-depth-3" method="post" action="../proccess/proses_order.php" style="padding-bottom: 10px;padding-top: 0px; margin-top: 2%;">
				<div class="blue darken-3 white-text center" style="padding:1px"><img class="brand-logo" src="../../component/img/logo.png" style="height: 40px; margin-top: 5px;"></div>
				<h5 class="center">Order</h5>
				<h6 class="center">"<?php echo $data['nama_jurusan']; ?>"</h6>
				<hr class="col m4 offset-m4 s4 offset-s4 blue lighten-3">
				<div class="input-field col s12 m12">
					<input id="id" type="hidden" class="validate" name="id" value="<?php echo $data['id_jurusan'] ;?>">
				</div>
				<input id="idm" type="hidden" class="validate" name="id_member" value="<?php echo $_SESSION['id_member'] ;?>">

				
				<div class="input-field col s12 m6">
					<input id="alamat" type="text" class="validate" name="alamat">
					<label for="alamat"><i class="eas-icon eas-ic_map_48px lg"></i> Tujuan Pengiriman Hasil</label>
				</div>
				<div class="input-field col s12 m6">
					<input type="date" name="tgl_ambil" class="datepicker">
					<label><i class="eas-icon eas-ic_perm_contact_calendar_48px lg"></i> Deadline</label>
				</div>
				<div class="input-field col s12 m6">
					<select name="jasa">
						<option value="" disabled selected>Pilih</option>
						<?php while ($data = mysql_fetch_array($query2)) {
							?>
							<option value="<?php echo $data['id_option'] ?>" ><?php echo $data['nama_jasa'] ?></option>
							<?php } ?>
						</select>
						<label>Jenis Jasa</label>
					</div>
					<div class="input-field col s12 m12">
						<textarea class="materialize-textarea" id="apa" name="orderan"></textarea>
						<label for="apa">Keterangan Order</label>
					</div>
					<div class="input-field col s12 m12">
						<select name="bayar">
							<option >BCA</option>
							<option >BRI</option>
							<option>BNI</option>
							<option>CIMB NIAGA</option>
							<option>BUKOPIN</option>
							<option>btpn</option>
							<option>BANK MEGA</option>
							<option>BANK UNDI</option>
						</select>
						<label><i class="eas-icon eas-ic_attach_money_48px lg"></i> Bayar via</label>
					</div>
					<a class="btn btn-flat waves-effect waves-light col m5 left s12" href="../../index.php" onclick="goBack()">Kembali</a>
					<button type="submit" onclick="Materialize.toast('Order Berhasil', 4000)" class="btn blue darken-3 waves-effect waves-light col m5 s12 right">Order <i class="eas-icon eas-ic_send_48px lg"></i></button>
				</form>
			</div>
			<?php } ?>
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<?php 
	include 'footer.php' ?>

	<!-- jQuery 2.2.0 -->
	<script src="../plugins/jQuery/jQuery-2.2.0.min.js"></script>
	<script type="text/javascript" src="../../component/js/materialize.min.js"></script>
	<script type="text/javascript">
		$('.tooltipped').tooltip({delay: 50});
		$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
});
		$('select').material_select();
	</script>
	<script type="text/javascript">
		function getkey(e)
		{
			if (window.event)
				return window.event.keyCode;
			else if (e)
				return e.which;
			else
				return null;
		}
		function angkadanhuruf(e, goods, field)
		{
			var angka, karakterangka;
			angka = getkey(e);
			if (angka == null) return true;

			karakterangka = String.fromCharCode(angka);
			karakterangka = karakterangka.toLowerCase();
			goods = goods.toLowerCase();

// check goodkeys
if (goods.indexOf(karakterangka) != -1)
	return true;
// control angka
if ( angka==null || angka==0 || angka==8 || angka==9 || angka==27 )
	return true;

if (angka == 13) {
	var i;
	for (i = 0; i < field.form.elements.length; i++)
		if (field == field.form.elements[i])
			break;
		i = (i + 1) % field.form.elements.length;
		field.form.elements[i].focus();
		return false;
	};
// else return false
return false;
}
</script>
</script>
<!-- Bootstrap 3.3.6 -->
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script type="text/javascript">
	<script type="text/javascript">
	function goBack() {
		window.history.back();
	}
</script>
</script>
</body>
</html>
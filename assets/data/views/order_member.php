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
					<label for="alamat"><i class="fa fa-map"></i> Tujuan Pengiriman Hasil</label>
				</div>
				<input type="hidden" name="tgl" class="validate" value="<?php echo "" .date("d F, o") ?>">
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
						<label><i class="fa fa-money"></i> Bayar via</label>
					</div>
					<a class="btn btn-flat waves-effect waves-light col m5 left s12"  onclick="goBack()">Kembali</a>
					<button type="submit" onclick="Materialize.toast('Order Berhasil', 4000)" class="btn blue darken-3 waves-effect waves-light col m5 s12 right">Order <i class="fa fa-send right"></i></button>
				</form>
			</div>
			<?php } ?>
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<?php 
	include 'footer-member.php' ?>

<?php 
include 'header.php';
include "../connection/config.php";
$sql = "SELECT * FROM bidang";
$query = mysql_query($sql);
$databid = mysql_query($sql);

?>

<div class="row">
	<table class="responsive-table striped bordered z-depth-2 blue col m5 s12" style="margin-top: 50px;">
		<thead class="white-text" >
			<tr>
				<th class="flow-text">Bidang Keahlian</th>
				<th style="font-family: roboto light" class="center-align">Aksi</th>
			</tr>
		</thead>
		<?php while ($data = mysql_fetch_array($databid))
		{
			?>
			<tr class="white">
				<td><?php echo $data['nama_bidang'] ?></td>
				<td>
					<a href="#" class="btn orange waves-effect">EDIT <i class="zmdi zmdi-edit left"></i></a>
				</td>
				<td>
					<a href="#" class="btn red waves-effect">HAPUS <i class="zmdi zmdi-delete left"></i></a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>

	<div class="white col m4 offset-m1 s12 z-depth-2" style="margin-top: 50px;padding: 0px !important">
		<form method="post" action="../proccess/add-keahlian.php" class="col m12 s12" style="padding: 0px !important">
			<p class="col m12 s12 blue white-text flow-text" style="padding: 15px;margin-top: 0px;">Tambah Keahlian</p>
			<div class="input-field col s12">
				<select id="bidang">
					<option value="" disabled selected>Pilih</option>
					<?php while ($data = mysql_fetch_array($query)) 
					{
						?>
						<option value="<?php echo $data['id_bidang'] ?>"><?php echo $data['nama_bidang'] ?></option>
						<?php 
					} 
					?>
				</select>
				<label>Pilih Bidang</label>
			</div>
			<div class="input-field col s12">
				<select id="jurusan" disabled="disabled" name="id_jurusan">
					<option value="" disabled selected>Pilih</option>
					
				</select>
				<label>Pilih jurusan</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="nama_jasa" class="validate" onKeyPress="return angkadanhuruf(event,'qwertyuiopasdfghjklzxcvbnm ',this)" required>
				<label>Tambah Keahlian</label>
			</div>
			<button type="submit" name="add" class="btn col m6 right blue waves-effect">Tambah<i class="zmdi zmdi-plus-circle right"></i></button>
		</form>
	</div>
</div>


<?php include 'footer-admin.php' ?>

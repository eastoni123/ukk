<?php
include 'header.php';
include "../connection/config.php";
$id = $_GET['id'];
$sql = "SELECT o.*, j.nama_jurusan, oj.nama_jasa FROM `order` o INNER JOIN hal_jurusan j ON o.id_jurusan = j.id_jurusan INNER JOIN option_jurusan oj ON o.id_option = oj.id_option WHERE id_member = $id";
$query =mysql_query($sql);
?>
<div class="row">
	<img src="../dist/img/Kipli.png" class="owl-color tooltipped col m2 s6 offset-s3" data-position="top" data-delay="50" data-tooltip="Halo <?php echo $_SESSION['nama_lengkap'] ?>" >
	<table class="striped z-depth-1 bordered centered responsive-table blue darken-4 col m10 s12">
		<table class="striped z-depth-1 bordered centered responsive-table blue darken-4 col m10">
			<thead class="white-text">
				<tr>
					<th>Deadline</th>
					<th>Jasa</th>
					<th>Orderan</th>
					<th>Bayar via</th>
					<th>Jurusan</th>
					<th>Status</th>
				</tr>
			</thead>
			<?php 
			while ($data = mysql_fetch_array($query)) {
				?>
				<tr class="white ">
					<td><?php echo $data['tgl_ambil'] ?></td>
					<td><?php echo $data['nama_jasa'] ?></td>
					<td><?php echo $data['orderan'] ?></td>
					<td><?php echo $data['bayar'] ?></td>
					<td><?php echo $data['nama_jurusan'] ?></td>
					<td>
						<?php
						if($data['status'] == 1){
							?>
							<a href=""><i class="zmdi zmdi-check green-text" style="font-size: 30px"></i></a>
							<?php
						}else{
							?>
							<a href=""><i class="zmdi zmdi-close red-text" style="font-size: 30px"></i></a>
							<?php
						}

						?>
					</td>
				</tr>
				<?php 
			}
			?>
		</table>
	</div>

	<?php 
	include 'footer-admin.php' ?>


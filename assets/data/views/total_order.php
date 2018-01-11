<?php
include 'header.php';
include "../connection/config.php";
$sql = "SELECT `order`.*, oj.nama_jasa as jasa, m.email, m.password, m.nama, hal_jurusan.nama_jurusan as namjur FROM `order` INNER JOIN hal_jurusan ON `order`.`id_jurusan` = hal_jurusan.id_jurusan INNER JOIN bidang ON hal_jurusan.kategori = bidang.id_bidang INNER JOIN option_jurusan oj ON oj.id_option = `order`.id_option INNER JOIN member m ON m.id_member = `order`.`id_member` ORDER BY `order`.id_order DESC";
$query =mysql_query($sql);
?>

<div class="row">
	<img src="../dist/img/Kipli.png" class="owl-color tooltipped col m2 s6 offset-s3" data-position="top" data-delay="50" data-tooltip="Halo <?php echo $_SESSION['nama_lengkap'] ?>" >
	<table class="striped z-depth-1 bordered centered responsive-table blue darken-4 col m10">
		<table class="striped z-depth-1 bordered centered responsive-table blue darken-4 col m10">
			<thead class="white-text">
				<tr>
					<th>Nama</th>
					<th>Jasa</th>
					<th>Deadline</th>
				</tr>
			</thead>
			<?php 
			while ($data = mysql_fetch_array($query)) {
				?>
				<tr class="white ">
					<td><?php echo $data['nama'] ?></td>
					<td><?php echo $data['jasa'] ?></td>
					<td><?php echo $data['tgl_ambil'] ?></td>
				</tr>
				<?php 
			}
			?>
		</table>
	</div>

	<?php 
	include 'footer-admin.php' ?>

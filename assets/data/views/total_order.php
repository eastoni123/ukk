<?php
include 'header.php';
include "../connection/config.php";
$sql = "SELECT `order`.*, oj.nama_jasa as jasa, m.email, m.password, m.nama, hal_jurusan.nama_jurusan as namjur FROM `order` INNER JOIN hal_jurusan ON `order`.`id_jurusan` = hal_jurusan.id_jurusan INNER JOIN bidang ON hal_jurusan.kategori = bidang.id_bidang INNER JOIN option_jurusan oj ON oj.id_option = `order`.id_option INNER JOIN member m ON m.id_member = `order`.`id_member` ORDER BY m.nama ASC";
$query =mysql_query($sql);
?>

<div class="row">
	<table class="striped z-depth-1 bordered centered responsive-table blue darken-4 col m10">
		<table class="striped z-depth-1 bordered centered responsive-table blue darken-4 col m10">
			<thead class="white-text">
				<tr>
					<th>Nama</th>
					<th>Jasa</th>
					<th>Tanggal</th>
				</tr>
			</thead>
			<?php 
			while ($data = mysql_fetch_array($query)) {
				?>
				<tr class="white ">
					<td><?php echo $data['nama'] ?></td>
					<td><?php echo $data['jasa'] ?></td>
					<td><?php echo $data['tgl'] ?></td>
				</tr>
				<?php 
			}
			?>
		</table>
	</div>

	<?php 
	include 'footer-admin.php' ?>

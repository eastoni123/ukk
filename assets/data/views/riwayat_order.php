<?php
include 'header_member.php';
include "../connection/config.php";
$id = $_SESSION['id_member'];
$sql = "SELECT o.*, j.nama_jurusan, oj.nama_jasa FROM `order` o INNER JOIN hal_jurusan j ON o.id_jurusan = j.id_jurusan INNER JOIN option_jurusan oj ON o.id_option = oj.id_option WHERE id_member = $id";
$query =mysql_query($sql);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper row">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<span class="fa-stack fa-lg fa-2x">
				<i class="fa fa-stack-2x fa-circle" style="color: #1565c0;"></i>
				<i class="fa fa-stack-1x fa-history white-text"></i>
			</span>
			Riwayat Order
		</h1>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Info boxes -->
		<table class="striped z-depth-1 bordered centered responsive-table blue darken-4 col m10">
			<thead class="white-text">
				<tr>
					<th>Deadline</th>
					<th>Jasa</th>
					<th>Orderan</th>
					<th>Bayar via</th>
					<th>Jurusan</th>
					<th>Bukti</th>
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
					<td><a class="btn blue darken-4" href="hal_upload.php?id=<?php echo $data['id_order'] ?>">Upload</a></td>
					<td>
						<?php
						if($data['status'] == 1){
							?>
							<a href=""><i class="fa fa-check fa-2x green-text"></i></a>
							<?php
						}else{
							?>
							<a href=""><i class="fa fa-close fa-2x red-text"></i></a>
							<?php
						}

						?>
					</td>
				</tr>
				<?php 
			}
			?>
		</table>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php 
include 'footer.php';
include 'footer-member.php';
 ?>


<?php
include 'header.php';
include "../connection/config.php";
$id = $_GET['id'];
$sql = "SELECT o.*, j.nama_jurusan, oj.nama_jasa FROM `order` o INNER JOIN hal_jurusan j ON o.id_jurusan = j.id_jurusan INNER JOIN option_jurusan oj ON o.id_option = oj.id_option WHERE id_member = $id";
$query =mysql_query($sql);
?>
<div class="row">
	<?php while ($data = mysql_fetch_array($query)) 
	{
		?>
		<div class="col m3 s12 white z-depth-2" style="padding: 0px !important">
			<div id="map" class="col m12 s12" style="height: 180px !important;padding: 0px !important;" lat="<?php echo $data['lat'] ?>" lng="<?php echo $data['long'] ?>">
				<p class="col m6 s6 center-align red white-text" style="padding: 5px;margin-top: 0px"><?php echo $data['tgl'] ?></p>
			</div>
			<p class="col m12 s12"><i class="zmdi zmdi-shopping-cart"></i>&nbsp;<?php echo $data['nama_jasa'] ?> | <a href="">Detail</a></p>
			<p class="col m12 s12"><i class="zmdi zmdi-map"></i>&nbsp;<?php echo $data['alamat'] ?></p>
			<p class="col m12 s12"><i class="zmdi zmdi-settings"></i>&nbsp;<?php echo $data['nama_jurusan'] ?></p>
			<p class="col m12 s12"><i class="zmdi zmdi-money"></i>&nbsp;<?php echo $data['bayar'] ?></p>
		</div>
		<?php 
	}
	?>
</div>

<script>
	function initMap() {
		$('#map').each(function () {
			let $this = $(this);
			let lat = parseFloat($this.attr('lat'));
			let lng = parseFloat($this.attr('lng'));

			let location = {lat : lat, lng: lng};

			let map = new google.maps.Map(document.getElementById($this.attr('id')), {
				center: location,
				zoom: 15
			});

			let marker = new google.maps.Marker({
				position: location,
				map: map,
				icon : '../../component/img/marker.png',
			});
		});
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9YAiRW38Sw4WMlwgroDcCP9e8DI3GuXE&libraries=places&callback=initMap"
async defer></script>
<?php 
include 'footer-admin.php' ?>


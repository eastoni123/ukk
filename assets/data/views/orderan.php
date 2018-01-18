<?php
include 'header.php';
include "../connection/config.php";
$id = $_GET['id'];
$sql = "SELECT o.*, j.nama_jurusan, oj.nama_jasa FROM `order` o INNER JOIN hal_jurusan j ON o.id_jurusan = j.id_jurusan INNER JOIN option_jurusan oj ON o.id_option = oj.id_option WHERE id_member = $id ORDER BY o.tgl ASC";
$query =mysql_query($sql);
?>
<div class="row">
	<?php while ($data = mysql_fetch_array($query)) 
	{
		?>
		<div class="kartu col m3 offset-m1 s12 white z-depth-2" style="padding: 0px !important;margin-top: 20px">
			<p class="col m12 s12 center-align red white-text" style="padding: 5px;margin-top: 0px !important"><?php echo $data['tgl'] ?></p>
			<div id="map<?php echo $data['id_order'] ?>" class="col m12 s12 z-depth-1 map" style="height: 200px !important;padding: 0px !important;" lat="<?php echo $data['lat'] ?>" lng="<?php echo $data['long'] ?>">
			</div>
			<div class="col m12 s12 center-align white-text" style="padding: 0px !important"> 
				<?php
				if($data['status'] == 1){
					?>
					<p class="col m12 s12 green center-align" style="padding: 5px;">LUNAS</p>
					<?php
				}else{
					?>
					<p class="col m12 s12 red center-align" style="padding: 5px;">BELUM LUNAS</p>
					<?php
				}

				?>
			</div>
			<p class="col m12 s12"><i class="zmdi zmdi-shopping-cart"></i>&nbsp;<?php echo $data['nama_jasa'] ?> | <a href="#modaldet" class="view-det" jasa="<?php echo $data['nama_jasa'] ?>" det="<?php echo $data['orderan'] ?>">Detail</a></p>
			<p class="col m12 s12"><i class="zmdi zmdi-map"></i>&nbsp;<?php echo $data['alamat'] ?></p>
			<p class="col m12 s12"><i class="zmdi zmdi-settings"></i>&nbsp;<?php echo $data['nama_jurusan'] ?></p>
			<p class="col m12 s12"><i class="zmdi zmdi-money"></i>&nbsp;<?php echo $data['bayar'] ?></p>
		</div>
		<?php 
	}
	?>
</div>
<div id="modaldet" class="modal">
	<div class="modal-content">
		<h4 class="col m12 s12 blue white-text" style="font-family: roboto light">Detail Order</h4>
		<p class="jasa col m12 s12" style="font-weight: bold;font-size: 20px"></p>
		<p class="det col m12 s12"></p>
	</div>
</div>
<script>
	function initMap() {
		$('.kartu .map').each(function () {
			var $this = $(this);
			var lat = parseFloat($this.attr('lat'));
			var lng = parseFloat($this.attr('lng'));

			var location = {lat : lat, lng: lng};

			var map = new google.maps.Map(document.getElementById($this.attr('id')), {
				center: location,
				zoom: 15
			});

			var marker = new google.maps.Marker({
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


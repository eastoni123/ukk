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
		while ($data = mysql_fetch_array($query)) 
		{
			?>

			<form class="col m6 offset-m3 white s12 z-depth-3" method="post" action="../proccess/proses_order.php" style="padding-bottom: 10px;padding-top: 0px; margin-top: 2%;">
				<div class="blue  white-text center" style="padding:1px"><img class="brand-logo" src="../../component/img/logo.png" style="height: 40px; margin-top: 5px;"></div>
				<h5 class="center">Order</h5>
				<h6 class="center">"<?php echo $data['nama_jurusan']; ?>"</h6>
				<hr class="col m4 offset-m4 s4 offset-s4 blue lighten-3">
				<input id="idm" type="hidden" class="validate" name="id_member" value="<?php echo $_SESSION['id_member'] ;?>" >
				<div class="input-field col s12 m12">
					<input id="alamat" type="text" class="validate" name="alamat" required>
					<label for="alamat"><i class="zmdi zmdi-map"></i> Tujuan Pengiriman Hasil</label>
				</div>
				<input type="hidden" class="validate" name="lat" id="lat">
				<input type="hidden" class="validate" name="long" id="long">
				<div id="map" class="col m12 s12 z-depth-1"></div>
				<input type="hidden" name="tgl" class="validate" value="<?php echo "" .date("d F, o") ?>">
				<div class="input-field col s12 m6">
					<select name="jasa">
						<option value="" disabled selected>Pilih</option>
						<?php while ($data = mysql_fetch_array($query2)) 
						{
							?>
							<option value="<?php echo $data['id_option'] ?>" ><?php echo $data['nama_jasa'] ?></option>
							<?php 
						}
						?>
					</select>
					<label>Jenis Jasa</label>
				</div>
				<input type="hidden" class="validate" name="id" value="<?php echo $id ?>">
				<div class="input-field col s12 m12">
					<textarea class="materialize-textarea" id="apa" name="orderan" required></textarea>
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
					<label><i class="zmdi zmdi-money"></i> Bayar via</label>
				</div>
				<a class="btn btn-flat waves-effect waves-light col m5 left s12"  onclick="goBack()">Kembali</a>
				<button type="submit" class="btn blue  waves-effect waves-light col m5 s12 right">Order <i class="zmdi zmdi-mail-send right"></i></button>
			</form>
		</div>
		<?php 
	}
	?>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php 
include 'footer-member.php' ?>

<script>  
	function initMap(){
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 10,
			center: new google.maps.LatLng(-7.791981, 110.36948959999995),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});

		var bounds = new google.maps.LatLngBounds();
		var infowindow = new google.maps.InfoWindow();
		var marker, i;


		var card = document.getElementById('pac-card');
		var input = document.getElementById('alamat');
		var types = document.getElementById('type-selector');
		var strictBounds = document.getElementById('strict-bounds-selector');

		var autocomplete = new google.maps.places.Autocomplete(input);

  // Bind the map's bounds (viewport) property to the autocomplete object,
  // so that the autocomplete requests use the current map bounds for the
  // bounds option in the request.
  autocomplete.bindTo('bounds', map);



  autocomplete.addListener('place_changed', function() {

  	var infowindow = new google.maps.InfoWindow();
  	var infowindowContent = document.getElementById('infowindow-content');
  	infowindow.setContent(infowindowContent);
  	var marker = new google.maps.Marker({
  		icon : '../../component/img/marker.png',
  		map: map,
  		anchorPoint: new google.maps.Point(0, -29)
  	});



  	marker.setVisible(true);
  	var place = autocomplete.getPlace();
  	if (!place.geometry) {
      // User entered the name of a Place that was not suggested and
      // pressed the Enter key, or the Place Details request failed.
      window.alert("No details available for input: '" + place.name + "'");
      return;
  }

  mylat = place.geometry.location.lat();
  mylong = place.geometry.location.lng();
  $("#lat").val(mylat);
  $("#long").val(mylong);

    // If the place has a geometry, then present it on a map.
    if (place.geometry.viewport) {
    	map.fitBounds(place.geometry.viewport);
    } else {
    	map.setCenter(place.geometry.location);
      map.setZoom(17);  // Why 17? Because it looks good.
  }
  marker.setPosition(place.geometry.location);
  marker.setVisible(true);


  var address = '';
  if (place.address_components) {
  	address = [
  	(place.address_components[0] && place.address_components[0].short_name || ''),
  	(place.address_components[1] && place.address_components[1].short_name || ''),
  	(place.address_components[2] && place.address_components[2].short_name || '')
  	].join(' ');
  }

  infowindowContent.children['place-icon'].src = place.icon;
  infowindowContent.children['place-name'].textContent = place.name;
  infowindowContent.children['place-address'].textContent = address;
  infowindow.open(map, marker);

});




}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9YAiRW38Sw4WMlwgroDcCP9e8DI3GuXE&libraries=places&callback=initMap"
async defer></script>

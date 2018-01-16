<?php 
include 'header.php';
include "../connection/config.php";
$id = $_GET['id'];
$sql = "SELECT `order`.*, oj.nama_jasa as jasa, m.email, m.password, m.nama, hal_jurusan.nama_jurusan as namjur FROM `order` INNER JOIN hal_jurusan ON `order`.`id_jurusan` = hal_jurusan.id_jurusan INNER JOIN bidang ON hal_jurusan.kategori = bidang.id_bidang INNER JOIN option_jurusan oj ON oj.id_option = `order`.id_option INNER JOIN member m ON m.id_member = `order`.`id_member` WHERE bidang.id_bidang = $id ORDER BY `order`.id_order DESC";
$query = mysql_query($sql);
?>


<!-- Main content -->
<!-- Info boxes -->
<div class="row">
  <img src="../dist/img/Kipli.png" class="owl-color tooltipped col m2 s6 offset-s3" data-position="top" data-delay="50" data-tooltip="Halo <?php echo $_SESSION['nama_lengkap'] ?>" >

  <?php while ($data = mysql_fetch_array($query)) 
  {
    ?>
    <div class="col m3 s12 white z-depth-2" style="padding: 0px !important">
      <div id="map" class="col m12 s12" style="height: 150px !important:" lat="<?php echo $data['lat'] ?>" lng="<?php echo $data['long'] ?>"></div>
      <p class="col m12 s12"><i class="zmdi zmdi-account"></i> &nbsp;<?php echo $data['nama'] ?></p>
      <p class="col m12 s12"><i class="zmdi zmdi-map"></i>&nbsp;<?php echo $data['alamat'] ?></p>
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


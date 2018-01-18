<?php 
include 'header.php';
include "../connection/config.php";
$id = $_GET['id'];
$sql = "SELECT `order`.*, oj.nama_jasa as jasa, m.email, m.password, m.nama, hal_jurusan.nama_jurusan as namjur FROM `order` INNER JOIN hal_jurusan ON `order`.`id_jurusan` = hal_jurusan.id_jurusan INNER JOIN bidang ON hal_jurusan.kategori = bidang.id_bidang INNER JOIN option_jurusan oj ON oj.id_option = `order`.id_option INNER JOIN member m ON m.id_member = `order`.`id_member` WHERE bidang.id_bidang = $id ORDER BY m.nama ASC";
$query = mysql_query($sql);
?>


<!-- Main content -->
<!-- Info boxes -->
<div class="row">
  <div class="col m10 s12">
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
        <p class="col m12 s12"><i class="zmdi zmdi-account"></i> &nbsp;<?php echo $data['nama'] ?></p>
        <p class="col m12 s12"><i class="zmdi zmdi-settings"></i>&nbsp;<?php echo $data['namjur'] ?></p>
        <p class="col m12 s12"><i class="zmdi zmdi-shopping-cart"></i>&nbsp;<?php echo $data['jasa'] ?> | <a href="#modaldet" class="view-det" jasa="<?php echo $data['jasa'] ?>" det="<?php echo $data['orderan'] ?>" loc="<?php echo $data['alamat'] ?>" bayar="<?php echo $data['bayar'] ?>">Detail</a></p>
      </div>
      <?php 
    }
    ?>
  </div>
  
</div>

<div id="modaldet" class="modal">
  <div class="modal-content">
    <h4 class="col m12 s12 blue white-text" style="font-family: roboto light">Detail Order</h4>
    <p class="jasa col m12 s12" style="font-weight: bold;font-size: 20px"></p>
    <p class="det col m12 s12"></p>
    <p class="col m12 s12" style="font-weight: bold;font-size: 20px">Lokasi Pengiriman</p>
    <p class="loc col m12 s12"></p>
    <p class="col m12 s12" style="font-weight: bold;font-size: 20px">Pembayaran Via</p>
    <p class="bayar col m12 s12"></p>
  </div>
</div>
<script>
 function initMap() {
  $('.kartu .map').each(function () {
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


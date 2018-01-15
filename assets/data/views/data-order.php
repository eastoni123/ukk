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
  <table class="striped z-depth-1 bordered centered responsive-table blue darken-4 col m10">
    <thead class="white-text">
      <tr>
        <th>Nama</th>
        <th>Tanggal</th>
        <th>Jasa</th>
        <th>Detail Jasa</th>
        <th>Bayar via</th>
        <th>Jurusan</th>
        <th>Bukti</th>
        <th>Aksi</th>

      </tr>
    </thead>
    <?php 
    while ($data = mysql_fetch_array($query)) {
      ?>
      <tr class="white ">
        <td><?php echo $data['nama'] ?></td>
        <td><?php echo $data['tgl'] ?></td>
        <td><?php echo $data['jasa'] ?></td>
        <td><?php echo $data['orderan'] ?></td>
        <td><?php echo $data['bayar'] ?></td>
        <td><?php echo $data['namjur'] ?></td>
        <td>
          <?php
          if($data['status'] == 1){
            ?>
            <a ><i class="zmdi zmdi-check green-text " style="font-size: 20px"></i></a>
            <?php
          }else{
            ?>
            <a ><i class="zmdi zmdi-close red-text " style="font-size: 20px"></i></a>
            <?php
          }

          ?>
        </td>
        <td><a href="../proccess/hapus-order.php?hapus=<?php echo $data['id_order']?>" class=" col m12 waves-effect waves-light btn red darken-3" onclick="Materialize.toast('Hapus Berhasil', 4000)"><i class="fa fa-trash"></i> Hapus</a></td>
      </tr>
      <?php 
    }
    ?>
  </table>  
</div>

<?php 
include 'footer-admin.php' ?>


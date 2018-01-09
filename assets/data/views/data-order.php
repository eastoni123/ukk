<?php 
include 'header.php';
include "../connection/config.php";
$id = $_GET['id'];
$sql = "SELECT `order`.*, oj.nama_jasa as jasa, m.email, m.password, m.nama, hal_jurusan.nama_jurusan as namjur FROM `order` INNER JOIN hal_jurusan ON `order`.`id_jurusan` = hal_jurusan.id_jurusan INNER JOIN bidang ON hal_jurusan.kategori = bidang.id_bidang INNER JOIN option_jurusan oj ON oj.id_option = `order`.id_option INNER JOIN member m ON m.id_member = `order`.`id_member` WHERE bidang.id_bidang = $id ORDER BY `order`.id_order DESC";
$query = mysql_query($sql);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper row">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <span class="fa-stack fa-lg fa-2x">
        <i class="fa fa-stack-2x fa-circle" style="color: #1565c0;"></i>
        <i class="fa fa-stack-1x fa-inbox white-text"></i>
      </span>
      Data Order
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->
    <img src="../dist/img/Kipli.png" class="owl-color tooltipped col m2 s6 offset-s3" data-position="top" data-delay="50" data-tooltip="Halo <?php echo $nama ?>" >
    <table class="striped z-depth-1 bordered centered responsive-table blue darken-4 col m10">
      <thead class="white-text">
        <tr>
          <th>Nama</th>
          <th>Deadline</th>
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
          <td><?php echo $data['tgl_ambil'] ?></td>
          <td><?php echo $data['jasa'] ?></td>
          <td><?php echo $data['orderan'] ?></td>
          <td><?php echo $data['bayar'] ?></td>
          <td><?php echo $data['namjur'] ?></td>
          <td>
            <?php
            if($data['status'] == 1){
              ?>
              <a ><i class="fa fa-check green-text fa-2x"></i></a>
              <?php
            }else{
              ?>
              <a ><i class="fa fa-close red-text fa-2x"></i></a>
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
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php 
include 'footer.php' ?>


<!-- jQuery 2.2.0 -->
<script src="../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script type="text/javascript" src="../../component/js/materialize.min.js"></script>
<script type="text/javascript">
 $('.tooltipped').tooltip({delay: 50});
</script>
<!-- Bootstrap 3.3.6 -->
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>

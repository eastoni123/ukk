<?php 
include 'header.php';
$sql = "SELECT * FROM `member`";
$query = mysql_query($sql);
?>

<div class="row">
  <table class="striped z-depth-1 bordered centered responsive-table blue darken-4 col m7 offset-m1">
    <thead class="white-text">
      <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Password</th>
        <th>Aksi</th>

      </tr>
    </thead>
    <?php 
    while ($data = mysql_fetch_array($query)) {
      ?>
      <tr class="white ">
        <td><?php echo $data['nama'] ?></td>
        <td><?php echo $data['email'] ?></td>
        <td><?php echo $data['password'] ?></td>
        <td>
          <a href="orderan.php?id=<?php echo $data['id_member'] ?>" class="btn blue darken-4 waves-effect waves-light col m4 offset-m2 s12">Orderan</a>
          <a href="../proccess/hapus-member.php?hapus=<?php echo $data['id_member']?>" class=" col m4 offset-m1 s12 waves-effect waves-light btn red darken-3" onclick="Materialize.toast('Hapus Berhasil', 4000)"><i class="zmdi zmdi-delete"></i> Hapus</a>
        </td>
      </tr>
      <?php 
    }
    ?>
  </table>  
</div>

<?php 
include 'footer-admin.php' ?>


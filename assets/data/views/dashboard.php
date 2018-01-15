<?php 
include 'header.php';
include "../connection/config.php";
$sql = mysql_query ("select * from admin");
$totalmember = mysql_query("SELECT COUNT(*) as total FROM member");
$totalorder = mysql_query("SELECT COUNT(*) as total FROM `order`");
?>

<div class="row">

  <div class="box-dash orange col m3 offset-m1 white-text z-depth-3" style="padding: 10px;">
    <h6 class="col m12 s12 right-align">Member</h6>
    <i class="zmdi zmdi-accounts col m2 s12 center-align" style="font-size: 100px"></i>
    <?php while ($data = mysql_fetch_array($totalmember)) 
    {
      ?>
      <p class="col m6 offset-m4 s12 center-align" style="font-size: 30px"><?php echo $data['total'] ?> Orang</p>
      <?php 
    } 
    ?>
    <a href="member.php" style="border-radius: 50px;border: 1.5px solid white !important" class="transparent btn col m6 offset-m6 s12 waves-effect waves-light">Lihat</a>
  </div>

  <div class="box-dash green col m3 offset-m1 white-text z-depth-3" style="padding: 10px;">
    <h6 class="col m12 s12 right-align">Total Orderan</h6>
    <i class="zmdi zmdi-shopping-cart col m2 s12 center-align" style="font-size: 100px"></i>
    <?php while ($data = mysql_fetch_array($totalorder)) 
    {
      ?>
      <p class="col m6 offset-m4 s12 center-align" style="font-size: 30px"><?php echo $data['total'] ?></p>
      <?php 
    } 
    ?>
    <a href="total_order.php" style="border-radius: 50px;border: 1.5px solid white !important" class="transparent btn col m6 offset-m6 s12 waves-effect waves-light">Lihat</a>
  </div>
</div>


<?php include 'footer-admin.php' ?>

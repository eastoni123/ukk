  <?php 
  include 'header.php';
  include "../connection/config.php";
  $sql = "SELECT * FROM admin";
  $query = mysql_query($sql);
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper row">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 >
        <span class="fa-stack fa-lg fa-2x">
          <i class="fa fa-stack-2x fa-circle" style="color: #1565c0;"></i>
          <i class="fa fa-stack-1x fa-user white-text"></i>
        </span>
        Data Admin
      </h1>
      <button data-target="modal-admin" class="col m2 offset-m1 blue darken-3 btn waves-effect waves-light" >Tambah Admin</button>
    </section><br>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      
      <?php
      while ($data = mysql_fetch_array($query)) {
        ?>
        <div class="col s12 m3 offset-m1 white z-depth-2" style="padding: 10px; border-bottom:5px solid #0277bd; margin-top: 25px;">
          <div class="bg-photo darken-4 center z-depth-2" style="background: url(../dist/img/<?php echo $data['foto_profil'] ?>);background-size: cover; ">
            <div id="hov" >
              <div class="avatar-admin" style="background: url(../dist/img/<?php echo $data['foto_profil'] ?>);background-size: cover; "></div>
              <h5 class="center-align col m12 s12 white-text" style="position:relative;">"<?php echo $data['username']?>"</h5>
              <button style="position:relative;" class="btn-view-delete-admin col m4 s4 offset-m1 offset-s1 transparent btn view-profile waves-effect waves-light" data-target="modal-view" nama="<?php echo $data['nama_lengkap']?>" photo="<?php echo $data['foto_profil']?>" alamat="<?php echo $data['alamat']?>" pass="<?php echo $data['password']?>">View</button>
              <a style="position: relative;" href="../proccess/hapus-admin.php?hapus=<?php echo $data['id_admin']?>" onclick="Materialize.toast('Hapus Berhasil', 4000)" class="btn-view-delete-admin btn waves-effect waves-light transparent col offset-m2 offset-s2 m4 s4">Hapus</a>
            </div>
          </div>
        </div>
        <?php
      }
      ?>
      <div id="modal-admin" class="modal white">
        <div class="modal-content">
          <h4>Tambah Admin</h4>
          <form action="../proccess/proses_upload_admin.php" method="post" enctype="multipart/form-data" style="">
            <div class="input-field col s12 m12">
              <input id="user" type="text" class="validate" name="username">
              <label for="user"><i class="fa fa-user"></i> Username</label>
            </div>
            <div class="input-field col s12 m12">
              <input id="nama" type="text" class="validate" name="nama_lengkap">
              <label for="nama"><i class="fa fa-vcard"></i> Nama Lengkap</label>
            </div>
            <div class="file-field input-field col s12 m12">
              <div class="btn blue darken-4">
                <span>Foto Profil &nbsp;<i class="fa fa-camera"></i></span>
                <input type="file" name="file">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
            <div class="input-field col s12 m12">
              <input id="alamat" type="text" class="validate" name="alamat">
              <label for="alamat"><i class="fa fa-map"></i> Alamat</label>
            </div>
            <div class="input-field col s12 m12">
              <input id="pass" type="password"  name="password">
              <label for="pass"><i class="fa fa-lock"></i> Password</label>
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn blue darken-3" name="add" value="Tambah">
            </div>
          </form>
        </div>
      </div><!--modal-->

      <div id="modal-view" class="modal white" style="z-index: 99999999999;">
        
        <div class="modal-content">
          <h4>Detail</h4>
          <table class="table striped col m12 s12" style="margin-top: 50px">
            <tr>
              <td>Nama Lengkap</td>
              <td>:</td>
              <td><p class="nama_lengkap"></p></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>:</td>
              <td><p class="alamat"></p></td>
            </tr>
            <tr>
              <td>Password</td>
              <td>:</td>
              <td><p class="password"></p></td>
            </tr>
          </table>


        </div>

      </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php 
  include 'footer.php' ?>

  <!-- jQuery 2.2.0 -->
  <script src="../../component/js/jquery.min.js"></script>
  <script type="text/javascript" src="../../component/js/materialize.min.js"></script>
  <script type="text/javascript">
    $('.modal').modal();
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $(".view-profile").click(function(){
        var nama = $(this).attr('nama');
        var foto = $(this).attr('photo');
        var alamat = $(this).attr('alamat');
        var pass = $(this).attr('pass');

        $(".nama_lengkap").text(nama);
        $(".photo-profile").attr("src","../dist/img/"+foto);
        $(".alamat").text(alamat);
        $(".password").text(pass);
      });
    });
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

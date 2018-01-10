    <?php 
    include 'header.php';
    $sql = "SELECT * FROM admin";
    $query = mysql_query($sql);
    ?>

    <div class="row">
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
    </div>
    
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


    <?php 
    include 'footer-admin.php';
    ?>

    <!-- jQuery 2.2.0 -->

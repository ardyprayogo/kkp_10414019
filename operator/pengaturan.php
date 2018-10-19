<?php
$halaman = 'pengaturan';
require ('header.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid p30">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../operator/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Pengaturan</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Operator</h1>
          <hr>
        </div>
        <div class="col-12">
          <?php
          $id_opt = $_SESSION['id_opt'];
          $query = "SELECT * FROM operator WHERE id_opt='$id_opt';";
          $hasil = mysqli_query($conn, $query);
          while($data = mysqli_fetch_array($hasil)){
          ?>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="ID" name="id_opt" required="" value="<?=$data['id_opt']?>" disabled>
              <small>ID.</small>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" name="password" required="" value="<?=$data['password']?>" disabled>
              <small>Password.</small>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nama" name="nama_opt" required="" value="<?=$data['nama_opt']?>" disabled>
              <small>Nama.</small>
            </div>
            <div class="form-group">
              <textarea class="form-control" rows="5" name="almt_opt" disabled placeholder="Alamat"><?=$data['almt_opt']?></textarea>
              <small>Alamat.</small>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Telp" name="telp_opt" required="" value="<?=$data['telp_opt']?>" disabled>
              <small>Telp.</small>
            </div>
          <?php
          }
          ?>
        </div>
      </div>

    </div>
    <!-- /.container-fluid-->
  </div>
  <!-- /.content-wrapper-->
<?php
require('footer.php');
?>
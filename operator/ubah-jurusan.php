<?php
$halaman = 'semua-jurusan';
$sub = 'jurusan';
require('header.php');
$kd_jur = $_GET['kd_jur'];
$query = "SELECT * FROM jurusan WHERE kd_jur='$kd_jur';";
$hasil = mysqli_query($conn, $query);
?>
  <div class="content-wrapper">
    <div class="container-fluid p30">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../operator/">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="../operator/semua-jurusan.php">Jurusan</a>
        </li>
        <li class="breadcrumb-item active">Ubah Jurusan</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Ubah Jurusan</h1>
          <hr>
        </div>
        <div class="col-2">
        </div>
        <div class="col-8">
          <?php
          while($data=mysqli_fetch_array($hasil)){

          ?>
          <form action="../includes/ubah/jurusan.php?kd_jur=<?=$data['kd_jur']?>" method="POST" accept-charset="utf-8">
            <legend>Ubah Jurusan</legend>
            <hr>
          <div class="form-group">
            <input type="text" class="form-control" name="kd_jur" placeholder="Kode Jurusan" required="" value="<?=$data['kd_jur']?>" disabled>
            <small>Kode jurusan.</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="nama_jur" placeholder="Jurusan" required="" value="<?=$data['nama_jur']?>">
            <small>Nama jurusan baru.</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="kapasitas" placeholder="Kapasitas Jurusan" required="" value="<?=$data['kapasitas']?>">
            <small>Kapasitas jurusan baru.</small>
          </div>
          <br>
          <div class="form-group text-center">
            <input type="submit" class="btn btn-success" name="ubah" value="Ubah">
            <a class="btn btn-primary text-white" onclick="window.history.back()">Batal</a>
          </div>
          <br>
          </form>
          <?php
          }
          ?>
        </div>
        <div class="col-2">
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
  </div>
  <!-- /.content-wrapper-->
<?php
require('footer.php');
?>
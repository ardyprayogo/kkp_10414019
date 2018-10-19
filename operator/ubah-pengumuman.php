<?php
$halaman = 'semua-pengumuman';
$sub = 'pengumuman';
require('header.php');
$kd_peng = $_GET['kd_peng'];
$query = "SELECT * FROM pengumuman WHERE kd_peng=$kd_peng;";
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
          <a href="../operator/semua-pengumuman.php">Semua Pengumuman</a>
        </li>
        <li class="breadcrumb-item active">Ubah Pengumuman</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Ubah Pengumuman</h1>
          <hr>
        </div>
        <div class="col-2">
        </div>
        <div class="col-8">
          <?php
          while($data = mysqli_fetch_array($hasil)){
          ?>
          <form action="../includes/ubah/pengumuman.php?kd_peng=<?=$data['kd_peng']?>" method="POST" accept-charset="utf-8">
          <legend>Ubah Pengumuman</legend>
          <hr>
          <div class="form-group">
            <input type="date" class="form-control" name="tgl_peng" required="" value="<?=$data['tgl_peng']?>">
            <small>Tanggal kegiatan (DD-MMM-YYYY).</small>
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="5" name="isi" placeholder="Pengumuman"><?=$data['isi']?></textarea>
            <small>Isi pengumuman.</small>
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
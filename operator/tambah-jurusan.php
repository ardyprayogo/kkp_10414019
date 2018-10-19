<?php
$halaman = 'tambah-jurusan';
$sub = 'jurusan';
require('header.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid p30">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../operator/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tambah Jurusan</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Tambah Jurusan</h1>
          <hr>
        </div>
        <div class="col-2">
        </div>
        <div class="col-8">
          <form action="../includes/tambah/jurusan.php" method="POST" accept-charset="utf-8">
            <legend>Jurusan Baru</legend>
            <hr>
          <div class="form-group">
            <input type="text" class="form-control" name="kd_jur" placeholder="Kode Jurusan" required="">
            <small>Masukkan kode jurusan.</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="nama_jur" placeholder="Jurusan" required="">
            <small>Masukkan nama jurusan baru.</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="kapasitas" placeholder="Kapasitas Jurusan" required="">
            <small>Masukkan kapasitas jurusan baru.</small>
          </div>
          <br>
          <div class="form-group">
            <input type="submit" class="btn btn-primary form-control" name="tambah" value="Tambah">
          </div>
          <br>
          </form>
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
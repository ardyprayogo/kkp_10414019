<?php
$halaman = 'tambah-nilai';
$sub = 'nilai';
require('header.php');
include('../config.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid p30">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../operator/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tambah Nilai</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Tambah Nilai</h1>
          <hr>
        </div>
        <div class="col-2">
        </div>
        <div class="col-8">
          <form action="../includes/tambah/nilai.php" method="POST" accept-charset="utf-8">
          <legend>Nilai Peserta Baru</legend>
          <hr>
          <div class="form-group">
            <input type="text" class="form-control" name="nisn" placeholder="NISN Peserta" required="" autocomplete="off">
            <small>Masukkan NISN peserta.</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="n_bind" placeholder="Nilai Bahasa Indonesia" required="" autocomplete="off">
            <small>Nilai Bahasa Indonesia dari ujian masuk (00-100).</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="n_bing" placeholder="Nilai Bahasa Inggris" required="" autocomplete="off"> 
            <small>Nilai Bahasa Inggris dari ujian masuk (00-100).</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="n_mat" placeholder="Nilai Matematika" required="" autocomplete="off">
            <small>Nilai Matematika dari ujian masuk (00-100).</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="n_ipa" placeholder="Nilai IPA" required="" autocomplete="off">
            <small>Nilai IPA dari ujian masuk (00-100).</small>
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
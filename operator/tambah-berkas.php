<?php
$halaman = 'tambah-berkas';
$sub = 'verifikasi';
require('header.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid p30">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../operator/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tambah Berkas</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Tambah Berkas</h1>
          <hr>
        </div>
        <div class="col-2">
        </div>
        <div class="col-8">
          <form action="../includes/tambah/berkas.php" method="POST" accept-charset="utf-8">
          <legend>Data Daftar Ulang Baru</legend>
          <hr>
          <div class="form-group">
            <input type="text" class="form-control" name="nisn" placeholder="NISN Peserta" required="">
            <small>Masukkan NISN peserta.</small>
          </div>
          <div class="form-group">
            <input type="file" name="akte" required="">
            <small>Akte Peserta.</small>
          </div>
          <div class="form-group">
            <input type="file" name="ktp_ayah">
            <small>Masukkan KTP Ayah.</small>
          </div>
          <div class="form-group">
            <input type="file" name="ktp_ibu">
            <small>Masukkan KTP Ibu.</small>
          </div>
          <div class="form-group">
            <input type="file" name="ijazah" required="">
            <small>Masukkan Ijazah peserta.</small>
          </div>
          <div class="form-group">
            <input type="file" name="skhun" required="">
            <small>Masukkan SKHUN peserta.</small>
          </div>
          <div class="form-group">
            <input type="file" name="bkt_pemb" required="">
            <small>Masukkan bukti pembayaran.</small>
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
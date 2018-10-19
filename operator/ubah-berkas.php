<?php
$halaman = 'tambah-berkas';
$sub = 'verifikasi';
require('header.php');
$kd_dftrulg = $_GET['kd_dftrulg'];
$query = "SELECT * FROM daftar_ulang WHERE kd_dftrulg=$kd_dftrulg;";
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
          <a href="../operator/semua-berkas-peserta.php">Daftar Ulang</a>
        </li>
        <li class="breadcrumb-item active">Ubah Berkas</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Ubah Berkas</h1>
          <hr>
        </div>
        <div class="col-2">
        </div>
        <div class="col-8">
          <?php
          while($data = mysqli_fetch_array($hasil)){
          ?>
          <form action="../includes/ubah/berkas.php?kd_dftrulg=<?=$data['kd_dftrulg']?>" method="POST" accept-charset="utf-8">
          <legend>Data Daftar Ulang Baru</legend>
          <hr>
          <div class="form-group">
            <input type="text" class="form-control" name="nisn" placeholder="NISN Peserta" required="" value="<?=$data['nisn']?>" disabled>
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
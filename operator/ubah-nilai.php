<?php
$halaman = 'semua-nilai';
$sub = 'nilai';
require('header.php');
include('../config.php');
$kd_nilai = $_GET['kd_nilai'];
$query = "SELECT peserta.nisn, peserta.nama, nilai.id_opt, nilai.n_bind, nilai.n_bing, nilai.n_mat, nilai.n_ipa, nilai.kd_nilai
          FROM peserta
          JOIN nilai ON peserta.nisn=nilai.nisn
          WHERE nilai.kd_nilai=$kd_nilai;";
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
          <a href="../operator/semua-nilai.php">Semua Nilai</a>
        </li>
        <li class="breadcrumb-item active">Ubah Nilai</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Ubah Nilai</h1>
          <hr>
        </div>
        <div class="col-2">
        </div>
        <div class="col-8">
          <?php
          while($data = mysqli_fetch_array($hasil)){

          ?>
          <form action="../includes/ubah/nilai.php?kd_nilai=<?=$data['kd_nilai']?>" method="POST" accept-charset="utf-8">
          <legend>Ubah Nilai Peserta</legend>
          <hr>
          <div class="form-group">
            <input type="text" class="form-control" name="nisn" placeholder="NISN Peserta" required="" disabled="" value="<?=$data['nisn']?>">
            <small>NISN peserta.</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="n_bind" placeholder="Nilai Bahasa Indonesia" required="" autocomplete="off" value="<?=$data['n_bind']?>">
            <small>Nilai Bahasa Indonesia dari ujian masuk (00-100).</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="n_bing" placeholder="Nilai Bahasa Inggris" required="" autocomplete="off" value="<?=$data['n_bing']?>"> 
            <small>Nilai Bahasa Inggris dari ujian masuk (00-100).</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="n_mat" placeholder="Nilai Matematika" required="" autocomplete="off" value="<?=$data['n_mat']?>">
            <small>Nilai Matematika dari ujian masuk (00-100).</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="n_ipa" placeholder="Nilai IPA" required="" autocomplete="off" value="<?=$data['n_ipa']?>">
            <small>Nilai IPA dari ujian masuk (00-100).</small>
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
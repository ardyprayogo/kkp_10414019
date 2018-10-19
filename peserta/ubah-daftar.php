<?php
$halaman = 'daftar-ulang';
require ('header.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid p30">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../peserta/">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="../peserta/daftar-ulang.php">Daftar Ulang</a>
        </li>
        <li class="breadcrumb-item active">Ubah</li>
      </ol>

      <div class="row">
        <div class="col-12">
          <h4 class="my-5 text-center">Ubah Data Daftar Ulang</h4>
        </div>
        <div class="col-2">
        </div>
          <div class="col-8 card my-5">    
            <form action="ubah-daftar-ulang.php" method="POST">
              <h5 class="my-5">Form Daftar Ulang</h5>
              <div class="form-group">
                <label for="akte">Pilih Akte :</label>
                <br>
                <input type="file" name="akte" id="akte" required="">
              </div>
              <div class="form-group">
                <label for="ktp_ayah">Pilih KTP Ayah :</label>
                <br>
                <input type="file" name="ktp_ayah" id="ktp_ayah" required="">
              </div>
              <div class="form-group">
                <label for="ktp_ibu">Pilih KTP Ibu :</label>
                <br>
                <input type="file" name="ktp_ibu" id="ktp_ibu" required="">
              </div>
              <div class="form-group">
                <label for="ijazah">Pilih Ijazah :</label>
                <br>
                <input type="file" name="ijazah" id="ijazah" required="">
              </div>
              <div class="form-group">
                <label for="skhun">Pilih SKHUN :</label>
                <br>
                <input type="file" name="skhun" id="skhun" required="">
              </div>
              <div class="form-group">
                <label for="bkt_pemb">Pilih Bukti Pembayaran :</label>
                <br>
                <input type="file" name="bkt_pemb" id="bkt_pemb" required="">
              </div>
              <div class="form-group my-5 text-center">
                <button type="submit" class="btn btn-primary" name="upload">Upload</button>
                <button class="btn btn-success" onclick="window.history.back()">Batal</button>
              </div>
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
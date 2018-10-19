<?php
$halaman = 'semua-peserta';
$sub = 'peserta';
require('header.php');
$nisn = $_GET['nisn'];
$query = "SELECT peserta.nisn, peserta.nama, peserta.tmpt_lhr, peserta.tgl_lhr, peserta.alamat, peserta.jk, peserta.foto, peserta.telp, 
          peserta.agama, peserta.sklh_asal, peserta.nama_orgtua, peserta.pekerjaan, peserta.telp_ot, pilih.kd_jur 
          FROM peserta 
          JOIN pilih ON peserta.nisn = pilih.nisn
          WHERE peserta.nisn=$nisn;";
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
          <a href="../operator/semua-peserta.php">Daftar Peserta</a></li>
        <li class="breadcrumb-item active">Ubah Peserta</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Ubah Peserta</h1>
          <hr>
        </div>
        <div class="col-2">
        </div>
        <div class="col-8">
          <?php
            while($data = mysqli_fetch_array($hasil))
            {
            ?>
          <form action="../includes/ubah/peserta.php?nisn=<?=$data['nisn']?>" method="POST" accept-charset="utf-8">   
          <legend>Data Peserta</legend>
          <hr>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nama Peserta" name="nama" required="" value="<?=$data['nama']?>">
            <small>Nama peserta.</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="NISN" name="nisn" minlength="10" value="<?=$data['nisn']?>" disabled>
            <small>NISN.</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Tempat Lahir" name="tmpt_lhr" required="" value="<?=$data['tmpt_lhr']?>">
            <small>Tempat lahir.</small>
          </div>
          <div class="form-group">
            <input type="date" class="form-control" name="tgl_lhr" required="" value="<?=$data['tgl_lhr']?>">
            <small>Tanggal lahir peserta (DD-MMM-YYYY).</small>
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="4" name="alamat"><?=$data['alamat']?></textarea>
            <small>Alamat lengkap peserta.</small>
          </div>
          <div class="form-group">
            <?php

            ?>
            <label class="radio-inline"><input type="radio" name="jk" value="l"
              <?php
              if($data['jk']=='l'){
                echo "checked";
              }
              ?>
              >Laki-laki</label>
            <label class="radio-inline"><input type="radio" name="jk" value="p"
              <?php
              if($data['jk']=='p'){
                echo "checked";
              }
              ?>
              >Perempuan</label>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="No. Telp" name="telp" required="" value="<?=$data['telp']?>">
            <small>Masukkan nomor telepon yang bisa dihubungi.</small>
          </div>
          <div class="form-group">
            <select name="agama" class="form-control" required="">
              <option value="islam" 
              <?php
              if($data['agama']=='islam'){
                echo "selected";
              }
              ?>
              >Islam</option>
              <option value="katolik"
              <?php
              if($data['agama']=='katolik'){
                echo "selected";
              }
              ?>
              >Katolik</option>
              <option value="protestan"
              <?php
              if($data['agama']=='protestan'){
                echo "selected";
              }
              ?>
              >Protestan</option>
              <option value="hindu"
              <?php
              if($data['agama']=='hindu'){
                echo "selected";
              }
              ?>
              >Hindu</option>
              <option value="budha"
              <?php
              if($data['agama']=='budha'){
                echo "selected";
              }
              ?>
              >Budha</option>
              <option value="lain"
              <?php
              if($data['agama']=='lain'){
                echo "selected";
              }
              ?>
              >Lain</option>
            </select>
            <small>Pilih agama peserta.</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="sklh_asal" placeholder="Sekolah Asal" required="" value="<?=$data['sklh_asal']?>">
            <small>Sekolah asal peserta.</small>
          </div>
          <legend>Pilih Jurusan</legend>
          <hr>
          <div class="form-group">
            <select name="kd_jur" class="form-control" required="">
              <option value="ap"
              <?php
              if($data['kd_jur']=='ap'){
                echo "selected";
              }
              ?>
              >Administrasi Perkantoran</option>
              <option value="ak"
              <?php
              if($data['kd_jur']=='ak'){
                echo "selected";
              }
              ?>
              >Akuntansi</option>
              <option value="pm"
              <?php
              if($data['kd_jur']=='pm'){
                echo "selected";
              }
              ?>
              >Pemasaran</option>
            </select>
            <small>Pilihan dapat diganti sebelum hasil seleksi final keluar.</small>
          </div>
          <legend>Data Orang Tua</legend>
          <hr>
          <div class="form-group">
            <input type="text" class="form-control" name="nama_orgtua" placeholder="Nama Orang Tua" required="" value="<?=$data['nama_orgtua']?>">
            <small>Nama lengkap orang tua.</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan" required="" value="<?=$data['pekerjaan']?>"></input>
            <small>Pekerjaan orang tua.</small>
          </div>
          <div class="form-group">
            <input type="text" name="telp_ot" class="form-control" placeholder="No. Telp" required="" value="<?=$data['telp_ot']?>">
            <small>Nomor telepon orang tua.</small>
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
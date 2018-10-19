<?php
$halaman = 'biodata';
require ('header.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid p30">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../peserta/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Biodata</li>
      </ol>

      <?php
      $query = "SELECT peserta.nisn, peserta.nama, peserta.foto, peserta.tmpt_lhr, peserta.tgl_lhr, peserta.alamat, peserta.telp,
                peserta.sklh_asal, peserta.nama_orgtua, peserta.pekerjaan, peserta.telp_ot, pilih.kd_jur 
                FROM peserta
                JOIN pilih ON peserta.nisn = pilih.nisn
                WHERE peserta.nisn = $nisn;";
      $hasil = mysqli_query($conn, $query);
      while($data = mysqli_fetch_array($hasil)){
      ?>
      <div class="row">
        <div class="col-12">
          <h4 class="my-5 text-center">Biodata</h4>
        </div>
        <div class="col-1"></div>
        <div class="col-10">
          <div class="form-group text-center">
            <img src="<?=$data['foto']?>" width="130" height="200" class="mb-5"></img>
          </div>
          <legend>Data Peserta</legend>
          <form action="ubah-biodata.php" method="POST">
            <div class="form-group">
              <input type="text" class="form-control" name="nama" value="<?=$data['nama']?>" required>
              <small class="form-text text-muted">Nama Lengkap</small>
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="tmpt_lhr" value="<?=$data['tmpt_lhr']?>" required>
              <small class="form-text text-muted">Tempat Lahir</small>
            </div>
            <div class="form-group">
              <input class="form-control" type="date" name="tgl_lhr" value="<?=$data['tgl_lhr']?>" required>
              <small class="form-text text-muted">Tanggal Lahir</small>
            </div>
            <div class="form-group">
              <textarea class="form-control" rows="4" name="alamat" required><?=$data['alamat']?></textarea>
              <small class="form-text text-muted">Alamat Lengkap</small>
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="telp" value="<?=$data['telp']?>" required>
              <small class="form-text text-muted">Nomor Telepon</small>
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="sklh_asal" value="<?=$data['sklh_asal']?>" required>
              <small class="form-text text-muted">Sekolah Asal</small>
            </div>
            <legend>Ubah Jurusan</legend>
            <div class="form-group">
              <select name="kd_jur" class="custom-select form-control" required>
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
            </div>
            <legend>Data Orang Tua</legend>
            <div class="form-group">
              <input class="form-control" type="text" name="nama_orgtua" value="<?=$data['nama_orgtua']?>" required>
              <small class="form-text text-muted">Nama Orang Tua</small>
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="pekerjaan" value="<?=$data['pekerjaan']?>" required>
              <small class="form-text text-muted">Pekerjaan</small>
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="telp_ot" value="<?=$data['telp_ot']?>" required>
              <small class="form-text text-muted">Telp. Orang Tua</small>
            </div>
            <div class="form-group text-center my-5">
              <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
              <a class="btn btn-secondary text-white" onclick="window.location.href='../peserta/'">Batal</a>
            </div>
          </form>
        </div>
          
        <div class="col-1"></div>
      </div>
      <?php
      }
      ?>
    </div>
    <!-- /.container-fluid-->
  </div>
  <!-- /.content-wrapper-->
<?php
require('footer.php');
?>
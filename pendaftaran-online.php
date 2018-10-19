<?php
$halaman = 'pendaftaran';
require('header.php');
?>
<!-- content -->
<div class="container">
  <br>
  <hr>
  <h1 class="display-4 text-center">
    Pendaftaran Online
  </h1>
  <hr>
  <br>
  <div class="alert alert-dismissible alert-warning">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4>Perhatian !</h4>
    <p>Harap isi sesuai dengan data asli.</p>
  </div>
  <form action="includes/pendaftaran-berhasil.php" method="POST" accept-charset="utf-8">
    <fieldset>
      <legend>Data Peserta</legend>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Nama Peserta" required="" name="nama">            
        <small class="form-text text-muted">Masukkan nama lengkap sesuai dengan data asli.</small>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="NISN" required="" name="nisn" minlength="10">
        <small class="form-text text-muted">Digunakan untuk login website | NISN tidak dapat diubah.</small>
      </div>
      <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" required="" name="password">
        <small class="form-text text-muted">Password untuk login website.</small>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Tempat Lahir" required="" name="tmpt_lhr">
        <small class="form-text text-muted">Masukkan sesuai data asli.</small>
      </div>
      <div class="form-group">
        <input type="date" class="form-control" required="" name="tgl_lhr" required="">
        <small class="form-text text-muted">Tanggal lahir peserta (DD-MMM-YYYY).</small>
      </div>
      <div class="form-group">
        <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat"></textarea>
        <small class="form-text text-muted">Alamat lengkap peserta.</small>
      </div>
      <fieldset class="form-group">
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" name="jk" value="l" checked="">
            Laki-laki
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" name="jk" value="p">
            Perempuan
          </label>
        </div>
        <small class="form-text text-muted">Jenis kelamin.</small>
      </fieldset>
      <div class="form-group">
        <input type="file" class="form-control-file" name="foto">
        <small class="form-text text-muted">Pilih foto Anda.</small>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="No. Telp" name="telp" required="">
        <small class="form-text text-muted">Masukkan nomor telepon yang bisa dihubungi.</small>
      </div>
      <div class="form-group">
        <select class="form-control" name="agama" required="">
          <option value="" selected="" hidden="" disabled="">Agama</option>
          <option value="islam">Islam</option>
          <option value="katolik">Katolik</option>
          <option value="protestan">Protestan</option>
          <option value="hindu">Hindu</option>
          <option value="budha">Budha</option>
          <option value="lain">Lain</option>
        </select>
        <small class="form-text text-muted">Pilih agama peserta.</small>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Sekolah Asal" name="sklh_asal" required="">
        <small class="form-text text-muted">Sekolah asal peserta.</small>
      </div>
      <legend>Pilih Jurusan</legend>
      <div class="form-group">
        <select class="form-control" name="kd_jur" required="">
          <option value="" hidden="" selected="" disabled="">Jurusan</option>
          <option value="ap">Administrasi Perkantoran</option>
          <option value="ak">Akuntansi</option>
          <option value="pm">Pemasaran</option>
        </select>
        <small class="form-text text-muted">Pilihan dapat diganti sebelum hasil seleksi final keluar.</small>
      </div>
      <legend>Data Orang Tua</legend>
      <div class="form-group">
        <input type="text" class="form-control" name="nama_orgtua" placeholder="Nama Orang Tua" required="">
        <small class="form-text text-muted">Nama lengkap orang tua.</small>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan" required=""></input>
        <small class="form-text text-muted">Pekerjaan orang tua.</small>
      </div>
      <div class="form-group">
        <input type="text" name="telp_ot" class="form-control" placeholder="No. Telp" required="">
        <small class="form-text text-muted">Nomor telepon orang tua.</small>
      </div>
      
      <div class="form-group">
        <div class="row">
          <div class="col">
          </div>
          <div class="col">
            <br>
              <div class="form-check text-center">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" required="">
                  Data diatas Saya isi dengan sebenarnya.
                </label>
              </div>
            <br>
            <input type="submit" class="btn btn-primary form-control" name="daftar" value="Daftar">
          </div>
          <div class="col">
          </div>
        </div>
      </div>
    </fieldset>
  </form>
  <hr>
</div>

<!-- footer -->
<?php
require('footer.php');
?>
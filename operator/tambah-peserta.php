<?php
$halaman = 'tambah-peserta';
$sub = 'peserta';
require('header.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid p30">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../operator/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tambah Peserta</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Tambah Peserta</h1>
          <hr>
        </div>
        <div class="col-2">
        </div>
        <div class="col-8">
          <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            Harap isi sesuai dengan data asli.
          </div>
          <form action="../includes/tambah/peserta.php" method="POST" accept-charset="utf-8">
          <legend>Data Peserta</legend>
          <hr>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nama Peserta" name="nama" required="">
            <small>Masukkan sesuai data asli.</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="NISN" name="nisn" minlength="10">
            <small>Dapat digunakan untuk login website | NISN tidak dapat diubah.</small>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required="">
            <small>Password untuk login website.</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Tempat Lahir" name="tmpt_lhr" required="">
            <small>Masukkan sesuai data asli.</small>
          </div>
          <div class="form-group">
            <input type="date" class="form-control" name="tgl_lhr" required="">
            <small>Tanggal lahir peserta (DD-MMM-YYYY).</small>
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="4" name="alamat" placeholder="Alamat Lengkap Peserta"></textarea>
            <small>Alamat peserta.</small>
          </div>
          <div class="form-group">
            <label class="radio-inline"><input type="radio" name="jk" value="l" checked="">Laki-laki</label>
            <small> </small>
            <label class="radio-inline"><input type="radio" name="jk" value="p">Perempuan</label>
          </div>
          <div class="form-group">
            <input type="file" name="foto" required="">
            <small>Pilih foto Anda.</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="No. Telp" name="telp" required="">
            <small>Masukkan nomor telepon yang bisa dihubungi.</small>
          </div>
          <div class="form-group">
            <select name="agama" class="form-control" required="">
              <option value="" disabled selected hidden>Pilih Agama</option>
              <option value="islam">Islam</option>
              <option value="katolik">Katolik</option>
              <option value="protestan">Protestan</option>
              <option value="hindu">Hindu</option>
              <option value="budha">Budha</option>
              <option value="lain">Lain</option>
            </select>
            <small>Agama peserta.</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="sklh_asal" placeholder="Sekolah Asal" required="">
            <small>Sekolah asal peserta.</small>
          </div>
          <legend>Pilih Jurusan</legend>
          <hr>
          <div class="form-group">
            <select name="kd_jur" class="form-control" required="">
              <option value="" disabled selected hidden>Pilih Jurusan</option>
              <option value="ap">Administrasi Perkantoran</option>
              <option value="ak">Akuntansi</option>
              <option value="pm">Pemasaran</option>
            </select>
            <small>Pilihan dapat diganti sebelum hasil seleksi final keluar.</small>
          </div>
          <legend>Data Orang Tua</legend>
          <hr>
          <div class="form-group">
            <input type="text" class="form-control" name="nama_orgtua" placeholder="Nama Orang Tua" required="">
            <small>Nama lengkap orang tua.</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan" required=""></input>
            <small>Pekerjaan orang tua.</small>
          </div>
          <div class="form-group">
            <input type="text" name="telp_ot" class="form-control" placeholder="No. Telp" required="">
            <small>Nomor telepon orang tua.</small>
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
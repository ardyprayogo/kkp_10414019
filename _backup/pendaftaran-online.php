<!doctype html>
<html lang="en">
  <head>
    <title>SMK Dharma Karya - Pengumuman</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="assets/dashboard/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>

  <body>
<!-- header -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation" style="">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">    
      <div class="navbar-collapse collapse show" id="navbarColor01" style="">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../kkp_10414019/">Home<span class="sr-only">(curent)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pengumuman.php">Pengumuman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="pendaftaran-online.php">Pendaftaran Online</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cara-pendaftaran.php">Cara Pendaftaran</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="login-peserta.php">Login Peserta</a>
          </li>
        </ul>
      </div>
      </div>  
    </nav>
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
      <form action="" method="" accept-charset="utf-8">
        <fieldset>
          <legend>Data Peserta</legend>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nama Peserta" required="" name="nama">            
            <small class="form-text text-muted">Masukkan nama lengkap sesuai dengan data asli.</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="NISN" required="" name="nisn" minlength="10">
            <small class="form-text text-muted">Dapat digunakan untuk login website.</small>
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
            <textarea class="form-control" rows="3"></textarea>
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
            <input type="file" class="form-control-file">
            <small class="form-text text-muted">Pilih foto Anda.</small>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="No. Telp" name="telp" required="">
            <small class="form-text text-muted">Masukkan nomor telepon yang bisa dihubungi.</small>
          </div>
          <div class="form-group">
            <select class="form-control" name="agama" required="">
              <option value=""></option>
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
            <select class="form-control" name="jurusan" required="">
              <option value=""></option>
              <option value="">Administrasi Perkantoran</option>
              <option value="">Akuntansi</option>
              <option value="">Pemasaran</option>
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
    <div class="bottom-footer container-fluid">
      <div class="row">
        <div class="col">
          <h1 class="text-center footer-logo">Sistem Informasi Penerimaan Siswa Baru</h1>
          <p class="text-center lead footer-quotes">KKP | Ardy Prayogo 10414019</p>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/bootstrap/js/jquery-3.2.1.slim.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
<?php 
$halaman = 'cara-pendaftaran';
require('header.php');
?>
<!-- content -->
    <div class="container">
      <br>
      <hr>
      <h1 class="display-4 text-center">
        Cara Pendaftaran
      </h1>
      <hr>
      <br>
      <h3 class="text-center">Timeline <br> Pendaftaran</h3>
      <ul class="timeline">
        <li>
          <div class="timeline-badge lead">1
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h2 class="timeline-title">Pendaftaran Online</h2>
            </div>
            <div class="timeline-body">
              <p class="lead">Peserta melakukan pengisian form identitas calon siswa pada halaman <a href="pendaftaran-online.php">Pendaftaran Online</a>.</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge warning lead">2
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h2 class="timeline-title">Cetak Kartu Ujian</h2>
            </div>
            <div class="timeline-body">
              <p class="lead">Peserta melakukan cetak kartu ujian yang tersedia di <a href="login-peserta.php">menu peserta</a>.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge primary lead">3
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h2 class="timeline-title">Ujian Masuk</h2>
            </div>
            <div class="timeline-body">
              <p class="lead">Peserta mengikuti ujian masuk yang diadakan pihak sekolah sesuai dengan pengumuman yang tertera di website.<br>Pelajaran yang diuji : </p>
              <ul class="list-unstyled lead">
                <ul>
                  <li>Bahasa Indonesia</li>
                  <li>Bahasa Inggris</li>
                  <li>Matematika</li>
                  <li>IPA</li>
                </ul>
              </ul>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge danger lead">4
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h2 class="timeline-title">Hasil Ujian</h2>
            </div>
            <div class="timeline-body">
              <p class="lead">Hasil dari ujian masuk digunakan untuk proses seleksi peserta.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge success lead">5
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h2 class="timeline-title">Daftar Ulang</h2>
            </div>
            <div class="timeline-body">
              <p class="lead">Peserta yang namanya tertera pada hasil seleksi final dinyatakan lulus seleksi. Diharapkan untuk daftar ulang dan melengkapi dokumen yang masih kurang serta pembayaran,<br>Daftar ulang dapat melalui :</p>
              <ul class="list-unstyled lead">
                <ul>
                  <li><a href="../peserta/daftar-ulang.php">Website</a></li>
                  <li>Sekolah</li>
                </ul>
              </ul>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge info lead">6
          </div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h2 class="timeline-title">Peserta Diterima</h2>
            </div>
            <div class="timeline-body">
              <p class="lead">Peserta yang telah melakukan daftar ulang dan pembayaran dinyatakan sah menjadi siswa baru SMK Dharma Karya.</p>
            </div>
          </div>
        </li>
      </ul>
      <br>
    </div>

<!-- footer -->
<?php 
require('footer.php');
?>
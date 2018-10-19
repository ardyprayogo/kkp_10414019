<?php
$halaman = 'home';
require('header.php'); 
?>
<!-- banner -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/img/carousel01.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/carousel02.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/carousel03.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- content -->
<div class="container">
  <br>
  <hr>
  <h1 class="display-4 text-center">
    SMK Dharma Karya
  </h1>
  <hr>
  <br>
  <p class="lead">SMK Dharma Karya Jakarta mempunyai beberapa kompetensi keahlian, dimana dalam hal ini terbagi atas 3 kompetensi dimana semua kompetensi keahlian memiliki akreditasi A sejak tahun 2009, yaitu :</p>
  <ul class="list-unstyled lead">
    <ul>
      <li>Administrasi Perkantoran</li>
      <li>Akuntansi</li>
      <li>Pemasaran</li>
    </ul>
  </ul>
  <br>
  <div class="row">
    <div class="col">
      <h2 class="text-center">Visi</h2>
      <hr>
      <p class="lead">Menjadikan Sekolah Menengah Kejuruan yang menghasilkan tamatan yang unggul. berdaya saing di dunia kerja atau berwirausaha berdasarkankan Imtek dan Imtaq.</p>
    </div>
    <div class="col">
      <h2 class="text-center">Misi</h2>
      <hr>
      <ul class="list-unstyled lead">
        <ul>
          <li>Meningkatkan kualitas organisasi dan manajemen sekolah dalam menumbuhkan semangat keunggulan dan kompetif.</li>
          <li>Meningkatkan kualitas KBM yang efektif guna mencapai kompetensi siswa 100% meraih prestasi optimal.</li>
          <li>Memperkuat kompetensi guru dan pegawai dalam mewujudkan Standar Pelayanan Minimal (SPM).</li>
          <li>Meningkatkan kuantitas dan kualitas sarana dan prasarana pendidikan dalam mendukung penguasaan IPTEK.</li>
          <li>Meningkatkan kualitas pembinaan kesiswaan dalam mewujudkan IMTAQ dan sikap kemandirian.</li>
          <li>Membangun kemitraan dengan Dunia Usaha dan Dunia Industri sesuai prinsip Demand Driven.</li>
          <li>Menggerakan pengelolaan unit produksi yang menunjang kompetensi dan kesejahteraan sekolah.</li>
          <li>Memperdayakan lingkungan sekolah dalam mewujudkan Wawasan Wiyata Mandala.</li>
          <li>Meningkatkan kerja sama dengan Komite Sekolah mendukung tercapainya tujuan pendidikan.</li>
        </ul>
      </ul>
    </div>
  </div>
</div>

<?php
require('footer.php'); 
?>
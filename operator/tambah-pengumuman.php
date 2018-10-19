<?php
$halaman = 'tambah-pengumuman';
$sub = 'pengumuman';
require('header.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid p30">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../operator/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tambah Pengumuman</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Tambah Pengumuman</h1>
          <hr>
        </div>
        <div class="col-2">
        </div>
        <div class="col-8">
          <form action="../includes/tambah/pengumuman.php" method="POST" accept-charset="utf-8">
          <legend>Pengumuman Baru</legend>
          <hr>
          <div class="form-group">
            <input type="date" class="form-control" name="tgl_peng" required="">
            <small>Tanggal kegiatan (DD-MMM-YYYY).</small>
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="5" name="isi" placeholder="Pengumuman"></textarea>
            <small>Isi pengumuman.</small>
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
<?php 
$halaman = 'semua-nilai';
$sub = 'nilai';
require('header.php');
include('../config.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid p30">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../operator/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Daftar Nilai</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Daftar Nilai</h1>
          <hr>
        </div>
        <div class="col-4">
          <form action="cari-nilai.php" method="GET">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Cari peserta..." name="cari" onchange="submit()">
            </div>
          </form>
        </div>
        
        <div class="col-4">
          <br>
          <br>
        </div>
        <div class="col-4 text-right">
          <a class="btn btn-primary" href="#" onclick="cetak()">
            <i class="fa fa-print"></i>
            <span>Cetak</span>
          </a>
        </div>
        <div class="col-12 table-responsive">
          <table class="table table-bordered text-center table-hover" width="100%" cellspacing="0">
            <thead>
              <tr>
              <th width="10%">NISN</th>
              <th>Nama</th>
              <th width="10%">Bahasa Indonesia</th>
              <th width="10%">Bahasa Inggris</th>
              <th width="10%">Matematika</th>
              <th width="10%">IPA</th>
              <th colspan="2" width="20%">Aksi</th>
              </tr>
            </thead>
            <?php
            $query = "SELECT nilai.kd_nilai, nilai.nisn, peserta.nama, peserta.nisn, nilai.n_bind, nilai.n_bing, nilai.n_mat, nilai.n_ipa
                      FROM nilai
                      JOIN peserta on nilai.nisn = peserta.nisn
                      ORDER BY peserta.nisn;";
            $hasil  = mysqli_query($conn, $query);
            while($data=mysqli_fetch_array($hasil)){
            ?>
            <tbody>
              <tr>
              <td><?=$data['nisn']?></td>
              <td><?=$data['nama']?></td>
              <td><?=$data['n_bind']?></td>
              <td><?=$data['n_bing']?></td>
              <td><?=$data['n_mat']?></td>
              <td><?=$data['n_ipa']?></td>
              <td><a href="ubah-nilai.php?kd_nilai=<?=$data['kd_nilai']?>"><i class="fa fa-pencil-square-o"></i> Ubah</a></td>
              <td><a href="../includes/hapus/nilai.php?kd_nilai=<?=$data['kd_nilai']?>"><i class="fa fa-trash-o"></i> Hapus</a></td>
              </tr>
            </tbody>
            <?php
            }
            ?>
          </table>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
  </div>
  <!-- /.content-wrapper-->
<?php
require('footer.php');
?>
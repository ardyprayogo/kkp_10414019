<?php
$halaman = 'beranda';
require ('header.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid p30">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../operator/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Beranda</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <div class="jumbotron">
            <h1 class="display-3">Selamat Datang!</h1>
            <p class="lead"><?=$_SESSION['id_opt'];?></p>
          </div>
          <hr class="my-4">
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-users"></i>
              </div>
              <div class="mr-5">
                <?php
                $queryp = "SELECT * FROM peserta;";
                $hasilp = mysqli_query($conn, $queryp);
                $totalp = mysqli_num_rows($hasilp);
                echo $totalp;
                ?>
              Peserta</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="../operator/tambah-peserta.php">
              <span class="float-left">Tambah Data Peserta</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-graduation-cap"></i>
              </div>
              <div class="mr-5">
                <?php
                $queryu = "SELECT * FROM nilai;";
                $hasilu = mysqli_query($conn, $queryu);
                $totalu = mysqli_num_rows($hasilu);
                echo $totalu;
                ?>
              Hasil Ujian Masuk</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="../operator/tambah-nilai.php">
              <span class="float-left">Input Hasil Ujian</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-file"></i>
              </div>
              <div class="mr-5">
                <?php
                $queryd = "SELECT * FROM daftar_ulang;";
                $hasild = mysqli_query($conn, $queryd);
                $totald = mysqli_num_rows($hasild);
                echo $totald;
                ?>
              Data Daftar Ulang</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="../operator/tambah-berkas.php">
              <span class="float-left">Daftar Ulang Siswa Lulus Seleksi</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-table"></i>
              </div>
              <div class="mr-5">
                <?php
                $queryf = "SELECT peserta.nisn, peserta.nama, peserta.sklh_asal, pilih.kd_jur, daftar_ulang.status, 
                      nilai.n_bind, nilai.n_bing, nilai.n_mat, nilai.n_ipa,
                      nilai.n_bind+nilai.n_bing+nilai.n_mat+nilai.n_ipa AS total
                      FROM peserta
                      JOIN daftar_ulang ON peserta.nisn=daftar_ulang.nisn
                      JOIN nilai ON peserta.nisn=nilai.nisn
                      JOIN pilih ON peserta.nisn=pilih.nisn 
                      WHERE daftar_ulang.status='sukses'
                      ORDER BY total DESC
                      LIMIT 40;";
                $hasilf = mysqli_query($conn, $queryf);
                $totalf = mysqli_num_rows($hasilf);
                echo $totalf;
                ?>
              Peserta Diterima</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="../operator/laporan.php">
              <span class="float-left">Cetak Laporan</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-12">
          <hr class="my-4">
        </div>
      </div>

    </div>
    <!-- /.container-fluid-->
  </div>
  <!-- /.content-wrapper-->
<?php
require('footer.php');
?>
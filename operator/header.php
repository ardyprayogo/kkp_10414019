<?php
include('../config.php');
session_start();
if(!isset($_SESSION['id_opt'])){
  echo "<script>
  alert('Silahkan login dulu!');
  window.location.href='../login-operator.php';
  </script>
  ";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Dashboard - Operator</title>
  <!-- Bootstrap core CSS-->
  <link href="../assets/dashboard/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../assets/dashboard/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../assets/dashboard/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="../operator/">Dashboard Operator</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        <!-- beranda -->
        <li class="nav-item
        <?php
        if ($halaman == 'beranda'){
          echo 'active';
        }
        ?>
        " data-toggle="tooltip" data-placement="right" title="Beranda">
          <a class="nav-link" href="../operator/" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Beranda</span>
          </a>
        </li>

        <!-- data peserta -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Peserta">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#datapeserta" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Peserta</span>
          </a>
          <ul class="sidenav-second-level collapse
          <?php
          if ($sub == 'peserta'){
            echo 'show';
          }
          ?>
          " id="datapeserta">

            <!-- semua peserta -->
            <li
            <?php
            if ($halaman == 'semua-peserta'){
              echo 'class="active"';
            }
            ?>
            >
              <a href="../operator/semua-peserta.php">
                <i class="fa fa-fw fa-table"></i>
                <span class="nav-link-text">Daftar Peserta</span>
              </a>
            </li>

            <!-- tambah peserta -->
            <li
            <?php
            if ($halaman == 'tambah-peserta'){
              echo 'class="active"';
            }
            ?>
            >
              <a href="../operator/tambah-peserta.php">
                <i class="fa fa-fw fa-plus"></i>
                <span class="nav-link-text">Tambah Peserta</span>
              </a>
            </li>

          </ul>
        </li>

        <!-- pengumuman -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pengumuman">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#pengumuman" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-info"></i>
            <span class="nav-link-text">Pengumuman</span>
          </a>
          <ul class="sidenav-second-level collapse
          <?php
          if ($sub == 'pengumuman'){
            echo 'show';
          }
          ?>
          " id="pengumuman">
            <!-- semua pengumuman -->
            <li
            <?php
            if ($halaman == 'semua-pengumuman'){
              echo 'class="active"';
            }
            ?>
            >
              <a href="../operator/semua-pengumuman.php">
                <i class="fa fa-fw fa-table"></i>
                <span class="nav-link-text">Pengumuman</span>
              </a>
            </li>
            <!-- tambah data pengumuman -->
            <li
            <?php
            if ($halaman == 'tambah-pengumuman'){
              echo 'class="active"';
            }
            ?>
            >
              <a href="../operator/tambah-pengumuman.php">
                <i class="fa fa-fw fa-plus"></i>
                <span class="nav-link-text">Tambah Pengumuman</span>
              </a>
            </li>
            
          </ul>
        </li>

        <!-- nilai -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Nilai">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#nilai" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-graduation-cap"></i>
            <span class="nav-link-text">Nilai</span>
          </a>
          <ul class="sidenav-second-level collapse
          <?php
          if ($sub == 'nilai'){
            echo 'show';
          }
          ?>
          " id="nilai">
            <!-- semua nilai -->
            <li
            <?php
            if ($halaman == 'semua-nilai'){
              echo 'class="active"';
            }
            ?>
            >
              <a href="../operator/semua-nilai.php">
                <i class="fa fa-fw fa-table"></i>
                <span class="nav-link-text">Daftar Nilai</span>
              </a>
            </li>
            <!-- tambah data nilai -->
            <li
            <?php
            if ($halaman == 'tambah-nilai'){
              echo 'class="active"';
            }
            ?>
            >
              <a href="../operator/tambah-nilai.php">
                <i class="fa fa-fw fa-plus"></i>
                <span class="nav-link-text">Tambah Nilai</span>
              </a>
            </li>
            
          </ul>
        </li>

        <!-- hasil seleksi -->
        <li class="nav-item
        <?php
        if ($halaman == 'hasil-seleksi'){
          echo 'active';
        }
        ?>
        " data-toggle="tooltip" data-placement="right" title="Hasil Seleksi">
          <a class="nav-link" href="../operator/hasil-seleksi.php">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Hasil Seleksi</span>
          </a>
        </li>

        <!-- verifikasi berkas -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Verifikasi Berkas">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#verifikasiberkas" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Verifikasi Berkas</span>
          </a>
          <ul class="sidenav-second-level collapse
          <?php
          if ($sub == 'verifikasi'){
            echo 'show';
          }
          ?>
          " id="verifikasiberkas">
            <!-- semua berkas peserta -->
            <li
            <?php
            if ($halaman == 'semua-berkas-peserta'){
              echo 'class="active"';
            }
            ?>
            >
              <a href="../operator/semua-berkas-peserta.php">
                <i class="fa fa-fw fa-table"></i>
                <span class="nav-link-text">Berkas Peserta</span>
              </a>
            </li>
            <!-- tambah berkas -->
            <li
            <?php
            if ($halaman == 'tambah-berkas'){
              echo 'class="active"';
            }
            ?>
            >
              <a href="../operator/tambah-berkas.php">
                <i class="fa fa-fw fa-plus"></i>
                <span class="nav-link-text">Tambah Berkas</span>
              </a>
            </li>


          </ul>
        </li>

        <!-- laporan -->
        <li class="nav-item
        <?php
        if ($halaman == 'laporan'){
          echo 'active';
        }
        ?>
        " data-toggle="tooltip" data-placement="right" title="Laporan">
          <a class="nav-link" href="../operator/laporan.php">
            <i class="fa fa-fw fa-bookmark"></i>
            <span class="nav-link-text">Laporan</span>
          </a>
        </li>

        <!-- jurusan -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Jurusan">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#jurusan" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-star"></i>
            <span class="nav-link-text">Jurusan</span>
          </a>
          <ul class="sidenav-second-level collapse
          <?php
          if ($sub == 'jurusan'){
            echo 'show';
          }
          ?>
          " id="jurusan">
            <!-- lihat data jurusan -->
            <li
            <?php
            if ($halaman == 'semua-jurusan'){
              echo 'class="active"';
            }
            ?>
            >
              <a href="../operator/semua-jurusan.php">
                <i class="fa fa-fw fa-eye"></i>
                <span class="nav-link-text">Semua Jurusan</span>
              </a>
            </li>
            <!-- tambah data jurusan -->
            <li
            <?php
            if ($halaman == 'tambah-jurusan'){
              echo 'class="active"';
            }
            ?>
            >
              <a href="../operator/tambah-jurusan.php">
                <i class="fa fa-fw fa-plus"></i>
                <span class="nav-link-text">Tambah Jurusan</span>
              </a>
            </li>

          </ul>
        </li>
        
      </ul>

      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item
        <?php
        if ($halaman == 'pengaturan'){
          echo 'active';
        }
        ?>
        ">
          <a class="nav-link" href='../operator/pengaturan.php'>
            <i class="fa fa-fw fa-user"></i><?=$_SESSION['id_opt'];?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href='../'>
            <i class="fa fa-fw fa-sign-out"></i>Keluar</a>
        </li>
      </ul>
    </div>
  </nav>
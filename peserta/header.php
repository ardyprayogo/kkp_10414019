<?php
include('../config.php');
session_start();
if(!isset($_SESSION['nisn'])){
  echo "
  <script>
  alert('Silahkan login dulu!');
  window.location.href='../login-peserta.php';
  </script>
  ";
}
$nisn = $_SESSION['nisn'];
$query = "SELECT * FROM peserta WHERE nisn=$nisn;";
$hasilheader = mysqli_query($conn, $query);
while($dataheader = mysqli_fetch_array($hasilheader)){
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Dashboard - Peserta</title>
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
    <a class="navbar-brand" href="../peserta/">Dashboard Peserta</a>
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
          <a class="nav-link" href="../peserta/" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Beranda</span>
          </a>
        </li>

        <!-- kartu ujian -->
        <li class="nav-item
        <?php
        if($halaman =='kartu-ujian'){
          echo "active";
        }
        ?>
        " data-toggle="tooltip" data-placement="right" title="Kartu Ujian">
          <a class="nav-link" href="kartu-ujian.php" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-address-book-o"></i>
            <span class="nav-link-text">Kartu Ujian</span>
          </a>
        </li>

        <!-- hasil ujian -->
        <li class="nav-item
        <?php
        if($halaman == 'hasil-ujian'){
          echo "active";
        }
        ?>
        " data-toggle="tooltip" data-placement="right" title="Hasil Ujian">
          <a class="nav-link" href="hasil-ujian.php" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-pencil"></i>
            <span class="nav-link-text">Hasil Ujian</span>
          </a>
        </li>

        <!-- hasil seleksi -->
        <li class="nav-item
        <?php
        if($halaman == 'hasil-seleksi'){
          echo "active";
        }
        ?>
        " data-toggle="tooltip" data-placement="right" title="Hasil Seleksi">
          <a class="nav-link" href="hasil-seleksi.php" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Hasil Seleksi</span>
          </a>
        </li>

        <!-- daftar ulang -->
        <li class="nav-item
        <?php
        if($halaman == 'daftar-ulang'){
          echo "active";
        }
        ?>
        " data-toggle="tooltip" data-placement="right" title="Daftar Ulang">
          <a class="nav-link" href="daftar-ulang.php" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file-text"></i>
            <span class="nav-link-text">Daftar Ulang</span>
          </a>
        </li>

        <!-- peserta diterima -->
        <li class="nav-item
        <?php
        if($halaman == 'peserta-diterima'){
          echo "active";
        }
        ?>
        " data-toggle="tooltip" data-placement="right" title="Peserta Diterima">
          <a class="nav-link" href="peserta-diterima.php" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-graduation-cap"></i>
            <span class="nav-link-text">Peserta Diterima</span>
          </a>
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
        if ($halaman == 'biodata'){
          echo 'active';
        }
        ?>
        ">
          <a class="nav-link" href='../peserta/biodata.php'>
            <i class="fa fa-fw fa-user"></i><?=$dataheader['nama'];?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href='../'>
            <i class="fa fa-fw fa-sign-out"></i>Keluar</a>
        </li>
      </ul>
    </div>
  </nav>
<?php
}
?>
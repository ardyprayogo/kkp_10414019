<!doctype html>
<html lang="en">
  <head>
    <title>SMK Dharma Karya</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Custom Bootstrap CSS -->
    <link href="assets/bootstrap/css/custom.css" rel="stylesheet">
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
      <div class="navbar-collapse collapse" id="navbarColor01" style="">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item 
          <?php
          if($halaman == 'home'){
            echo 'active';
          }
          ?>
          ">
            <a class="nav-link" href="../kkp_10414019/">Home</a>
          </li>
          <li class="nav-item 
          <?php 
          if($halaman == 'pengumuman'){
            echo 'active';
          } 
          ?>
          ">
            <a class="nav-link" href="pengumuman.php">Pengumuman</a>
          </li>
          <li class="nav-item 
          <?php 
          if($halaman == 'pendaftaran'){
            echo 'active';
          }
          ?>
          ">
            <a class="nav-link" href="pendaftaran-online.php">Pendaftaran Online</a>
          </li>
          <li class="nav-item 
          <?php
          if($halaman == 'cara-pendaftaran'){
            echo 'active';
          }
          ?>
          ">
            <a class="nav-link" href="cara-pendaftaran.php">Cara Pendaftaran</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="login-peserta.php">Login Peserta</a>
          </li>
        </ul>
      </div>
      </div>  
    </nav>
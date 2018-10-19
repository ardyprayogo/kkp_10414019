<?php
$halaman = 'beranda';
require ('header.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid p30">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../peserta/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Beranda</li>
      </ol>

      <div class="row">
        <div class="col-12">
          <div class="jumbotron">
            <h1 class="display-3">Selamat Datang!</h1>
            <p class="lead">Peserta PSB.</p>    
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
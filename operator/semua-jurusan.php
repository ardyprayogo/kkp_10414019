<?php 
$halaman = 'semua-jurusan';
$sub = 'jurusan';
require ('header.php');
include ('../config.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid p30">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../operator/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Jurusan</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Jurusan</h1>
          <hr>
        </div>
        <div class="col-4">
        </div>
        <div class="col-4">
          <br>
          <br>
        </div>
        <div class="col-4 text-right">
          <a class="btn btn-primary" href="#">
            <i class="fa fa-print"></i>
            <span>Cetak</span>
          </a>
        </div>
        <div class="col-12 table-responsive">
          <?php
          $query = "SELECT * FROM jurusan";  
          $hasil = mysqli_query($conn, $query);        
          ?>
          <table class="table table-bordered text-center table-hover" width="100%" cellspacing="0">
            <thead>
              <tr>
              <th>Kode Jurusan</th>
              <th>Jurusan</th>
              <th>Kapasitas</th>
              <th colspan="2" width="20%">Aksi</th>
              </tr>
            </thead>
            <?php
            while ($data=mysqli_fetch_array($hasil)){
            ?>
            <tbody>
              <tr>
              <td><?=$data['kd_jur'];?></td>
              <td><?=$data['nama_jur'];?></td>
              <td><?=$data['kapasitas'];?></td>
              <td><a href="ubah-jurusan.php?kd_jur=<?=$data['kd_jur']?>"><i class="fa fa-pencil-square-o"></i> Ubah</a></td>
              <td><a href="../includes/hapus/jurusan.php?kd_jur=<?=$data['kd_jur']?>"><i class="fa fa-trash-o"></i> Hapus</a></td>
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
<?php 
$halaman = 'semua-pengumuman';
$sub = 'pengumuman';
require ('header.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid p30">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../operator/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Semua Pengumuman</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Pengumuman</h1>
          <hr>
        </div>
        <div class="col-4">
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
              <th width="20%">Tanggal</th>
              <th>Pengumuman</th>
              <th colspan="2" width="20%">Aksi</th>
              </tr>
            </thead>
            <?php
            include('../config.php');
            $query = "SELECT * FROM pengumuman;";
            $hasil = mysqli_query($conn, $query);
              while($data = mysqli_fetch_array($hasil)){
                $data['kd_peng'];
            ?>
            <tbody>
              <tr>
              <td><?=date('d F Y',strtotime($data['tgl_peng']));?></td>
              <td><?=$data['isi'];?></td>
              <td><a href="ubah-pengumuman.php?kd_peng=<?=$data['kd_peng']?>"><i class="fa fa-pencil-square-o"></i> Ubah</a></td>
              <td><a href="../includes/hapus/pengumuman.php?kd_peng=<?=$data['kd_peng']?>"><i class="fa fa-trash-o"></i> Hapus</a></td>
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
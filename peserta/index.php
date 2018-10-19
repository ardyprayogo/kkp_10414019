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
      <?php
      $query = "SELECT * FROM pengumuman;";
      $hasil = mysqli_query($conn, $query);
      ?>
      <div class="row">
        <div class="col-12">
          <div class="jumbotron">
            <h1 class="display-3">Selamat Datang!</h1>
            <p class="lead"><?=$nisn?></p>    
          </div> 
        </div>
        <div class="col-12 table-responsive table-hover">
          <table class="table text-center table-bordered" width="100%">
            <thead>
              <tr>
                <th>Tanggal</th>
                <th>Pengumuman</th>
              </tr>
            </thead>
            <?php
            while($data = mysqli_fetch_array($hasil)){
            ?>
            <tbody>
              <tr>
                <td><?=date('d F Y', strtotime($data['tgl_peng']))?></td>
                <td><?=$data['isi']?></td>
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
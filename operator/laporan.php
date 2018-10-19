<?php 
$halaman = 'laporan';
require ('header.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid p30">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../operator/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Laporan</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Laporan</h1>
          <hr>
        </div>
        <div class="col-4">
          <form action="" method="GET" accept-charset="utf-8" onchange="submit()">
            <div class="form-group">
              <select name="jurusan" class="form-control custom-select" onchange="submit()">
              <option value="ap" selected hidden>Pilih Jurusan</option>
              <option value="ap"
              <?php
              if(isset($_GET['jurusan'])){
              if($_GET['jurusan']=='ap'){
                echo "selected";
              }
              }
              ?>
              >Administrasi Perkantoran</option>
              <option value="ak"
              <?php
              if(isset($_GET['jurusan'])){
              if($_GET['jurusan']=='ak'){
                echo "selected";
              }
              }
              ?>
              >Akuntansi</option>
              <option value="pm"
              <?php
              if(isset($_GET['jurusan'])){
              if($_GET['jurusan']=='pm'){
                echo "selected";
              }
              }
              ?>
              >Pemasaran</option>
            </select>
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
          <?php
          if(!isset($_GET['jurusan'])){
            echo '
            <div class="text-center mt-5 mb-5">
            <i class="fa fa-circle-o-notch fa-spin fa-5x fa-fw"></i>
            <span class="sr-only">Loading...</span>
            <p class="mt-5">Pilih jurusan terlebih dahulu agar bisa melihat peserta diterima.</p>
            </div>
            ';
          }else{
          echo '
          <table class="table table-bordered text-center table-hover" width="100%" cellspacing="0">
            <thead>
              <tr>
              <th>No.</th>
              <th>NISN</th>
              <th>Nama</th>
              <th>Sekolah Asal</th>
              <th>Total Nilai</th>
              <th>Daftar Ulang</th>
              </tr>
            </thead>
            ';
            $kd_jur = $_GET['jurusan'];
            $query = "SELECT peserta.nisn, peserta.nama, peserta.sklh_asal, pilih.kd_jur, daftar_ulang.status, 
                      nilai.n_bind, nilai.n_bing, nilai.n_mat, nilai.n_ipa,
                      nilai.n_bind+nilai.n_bing+nilai.n_mat+nilai.n_ipa AS total
                      FROM peserta
                      JOIN daftar_ulang ON peserta.nisn=daftar_ulang.nisn
                      JOIN nilai ON peserta.nisn=nilai.nisn
                      JOIN pilih ON peserta.nisn=pilih.nisn 
                      WHERE pilih.kd_jur='$kd_jur' AND daftar_ulang.status='sukses'
                      ORDER BY total DESC
                      LIMIT 40;";
            $hasil = mysqli_query($conn, $query);
            $no = 1;
            while($data=mysqli_fetch_array($hasil)){
            ?>
            <tbody>
              <tr>
              <td><?=$no?></td>
              <td><?=$data['nisn']?></td>
              <td><?=$data['nama']?></td>
              <td><?=$data['sklh_asal']?></td>
              <td><?=$data['total']?></td>
              <td><?=$data['status']?></td>
              </tr>
            </tbody>
            <?php
            $no+=1;
            }
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
<?php 
$halaman = 'hasil-seleksi';
require ('header.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid p30">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../operator/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Hasil Seleksi</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Hasil Seleksi</h1>
          <h3>
          <?php
          if(isset($_GET['kd_jur'])){
            $jur = $_GET['kd_jur'];
              switch ($jur) {
                case 'ap':
                  echo "Administrasi Perkantoran";
                  break;
                case 'ak':
                  echo "Akuntansi";
                  break;
                case 'pm':
                  echo "Pemasaran";
                  break;
                default:
                  break;
              }
          }
          ?> 
          </h3>
          <hr>
        </div>
        <div class="col-4">
          <form action="" method="GET">
          <div class="form-group">
            <select name="kd_jur" class="form-control custom-select" onchange="submit()">
              <option value="ap" selected hidden>Pilih Jurusan</option>
              <option value="ap"
              <?php
              if(isset($_GET['kd_jur'])){
              if($_GET['kd_jur']=='ap'){
                echo "selected";
              }
              }
              ?>
              >Administrasi Perkantoran</option>
              <option value="ak"
              <?php
              if(isset($_GET['kd_jur'])){
              if($_GET['kd_jur']=='ak'){
                echo "selected";
              }
              }
              ?>
              >Akuntansi</option>
              <option value="pm"
              <?php
              if(isset($_GET['kd_jur'])){
              if($_GET['kd_jur']=='pm'){
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
          if(!isset($_GET['kd_jur'])){
            echo '
            <div class="text-center mt-5 mb-5">
            <i class="fa fa-circle-o-notch fa-spin fa-5x fa-fw"></i>
            <span class="sr-only">Loading...</span>
            <p class="mt-5">Pilih jurusan terlebih dahulu agar bisa melihat hasil seleksi.</p>
            </div>
            ';
          }else{ 
            echo '
            <table class="table table-bordered text-center table-hover" width="100%" cellspacing="0">
              <thead>
                <tr>
                <th width="5%">No.</th>
                <th width="10%">NISN</th>
                <th>Nama</th>
                <th width="25%">Sekolah Asal</th>
                <th width="10%">Total Nilai</th>
                <th width="10%">Rata-Rata</th>
                </tr>
              </thead>
            ';
              $kd_jur = $_GET['kd_jur'];
              $no = 1;
              $query = "SELECT peserta.nisn, peserta.nama, peserta.sklh_asal, nilai.n_bind, nilai.n_bing, nilai.n_mat, nilai.n_ipa, pilih.kd_jur,  
                        nilai.n_bind+nilai.n_bing+nilai.n_mat+nilai.n_ipa AS total
                        FROM peserta
                        JOIN nilai ON peserta.nisn = nilai.nisn
                        JOIN pilih ON peserta.nisn = pilih.nisn
                        WHERE kd_jur = '$kd_jur'
                        ORDER BY total DESC
                        LIMIT 40;";
              $hasil = mysqli_query($conn, $query);
              while($data = mysqli_fetch_array($hasil)){
          ?>     
            <tbody>
              <tr>
              <td><?=$no;?></td>
              <td><?=$data['nisn'];?></td>
              <td><?=$data['nama'];?></td>
              <td><?=$data['sklh_asal'];?></td>
              <td><?=$data['total'];?></td>
              <td><?=$data['total']/4;?></td>
              </tr>
            </tbody>
            <?php
              $no +=1;
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
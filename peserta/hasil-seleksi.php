<?php
$halaman = 'hasil-seleksi';
require ('header.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid p30">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../peserta/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Hasil Seleksi</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h4 class="my-5 text-center">Hasil Seleksi</h4>
        </div>
        <div class="col-4">
        <form action="" method="GET" accept-charset="utf-8">  
          <div class="form-group">
            <select class="custom-select form-control" name="jurusan" onchange="submit()">
              <option selected hidden disabled>Pilih Jurusan</option>
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
        <div class="col-4"></div>
        <div class="col-4"></div>
        <div class="col-12 table-responsive">
          <table class="table table-hover table-bordered text-center">
              
            <?php
            
            if(isset($_GET['jurusan'])){
              echo '
              <thead>
                <tr>
                  <th>No.</th>
                  <th>NISN</th>
                  <th>Nama</th>
                  <th>Sekolah Asal</th>
                  <th>Total Nilai</th>
                  <th>Rata-Rata</th>
                </tr>
              </thead>
              ';        
              $kd_jur = $_GET['jurusan'];
              $query = "SELECT pilih.kd_jur, jurusan.nama_jur, peserta.nisn, peserta.nama, peserta.sklh_asal, 
                        nilai.n_bind+nilai.n_bing+nilai.n_mat+nilai.n_ipa 
                        AS total
                        FROM peserta
                        JOIN nilai ON peserta.nisn = nilai.nisn
                        JOIN pilih ON peserta.nisn = pilih.nisn
                        JOIN jurusan ON pilih.kd_jur = jurusan.kd_jur
                        WHERE pilih.kd_jur = '$kd_jur'
                        ORDER BY total DESC
                        LIMIT 40;";
              $hasil = mysqli_query($conn, $query);
              $no = 1;
              while($data= mysqli_fetch_array($hasil)){      
            ?>
            <tbody>
              <tr>
                <td><?=$no?></td>
                <td><?=$data['nisn']?></td>
                <td><?=$data['nama']?></td>
                <td><?=$data['sklh_asal']?></td>
                <td><?=$data['total']?></td>
                <td><?=$data['total']/4?></td>
              </tr>
            </tbody>
            <?php
            $no+=1;
            }
            }else{
              echo '
              <div class="text-center mt-5 mb-5">
              <i class="fa fa-circle-o-notch fa-spin fa-5x fa-fw"></i>
              <span class="sr-only">Loading...</span>
              <p class="mt-5">Pilih jurusan terlebih dahulu agar bisa melihat hasil seleksi.</p>
              </div>
              ';
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
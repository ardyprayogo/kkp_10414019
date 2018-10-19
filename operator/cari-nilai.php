<?php 
$halaman = 'semua-nilai';
$sub = 'nilai';
require('header.php');
include('../config.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid p30">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../operator/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Daftar Nilai</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Daftar Nilai</h1>
          <hr>
        </div>
        <div class="col-4">
          <form action="cari-nilai.php" method="GET">
            <div class="form-group">
              <input class="form-control" type="text" placeholder="Cari peserta..." name="cari" onchange="submit()" value="<?=$_GET['cari']?>">
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
        	if(isset($_GET['cari'])){
        		$value = $_GET['cari'];
	        	$query = "SELECT peserta.nisn, peserta.nama, nilai.*
											FROM peserta
											JOIN nilai ON peserta.nisn = nilai.nisn
											WHERE peserta.nisn LIKE '%$value%'
											OR peserta.nama LIKE '%$value%';";
						$hasil = mysqli_query($conn, $query);
						if(mysqli_num_rows($hasil) == 0){
							echo '
							<div class="alert alert-danger alert-dismissible text-center my-5" role="alert">
                Data tidak ditemukan! Silahkan periksa kembali.
              </div>
							';
						}else{
							echo '
							<table class="table table-bordered text-center table-hover" width="100%" cellspacing="0">
		            <thead>
		              <tr>
		              <th width="10%">NISN</th>
		              <th>Nama</th>
		              <th width="10%">Bahasa Indonesia</th>
		              <th width="10%">Bahasa Inggris</th>
		              <th width="10%">Matematika</th>
		              <th width="10%">IPA</th>
		              <th colspan="2" width="20%">Aksi</th>
		              </tr>
		            </thead>
							';
						}
            while($data=mysqli_fetch_array($hasil)){
            ?>
            <tbody>
              <tr>
              <td><?=$data['nisn']?></td>
              <td><?=$data['nama']?></td>
              <td><?=$data['n_bind']?></td>
              <td><?=$data['n_bing']?></td>
              <td><?=$data['n_mat']?></td>
              <td><?=$data['n_ipa']?></td>
              <td><a href="ubah-nilai.php?kd_nilai=<?=$data['kd_nilai']?>"><i class="fa fa-pencil-square-o"></i> Ubah</a></td>
              <td><a href="../includes/hapus/nilai.php?kd_nilai=<?=$data['kd_nilai']?>"><i class="fa fa-trash-o"></i> Hapus</a></td>
              </tr>
            </tbody>
            <?php
            }
          	}else{
          		echo "
          		<script>
          		window.location.href='semua-nilai.php';
          		</script>
          		";
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
<?php

?>
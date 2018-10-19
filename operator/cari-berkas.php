<?php

?>
<?php 
$halaman = 'semua-berkas-peserta';
$sub = 'verifikasi';
require ('header.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid p30">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../operator/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Berkas Peserta</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Berkas Peserta</h1>
          <hr>
        </div>
        <div class="col-4">
        	<form action="" method="GET">
	          <div class="form-group">
	            <input class="form-control" type="text" placeholder="Cari peserta..." name="cari" value="<?=$_GET['cari']?>">
	          </div>
        </form>
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
        		$value = $_GET['cari'];
						$query = "SELECT daftar_ulang.*, peserta.nisn, peserta.nama
											FROM peserta
											JOIN daftar_ulang ON peserta.nisn = daftar_ulang.nisn
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
		              <th width="5%">Akte</th>
		              <th width="5%">KTP Ayah</th>
		              <th width="5%">KTP Ibu</th>
		              <th width="5%">Ijazah</th>
		              <th width="5%">SKHUN</th>
		              <th width="5%">Bukti Pemb.</th>
		              <th colspan="2" width="20%">Verifikasi</th>
		              <th colspan="2" width="20%">Aksi</th>
		              <th width="5%">Status</th>
		              </tr>
		            </thead>
            	';
            }

            while($data = mysqli_fetch_array($hasil)){             
            ?>
            <tbody>
              <tr>
              <td><a target="_blank" href="../operator/detail-peserta.php?nisn=<?=$data['nisn']?>"><?=$data['nisn']?></a></td>
              <td><?=$data['nama']?></td>
              <td><a target="_blank" href="<?=$data['akte']?>">Lihat</a></td>
              <td><a target="_blank" href="<?=$data['ktp_ayah']?>">Lihat</a></td>
              <td><a target="_blank" href="<?=$data['ktp_ibu']?>">Lihat</a></td>
              <td><a target="_blank" href="<?=$data['ijazah']?>">Lihat</a></td>
              <td><a target="_blank" href="<?=$data['skhun']?>">Lihat</a></td>
              <td><a target="_blank" href="<?=$data['bkt_pemb']?>">Lihat</a></td>
              <td><a href="../includes/verifikasi-berhasil.php?kd_dftrulg=<?=$data['kd_dftrulg']?>"><i class="fa fa-check-square"></i> Sukses</td>
              <td><a href="../includes/verifikasi-gagal.php?kd_dftrulg=<?=$data['kd_dftrulg']?>"><i class="fa fa-minus-square"></i> Gagal</td>
              <td><a href="ubah-berkas.php?kd_dftrulg=<?=$data['kd_dftrulg']?>"><i class="fa fa-pencil-square-o"></i> Ubah</a></td>
              <td><a href="../includes/hapus/berkas.php?kd_dftrulg=<?=$data['kd_dftrulg']?>"><i class="fa fa-trash-o"></i> Hapus</a></td>
              <?php
              if($data['status']=='sukses'){
                echo '
                <td class="bg-success text-white">Sukses</td>
                ';
              }elseif($data['status']=='kosong'){
                echo '
                <td class="bg-warning text-white">Perlu Verifikasi</td>
                ';
              }else{
                echo '
                <td class="bg-danger text-white">Gagal</td>
                ';
              }
              ?>
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
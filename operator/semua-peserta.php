<?php 
$halaman = 'semua-peserta';
$sub = 'peserta';
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
        <li class="breadcrumb-item active">Daftar Peserta</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Peserta</h1>
          <hr>
        </div>
        <div class="col-4">
          <form action="cari-peserta.php" method="GET">
          <div class="input-group">
            <input class="form-control" type="text" placeholder="Cari peserta..." name="cari" onchange="submit()">
          </div>
        </form>
        </div>
        <div class="col-4">
          <br>
          <br>
        </div>
        <div class="col-4 text-right">
          <a class="btn btn-primary" onclick="cetak()" href="#">
            <i class="fa fa-print"></i>
          </a>
        </div>
        <div class="table-responsive">
        <div class="col-12">
          <?php
            $query= "SELECT peserta.nisn, peserta.nama, peserta.tgl_lhr, peserta.sklh_asal, jurusan.nama_jur 
                     FROM peserta 
                     JOIN pilih ON peserta.nisn = pilih.nisn 
                     JOIN jurusan ON pilih.kd_jur = jurusan.kd_jur
                     ORDER BY nisn ASC;";
            $hasil = mysqli_query($conn, $query);
            $no = 1;
            ?>

            <table class="table table-bordered text-center table-hover my-5" width="100%" cellspacing="0">
              <thead>
                <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Sekolah Asal</th>
                <th>Jurusan Pilihan</th>
                <th colspan="3">Aksi</th>
                </tr>
              </thead>
              <?php 
              while ($data=mysqli_fetch_array($hasil)){   
              ?>
              <tbody>
                <tr>
                <td><?=$no?></td>
                <td><?=$data['nisn']?></td>
                <td><?=$data['nama']?></td>
                <td><?=date('d-m-Y', strtotime($data['tgl_lhr']))?></td>
                <td><?=$data['sklh_asal']?></td>
                <td><?=$data['nama_jur']?></td>
                <td><a href="detail-peserta.php?nisn=<?=$data['nisn']?>"><i class="fa fa-eye"></i> Detail</a></td>  
                <td><a href="ubah-peserta.php?nisn=<?=$data['nisn']?>"><i class="fa fa-pencil-square-o"></i> Ubah</a></td>  
                <td><a href="../includes/hapus/peserta.php?nisn=<?=$data['nisn']?>"><i class="fa fa-trash-o"></i> Hapus</a></td>  
                </tr>
              </tbody>

              <?php
                $no += 1;
                  }//while
              ?>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
  </div>
  <!-- /.content-wrapper-->
<?php
require('footer.php');
?>


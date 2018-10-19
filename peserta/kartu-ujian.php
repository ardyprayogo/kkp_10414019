<?php
$halaman = 'kartu-ujian';
require ('header.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid p30">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../peserta/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Kartu Ujian</li>
      </ol>
      <?php
      $query = "SELECT * FROM peserta WHERE nisn=$nisn;";
      $hasil = mysqli_query($conn, $query);
      while($data = mysqli_fetch_array($hasil)){
      ?>
      <div class="row">
        <div class="col-1">
        </div>
        <div class="col-10">      
          <div class="table-responsive">
            <h4 class="my-5 text-center">Kartu Ujian</h4>
            <table width="100%">
              <tbody>
                <tr>
                  <td width="30%">NISN</td>
                  <td width="5%">:</td>
                  <td width="65%"><?=$data['nisn']?></td>
                </tr>
                <tr>
                  <td width="30%">Nama</td>
                  <td width="5%">:</td>
                  <td width="65%"><?=$data['nama']?></td>
                </tr>
                <tr>
                  <td width="30%">Alamat</td>
                  <td width="5%">:</td>
                  <td width="65%"><?=$data['alamat']?></td>
                </tr>
                <tr>
                  <td width="30%">Tempat / Tgl. Lahir</td>
                  <td width="5%">:</td>
                  <td width="65%"><?=$data['tmpt_lhr'].' / '.date('d F Y', strtotime($data['tgl_lhr']))?></td>
                </tr>
                <tr>
                  <td width="30%">Sekolah Asal</td>
                  <td width="5%">:</td>
                  <td width="65%"><?=$data['sklh_asal']?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-1">
        </div>
        <div class="col-1">
        </div>
        <div class="col-10 mt-5">
          <table class="table table-bordered table-hover text-center">
          <thead>
            <tr>
              <th>Mata Pelajaran</th>
              <th class="10%">Paraf</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Bahasa Indonesia</td>
              <td></td>
            </tr>
            <tr>
              <td>Bahasa Inggris</td>
              <td></td>
            </tr>
            <tr>
              <td>Matematika</td>
              <td></td>
            </tr>
            <tr>
              <td>IPA</td>
              <td></td>
            </tr>
          </tbody>
        </table>
        </div>
        <div class="col-1">
        </div>
        <div class="col-1"></div>
        <div class="col-5 mb-5 mt-5"><img src="<?=$data['foto']?>" width="130px" height="200px" alt=""></div>
        <div class="col-5 mb-5 mt-5 text-right">
          <?php
          echo 'Jakarta, '.date('d F Y');
          echo "<br>";
          echo "<br>";
          echo "<br>";
          echo "<br>";
          echo "<br>";
          echo "<br>";
          echo "<br>";
          echo "(...................................................)";
          ?>
        </div>
        <div class="col-1"></div>
      </div> <!-- row --> 
      <?php
      }
      ?>
    </div>
    <!-- /.container-fluid-->
  </div>
  <!-- /.content-wrapper-->
<?php
require('footer.php');
?>
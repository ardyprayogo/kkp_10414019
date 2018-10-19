<?php
$halaman = 'hasil-ujian';
require ('header.php');
?>
  <div class="content-wrapper">
    <div class="container-fluid p30">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../peserta/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Hasil Ujian</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h4 class="my-5 text-center">Hasil Ujian</h4>
        </div>
        <div class="col-1"></div>
        <div class="col-10">
          <?php
          $query = "SELECT * FROM nilai WHERE nisn=$nisn;";
          $hasil = mysqli_query($conn, $query);
          if(mysqli_num_rows($hasil) == 0){
            echo '
              <div class="alert alert-primary alert-dismissible text-center my-5" role="alert">
                Anda belum ujian atau nilai belum di input operator.
              </div>
            ';
          }else{
            echo '
            <table class="table table-hover table-bordered text-center">
            <tbody>
              <thead>
              <tr>
                <th>MATA PELAJARAN</th>
                <th>NILAI</th>
              </tr>
              </thead>
            ';
          }

              while($data = mysqli_fetch_array($hasil)){
              ?>
              <tbody>
                <tr>
                  <td>Bahasa Indonesia</td>
                  <td><?=$data['n_bind']?></td>
                </tr>
                <tr>
                  <td>Bahasa Inggris</td>
                  <td><?=$data['n_bing']?></td>
                </tr>
                <tr>
                  <td>Matematika</td>
                  <td><?=$data['n_mat']?></td>
                </tr>
                <tr>
                  <td>IPA</td>
                  <td><?=$data['n_ipa']?></td>
                </tr>
                <tr>
                  <th>Total</th>
                  <td>
                    <?php
                    $total = $data['n_bind']+$data['n_bing']+$data['n_mat']+$data['n_ipa'];
                    echo $total;
                    ?>
                  </td>
                </tr>
                <tr>
                  <th>Rata-Rata</th>
                  <td>
                    <?php
                    $rata = $total/4;
                    echo $rata;
                    ?>
                  </td>
                </tr>
              </tbody>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
        <div class="col-1"></div>
      </div>

    </div>
    <!-- /.container-fluid-->
  </div>
  <!-- /.content-wrapper-->
<?php
require('footer.php');
?>
<?php 
$halaman = 'pengumuman';
require('header.php'); 
include('config.php');
?>

<!-- content -->
<div class="container">
  <br>
  <hr>
  <h1 class="display-4 text-center">
    Pengumuman
  </h1>
  <hr>
  <br>
  <table class="table table-hover table-bordered text-center">
  	<thead class="thead-dark">
  		<tr>
  			<th>Tanggal</th>
  			<th>Pengumuman</th>
  		</tr>
  	</thead>
  	<?php
  	$query = "SELECT * FROM pengumuman;";
  	$hasil = mysqli_query($conn, $query);
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
  <br>
  <hr>
  <br>
</div>

<!-- footer -->
<?php 
require('footer.php');
?>
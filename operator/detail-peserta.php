<?php
$halaman = 'semua-peserta';
$sub = 'peserta';
require('header.php');
$nisn = $_GET['nisn'];
$query = "SELECT peserta.nisn, peserta.nama, peserta.tmpt_lhr, peserta.tgl_lhr, peserta.alamat, peserta.jk, peserta.foto, peserta.telp, 
				 peserta.agama, peserta.sklh_asal, peserta.nama_orgtua, peserta.pekerjaan, peserta.telp_ot, pilih.kd_jur, jurusan.nama_jur
				 FROM peserta
				 JOIN pilih ON peserta.nisn=pilih.nisn
				 JOIN jurusan ON pilih.kd_jur=jurusan.kd_jur
				 WHERE peserta.nisn=$nisn;";
$hasil = mysqli_query($conn, $query);
?>
	<div class="content-wrapper">
		<div class="container-fluid p30">
		<!-- Breadcrumbs-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="../operator/">Dashboard</a>
				</li>
				<li class="breadcrumb-item">
					<a href="../operator/semua-peserta.php">Daftar Peserta</a>
				</li>
				<li class="breadcrumb-item active">Detail Peserta</li>
			</ol>
		<div class="row">
			<div class="col-12">
				<h1>Peserta</h1>
				<hr>
			</div>
			<div class="col-4">
			</div>
			<div class="col-4">
				<br>
				<br>
			</div>
			<div class="col-4 text-right">
				<a class="btn btn-primary" onclick="cetak()" href="#">
				<i class="fa fa-print"></i> Cetak
				</a>
			</div>
		</div>
	<?php
	while($data = mysqli_fetch_array($hasil))
	{
	?>

		<div class="row">
			<div class="col-2">	
			</div>
			<div class="col-8">
				<table width="100%">
					<tbody>
						<tr>
							<td colspan="3">
								<hr class="my-5">
								<h5 class="text-right">Data Pribadi</h5>
							</td>
							<tr>
							<td colspan="3">
								<img class="mb-5" src="<?=$data['foto']?>" width="130px" height="200px" alt="">
							</td>
						</tr>
						<tr>
							<td width="49%">NISN</td>
							<td width="2%">:</td>
							<td width="49%"><?=$data['nisn']?></td>
						</tr>
						<tr>
						</tr>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><?=$data['nama']?></td>
						</tr>
						<tr>
							<td>Tempat/Tgl Lahir</td>
							<td>:</td>
							<td><?=$data['tmpt_lhr'].'/'.date('d-M-Y', strtotime($data['tgl_lhr']))?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td><?=$data['alamat']?></td>
						</tr>
						<tr>
							<td>No. Telp</td>
							<td>:</td>
							<td><?=$data['telp']?></td>
						</tr>
						<tr>
							<td>Agama</td>
							<td>:</td>
							<td><?=$data['agama']?></td>
						</tr>
						<tr>
							<td>Sekolah Asal</td>
							<td>:</td>
							<td><?=$data['sklh_asal']?></td>
						</tr>
						<tr>
							<td>Jurusan Pilihan</td>
							<td>:</td>
							<td><?=$data['nama_jur']?></td>
						</tr>
						<tr>
							<td colspan="3">
								<h5 class="text-right mt-5">Data Orang Tua</h5>
							</td>
						</tr>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><?=$data['nama_orgtua']?></td>
						</tr>
						<tr>
							<td>Pekerjaan</td>
							<td>:</td>
							<td><?=$data['pekerjaan']?></td>
						</tr>
						<tr>
							<td>No. Telp</td>
							<td>:</td>
							<td><?=$data['telp_ot']?></td>
						</tr>
					</tbody>
				</table>
				<hr class="my-5">
			</div>
			<div class="col-2">		
			</div>
		</div>
	<?php
	}
	?>
		</div>
		</div>


<?php
require('footer.php');
?>
<?php
include('../../config.php');
session_start();
if(isset($_POST['tambah'])){
	$nisn = $_POST['nisn'];
	$akte = $_POST['akte'];
	$ktp_ayah = $_POST['ktp_ayah'];
	$ktp_ibu = $_POST['ktp_ibu'];
	$ijazah = $_POST['ijazah'];
	$skhun = $_POST['skhun'];
	$bkt_pemb = $_POST['bkt_pemb'];
	$id = $_SESSION['id_opt'];
	$query = "INSERT INTO daftar_ulang (kd_dftrulg, nisn, id_opt, akte, ktp_ayah, ktp_ibu, ijazah, skhun, bkt_pemb, status)
						VALUES (NULL, '$nisn', '$id', '../upload/akte/$akte', '../upload/ktp-ayah/$ktp_ayah', 
						'../upload/ktp-ibu/$ktp_ibu', '../upload/ijazah/$ijazah', '../upload/skhun/$skhun', 
						'../upload/bukti-pembayaran/$bkt_pemb', 'kosong');";

	if(mysqli_query($conn, $query)){
		echo "
		<script>
		alert('Berkas berhasil ditambah!');
		window.location.href='../../operator/semua-berkas-peserta.php';
		</script>
		";
	}else{
		echo "
		<script>
		alert('Gagal!');
		window.history.back();
		</script>
		";
	}
}
mysqli_close($conn);
?>
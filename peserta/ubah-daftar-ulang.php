<?php
include('../config.php');
session_start();
if(isset($_POST['upload'])){
	$nisn = $_SESSION['nisn'];
	$akte = $_POST['akte'];
	$ktp_ayah = $_POST['ktp_ayah'];
	$ktp_ibu = $_POST['ktp_ibu'];
	$ijazah = $_POST['ijazah'];
	$skhun = $_POST['skhun'];
	$bkt_pemb = $_POST['bkt_pemb'];
	$query = "UPDATE daftar_ulang 
						SET akte='../upload/akte/$akte', ktp_ayah='../upload/ktp-ayah/$ktp_ayah', 
						ktp_ibu='../upload/ktp-ibu/$ktp_ibu', ijazah='../upload/ijazah/$ijazah', skhun='../upload/skhun/$skhun', 
						bkt_pemb='../upload/bukti-pembayaran/$bkt_pemb', status='kosong', id_opt='operator' 
						WHERE nisn=$nisn;";
	if(mysqli_query($conn, $query)){
		echo "
		<script>
		alert('Berhasil diubah!');
		window.location.href='../peserta/daftar-ulang.php';
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
?>
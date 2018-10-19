<?php
include('../config.php');
session_start();
$id_opt = $_SESSION['id_opt'];
$kd_dftrulg = $_GET['kd_dftrulg'];
$query = "UPDATE daftar_ulang SET status='gagal', id_opt='$id_opt'
					WHERE kd_dftrulg=$kd_dftrulg;";
if(mysqli_query($conn, $query)){
	echo "
	<script>
	alert('Berhasil menggagalkan verifikasi!');
	window.location.href='../operator/semua-berkas-peserta.php';
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
?>
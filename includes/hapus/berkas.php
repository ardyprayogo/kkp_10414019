<?php
include('../../config.php');
$kd_dftrulg = $_GET['kd_dftrulg'];
$query = "DELETE FROM daftar_ulang WHERE kd_dftrulg=$kd_dftrulg;";

if(mysqli_query($conn, $query)){
	echo "
	<script>
	alert('Berhasil');
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
?>
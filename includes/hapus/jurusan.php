<?php
include('../../config.php');
$kd_jur = $_GET['kd_jur'];
$query = "DELETE FROM jurusan WHERE kd_jur='$kd_jur';";
if(mysqli_query($conn, $query)){
	echo "
	<script>
	alert('Berhasil!');
	window.location.href='../../operator/semua-jurusan.php';
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
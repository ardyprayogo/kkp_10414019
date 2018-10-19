<?php
include('../../config.php');
$kd_peng = $_GET['kd_peng'];
$query = "DELETE FROM pengumuman WHERE kd_peng=$kd_peng;";
if(mysqli_query($conn, $query)){
	echo "
	<script>
	alert('Pengumuman berhasil dihapus');
	window.location.href='../../operator/semua-pengumuman.php';
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
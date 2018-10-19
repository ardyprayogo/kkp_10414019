<?php
include('../../config.php');
if(isset($_POST['ubah'])){
	$kd_jur = $_GET['kd_jur'];
	$nama_jur = $_POST['nama_jur'];
	$kapasitas = $_POST['kapasitas'];
	$query = "UPDATE jurusan SET nama_jur='$nama_jur', kapasitas=$kapasitas WHERE kd_jur='$kd_jur';";
	if(mysqli_query($conn, $query)){
		echo "
		<script>
		alert('Jurusan berhasil diubah!');
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
}
?>
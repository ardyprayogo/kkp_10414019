<?php
include('../../config.php');
if(isset($_POST['tambah'])){
	$kd_jur = $_POST['kd_jur'];
	$nama_jur = $_POST['nama_jur'];
	$kapasitas = $_POST['kapasitas'];
	$query = "INSERT INTO jurusan (kd_jur, nama_jur, kapasitas)
			VALUES ('$kd_jur', '$nama_jur', '$kapasitas');";
	if(mysqli_query($conn, $query)){
		echo "
		<script>
		alert('Jurusan berhasil ditambah!');
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
mysqli_close($conn);
?>
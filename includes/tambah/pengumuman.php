<?php
include('../../config.php');
session_start();
if(isset($_POST['tambah'])){
	$tgl_peng 	= $_POST['tgl_peng'];
	$isi 		= $_POST['isi'];
	$kd_peng	= rand(10000,99999);
	$id 		= $_SESSION['id_opt'];

	$query 		= "INSERT INTO pengumuman (kd_peng, tgl_peng, isi)
				   VALUES ('$kd_peng', '$tgl_peng', '$isi');";
	$query	   .= "INSERT INTO kelola (kd_kel, id_opt, kd_peng)
				   VALUES (NULL, '$id', '$kd_peng');";
	if (mysqli_multi_query($conn, $query)){
		echo "
		<script>
		alert('Pengumuman berhasil Ditambah');
		window.location.href='../../operator/semua-pengumuman.php';
		</script>
		";
	}else{
		echo "
		<script>
		alert('Gagal');
		window.history.back();
		</script>
		";
	}
}
mysqli_close($conn);
?>
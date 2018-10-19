<?php
include('../../config.php');
if(isset($_POST['ubah'])){
	$kd_peng = $_GET['kd_peng'];
	$tgl_peng = $_POST['tgl_peng'];
	$isi = $_POST['isi'];

	$query = "UPDATE pengumuman SET tgl_peng='$tgl_peng', isi='$isi' WHERE kd_peng=$kd_peng;";
	if($hasil = mysqli_query($conn, $query)){
		echo "
		<script>
		alert('Pengumuman berhasil diubah!');
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
}
?>
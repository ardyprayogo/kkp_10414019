<?php
include('../../config.php');
session_start();
$id_opt = $_SESSION['id_opt'];
if(isset($_POST['ubah'])){
	$n_bind = $_POST['n_bind'];
	$n_bing = $_POST['n_bing'];
	$n_mat = $_POST['n_mat'];
	$n_ipa = $_POST['n_ipa'];
	$kd_nilai = $_GET['kd_nilai'];
	$query = "UPDATE nilai SET n_bind=$n_bind, n_bing=$n_bing, n_mat=$n_mat, n_ipa=$n_ipa, id_opt='$id_opt' WHERE kd_nilai=$kd_nilai;";

	if(mysqli_query($conn, $query)){
		echo "
		<script>
		alert('Nilai berhasil diubah!');
		window.location.href='../../operator/semua-nilai.php';
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
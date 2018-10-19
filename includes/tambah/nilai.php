<?php
include('../../config.php');
session_start();
if(isset($_POST['tambah'])){
	$nisn 	= $_POST['nisn'];
	$n_bind = $_POST['n_bind'];
	$n_bing = $_POST['n_bing'];
	$n_mat  = $_POST['n_mat'];
	$n_ipa  = $_POST['n_ipa'];
	$id = $_SESSION['id_opt'];

	$query = "INSERT INTO nilai (kd_nilai, nisn, id_opt, n_bind, n_bing, n_mat, n_ipa) 
				VALUES (NULL, '$nisn', '$id', '$n_bind', '$n_bing', '$n_mat', '$n_ipa');";

	if(mysqli_query($conn, $query)){
		echo "<script>
		alert('Nilai berhasil ditambah');
		window.location.href='../../operator/semua-nilai.php';
		</script>";
	}else{
		echo "<script>
		alert('Gagal!');
		window.history.back();
		</script>
		";
	}
}
mysqli_close($conn);
?>
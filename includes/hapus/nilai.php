<?php
include('../../config.php');
$kd_nilai = $_GET['kd_nilai'];
$query = "DELETE FROM nilai WHERE kd_nilai=$kd_nilai;";
if(mysqli_query($conn,$query)){
	echo "
	<script>
	alert('Berhasil!');
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
?>
<?php
include('../../config.php');
$nisn = $_GET['nisn'];
$query = "DELETE FROM peserta WHERE nisn=$nisn;";
if(mysqli_query($conn, $query)){
	echo"
	<script>
	alert('Data berhasil dihapus!');
	window.history.back();
	</script>
	";
}
?>
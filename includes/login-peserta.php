<?php
include('../config.php');
if(isset($_POST['masuk'])){
	$nisn = $_POST['nisn'];
	$password = $_POST['password'];
	$query = "SELECT * FROM peserta WHERE BINARY nisn=$nisn AND BINARY password='$password';";
	$hasil = mysqli_query($conn, $query);
	$baris = mysqli_num_rows($hasil);

	if($baris == 1){
		session_start();
		$_SESSION['nisn'] = $nisn;
		echo "
		<script>
		window.location.href='../peserta/';
		</script>
		";
	}else{
		echo "
		<script>
		alert('Login gagal');
		window.history.back();
		</script>
		";
	}
}

?>
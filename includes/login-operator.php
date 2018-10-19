<?php
include('../config.php');
$id_opt = $_POST['id_opt'];
$password = $_POST['password'];

$query = "SELECT * FROM operator WHERE BINARY id_opt='$id_opt' AND BINARY password='$password';";
$hasil = mysqli_query($conn, $query);
if(mysqli_num_rows($hasil) == 1){
	session_start();
	$_SESSION['id_opt'] = $id_opt;
	header('location:../operator');
}else{
	$message = "ID atau Password Salah!";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script>window.history.back()</script>";
}
mysqli_close($conn);
?>
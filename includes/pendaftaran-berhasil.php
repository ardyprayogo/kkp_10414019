<?php
include('../config.php');
if(isset($_POST['daftar'])){
	$nama = $_POST['nama'];
	$nisn = $_POST['nisn'];
	$password = $_POST['password'];
	$tmpt_lhr = $_POST['tmpt_lhr'];
	$tgl_lhr = $_POST['tgl_lhr'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jk'];
	$foto = $_POST['foto'];
	$telp = $_POST['telp'];
	$agama = $_POST['agama'];
	$sklh_asal = $_POST['sklh_asal'];
	$kd_jur = $_POST['kd_jur']; 
	$nama_orgtua = $_POST['nama_orgtua'];
	$pekerjaan = $_POST['pekerjaan'];
	$telp_ot = $_POST['telp_ot'];

	$query = "INSERT INTO peserta (nisn, password, nama, tmpt_lhr, tgl_lhr, alamat, jk, foto, telp, agama, sklh_asal, nama_orgtua, pekerjaan, telp_ot) VALUES ('$nisn', '$password', '$nama', '$tmpt_lhr', '$tgl_lhr', '$alamat', '$jk', '../upload/foto-siswa/$foto', '$telp', '$agama', '$sklh_asal', '$nama_orgtua', '$pekerjaan', '$telp_ot');";

	$query .= "INSERT INTO pilih (kd_pil, nisn, kd_jur) VALUES (NULL, '$nisn', '$kd_jur')";

	if(mysqli_multi_query($conn, $query)){
		$message = "Pendaftaran berhasil, silahkan melakukan login.";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script type='text/javascript'>window.location = '../login-peserta.php';</script>";
	}else{
		$message = "Gagal!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>window.history.back()</script>";
	}
}
mysqli_close($conn);
?>
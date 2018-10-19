<?php
include('../config.php');
session_start();
if(isset($_POST['ubah'])){
	$nisn = $_SESSION['nisn'];
	$nama = $_POST['nama'];
	$tmpt_lhr = $_POST['tmpt_lhr'];
	$tgl_lhr = $_POST['tgl_lhr'];
	$alamat = $_POST['alamat'];
	$telp = $_POST['telp'];
	$sklh_asal = $_POST['sklh_asal'];
	$kd_jur = $_POST['kd_jur'];
	$nama_orgtua = $_POST['nama_orgtua'];
	$pekerjaan = $_POST['pekerjaan'];
	$telp_ot = $_POST['telp_ot'];

	$query = "UPDATE peserta SET nama='$nama', tmpt_lhr='$tmpt_lhr', tgl_lhr='$tgl_lhr', alamat='$alamat', telp='$telp', sklh_asal='$sklh_asal',
						nama_orgtua='$nama_orgtua', pekerjaan='$pekerjaan', telp_ot='$telp_ot' WHERE nisn=$nisn;";

	$query .= "UPDATE pilih SET kd_jur='$kd_jur' WHERE nisn=$nisn;";

	if(mysqli_multi_query($conn, $query)){
		echo "
		<script>
		alert('Berhasil diubah!');
		window.location.href='../peserta/biodata.php';
		</script>
		";
	}else{
		echo "
		<script>
		alert('Gagal!');
		window.history.back;
		</script>
		";
	}
}else{
	echo "
	<script>
	window.location.href='../peserta/';	
	</script>
	";
}
mysqli_close($conn);
?>
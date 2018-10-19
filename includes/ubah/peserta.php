<?php
include('../../config.php');
if(isset($_POST['ubah'])){
	$nama = $_POST['nama'];
	$nisn = $_GET['nisn'];
	$tmpt_lhr = $_POST['tmpt_lhr'];
	$tgl_lhr = $_POST['tgl_lhr'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jk'];
	$telp = $_POST['telp'];
	$agama = $_POST['agama'];
	$sklh_asal = $_POST['sklh_asal'];
	$kd_jur = $_POST['kd_jur'];
	$nama_orgtua = $_POST['nama_orgtua'];
	$pekerjaan = $_POST['pekerjaan'];
	$telp_ot = $_POST['telp_ot'];

	$query = "UPDATE peserta SET nama='$nama', tmpt_lhr='$tmpt_lhr', alamat='$alamat', jk='$jk', telp='$telp', tgl_lhr='$tgl_lhr',
			 agama='$agama', sklh_asal='$sklh_asal', nama_orgtua='$nama_orgtua', pekerjaan='$pekerjaan', telp_ot='$telp_ot' 
			 WHERE nisn=$nisn;";
	$query .= "UPDATE pilih SET kd_jur='$kd_jur'
			  WHERE nisn=$nisn;";
	if(mysqli_multi_query($conn, $query)){
		echo "
		<script>
		alert('Data berhasil diubah!');
		window.location.href='../../operator/semua-peserta.php';
		</script>
		";
	}else{
		echo"
		<script>
		alert('Gagal diubah!');
		window.history.back();
		</script>
		";
	}
}
?>
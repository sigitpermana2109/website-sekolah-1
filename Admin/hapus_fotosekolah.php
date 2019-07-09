<?php
include ('../Config.php');
if ($koneksi == true) {
	header('location:Menampilkan_fotosekolah.php');
}
$kode = $_GET ['id_keg_sekolah'];
$hapus = "Delete from keg_sekolah where id_keg_sekolah='$kode'";
$qry_hapus = mysqli_query($koneksi, $hapus) or die (mysqli_error());
if ($qry_hapus){
	echo "Data Berhasil Di hapus<br><a href='Menampilkan_fotokegiatan.php'>Klik Disini</a>";
}
else{
	echo "Data Gagal Diubah";
}
?>
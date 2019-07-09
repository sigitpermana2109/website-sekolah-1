<?php
include ('../Config.php');
if ($koneksi == true) {
	header('location:Menampilkan_prestasi.php');
}
$kode = $_GET ['id'];
$hapus = "Delete from prestasi where id='$kode'";
$qry_hapus = mysqli_query($koneksi, $hapus) or die (mysqli_error());
if ($qry_hapus){
	echo "Data Berhasil Di hapus<br><a href='Menampilkan_prestasi.php'>Klik Disini</a>";
}
else{
	echo "Data Gagal Diubah";
}
?>
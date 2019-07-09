<?php
include ('../Config.php');
if ($koneksi == true) {
	header('location:Menampilkan_fotoeskul.php');
}
$kode = $_GET ['id_eskul'];
$hapus = "Delete from eskul where id_eskul='$kode'";
$qry_hapus = mysqli_query($koneksi, $hapus) or die (mysqli_error());
if ($qry_hapus){
	echo "Data Berhasil Di hapus<br><a href='Menampilkan_fotoeskul.php'>Klik Disini</a>";
}
else{
	echo "Data Gagal Diubah";
}
?>
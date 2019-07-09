<?php
include ('../Config.php');
if ($koneksi == true) {
	header('location:Menampilkan_guru.php');
}
$kode = $_GET ['id'];
$hapus = "Delete from guru where id_guru='$kode'";
$qry_hapus = mysqli_query($koneksi, $hapus) or die (mysqli_error());
if ($qry_hapus){
	echo "Data Berhasil Di hapus<br><a href='Menampilkan_guru.php'>Klik Disini</a>";
}
else{
	echo "Data Gagal Diubah";
}
?>
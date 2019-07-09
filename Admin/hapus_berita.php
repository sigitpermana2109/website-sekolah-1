<?php
include ('../Config.php');
if ($koneksi == true) {
	header('location:Menampilkan_berita.php');
}
$kode = $_GET ['id'];
$hapus = "Delete from berita where id_berita='$kode'";
$qry_hapus = mysqli_query($koneksi, $hapus) or die (mysqli_error());
if ($qry_hapus){
	echo "Data Berhasil Di hapus<br><a href='Menampilkan_berita.php'>Klik Disini</a>";
}
else{
	echo "Data Gagal Diubah";
}
?>
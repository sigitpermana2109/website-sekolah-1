<?php
include ('../Config.php');
if ($koneksi == true) {
	header('location:Menampilkan_fotoguru.php');
}
$kode = $_GET ['id_keg_guru'];
$hapus = "Delete from keg_guru where id_keg_guru='$kode'";
$qry_hapus = mysqli_query($koneksi, $hapus) or die (mysqli_error());
?>
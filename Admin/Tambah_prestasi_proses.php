<?php
if (isset($_POST['kirim'])){
  include ('../Config.php');
  $id = $_POST ['id'];
  $keterangan = $_POST ['keterangan'];
  $tanggal = $_POST ['tanggal_diraih'];
    // insert data ke database
    $insert = "insert into prestasi values ('$id', '$keterangan', '$tanggal')";
    $qry_insert=mysqli_query($koneksi, $insert);
    echo "<div class='alert alert-success' role='alert'>
                        Data Berhasil Disimpan
        </div>";
}
?>
<?php
if (isset($_POST['kirim'])){
    include ('../Config.php');
    $id = $_POST ['id'];
    $keg = $_POST['kegiatan'];
    $ket = $_POST['ket'];
    $temp = $_FILES['cover']['tmp_name'];
    $name = $_FILES['cover']['name'];
    $size = $_FILES['cover']['size'];
    $type = $_FILES['cover']['type'];
    $folder = "../galeri/";
    $a = "$folder/$name";
    $b = "00$".$id;
    if ($size < 102400000 and $type = 'image/jpeg' && 'image/png') {
    // upload Process
    move_uploaded_file($temp, $folder . $name);
    // insert data ke database
    $insert = "insert into galeri values ('$id', '$name', '$keg')";
    $qry_insert=mysqli_query($koneksi, $insert);

    if ($keg == "Eskul"){
    $select = mysqli_query($koneksi, "select max(id_eskul)as id_eskul from eskul");
    if ($a =mysqli_fetch_array($select)){
    $id_eskul = $a['id_eskul']+1;
    $insert2 = mysqli_query($koneksi,"INSERT INTO eskul VALUES ('$id_eskul', '$id', '$ket')");
    // menampikan informasi file yang di upload
    echo "Nama File : <b>" . $name;
    echo "</b><br>";
    echo "Ukuran File : <b>" . $size;
    echo "</b> Byte<br>";
    echo "Type File : <b>" . $type;
    echo "</b><br><br>";}}
        if ($keg == "Guru"){
    $select = mysqli_query($koneksi, "select max(id_keg_guru)as id_keg_guru from keg_guru");
    if ($a =mysqli_fetch_array($select)){
    $id_eskul = $a['id_keg_guru']+1;
    $insert2 = mysqli_query($koneksi,"INSERT INTO keg_guru VALUES ('$id_eskul', '$id', '$ket')");
    // menampikan informasi file yang di upload
    echo "Nama File : <b>" . $name;
    echo "</b><br>";
    echo "Ukuran File : <b>" . $size;
    echo "</b> Byte<br>";
    echo "Type File : <b>" . $type;
    echo "</b><br><br>";}}
        if ($keg == "Sekolah"){
    $select = mysqli_query($koneksi, "select max(id_keg_sekolah)as id_keg_sekolah from keg_sekolah");
    if ($a =mysqli_fetch_array($select)){
    $id_eskul = $a['id_keg_sekolah']+1;
    $insert2 = mysqli_query($koneksi,"INSERT INTO keg_sekolah VALUES ('$id_eskul', '$id', '$ket')");
    // menampikan informasi file yang di upload
    echo "Nama File : <b>" . $name;
    echo "</b><br>";
    echo "Ukuran File : <b>" . $size;
    echo "</b> Byte<br>";
    echo "Type File : <b>" . $type;
    echo "</b><br><br>";}}
}
else{
    echo "Gagal Upload File";
}}
?>
<?php include 'Header.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data
        <small>Galeri</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tambah Data Galeri</a></li>
      </ol>
    </section>
    <!-- Main content -->
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-danger">

            <div class="box-header">
              <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
              <!-- /.box-header -->
              <div class="card" style="background-color: rgb(244, 244, 244); padding:10px;margin-bottom: 10px;">
            <a href="menampilkan_fotoguru.php"><i class="fa fa-arrow-left"></i> Back</a>
          </div>
        </div>
          <div class="box-body">
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
   echo "<div class='alert alert-success' role='alert'>Data Berhasil Disimpan</div>";}}
        if ($keg == "Guru"){
    $select = mysqli_query($koneksi, "select max(id_keg_guru)as id_keg_guru from keg_guru");
    if ($a =mysqli_fetch_array($select)){
    $id_eskul = $a['id_keg_guru']+1;
    $insert2 = mysqli_query($koneksi,"INSERT INTO keg_guru VALUES ('$id_eskul', '$id', '$ket')");
    // menampikan informasi file yang di upload
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Disimpan</div>";}}
        if ($keg == "Sekolah"){
    $select = mysqli_query($koneksi, "select max(id_keg_sekolah)as id_keg_sekolah from keg_sekolah");
    if ($a =mysqli_fetch_array($select)){
    $id_eskul = $a['id_keg_sekolah']+1;
    $insert2 = mysqli_query($koneksi,"INSERT INTO keg_sekolah VALUES ('$id_eskul', '$id', '$ket')");
    // menampikan informasi file yang di upload
    echo "<div class='alert alert-success' role='alert'>Data Berhasil Disimpan</div>";}}
}
else{
    echo "Gagal Upload File";
}}
?>
          <?php 
            include ('../Config.php');
            $tampil = mysqli_query($koneksi,"select max(id_galeri)as id_galeri from galeri");
            while ($baris = mysqli_fetch_array($tampil)){?>
            <form action="" method="post" enctype="multipart/form-data" >
              <div class="form-group">
                <input type="hidden" name="id" value="<?php $a = $baris[0]+1; echo $a; }?>">
                <label for="price">Foto*</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-camera"></i>
                  </div>
                <input class="form-control "type="file" name="cover" min="0" placeholder="Prestasi yang Diraih" required="required" />
                </div>
              <div class="form-group')?>">
                <label>Jenis Kegiatan</label>
                <select class="form-control select2" style="width: 100%;" name="kegiatan">
                  <option>-</option>
                  <option>Eskul</option>
                  <option>Guru</option>
                  <option>Sekolah</option>
                </select>
              </div>
              <div class="form-group">
                <label for="price">Deskripsi*</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-pencil"></i>
                  </div>
                <input class="form-control "type="text" name="ket" min="0" placeholder="Keterangan" required="required" />
                </div>
            </div>
              <input class="btn btn-success" type="submit" name="kirim" value="Save" />
            </form>

          </div>

          <div class="card-footer small text-muted">
            * required fields
          </div>


        </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>
    </section>
       
    <!-- /.content -->
  </div>
  <?php include 'Footer.php'; ?>
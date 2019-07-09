<?php include 'Header.php'; ?>
<link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data
        <small>guru</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
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
            <a href="menampilkan_guru.php"><i class="fa fa-arrow-left"></i> Back</a>
          </div>
        </div>
          <div class="box-body">
            <?php 
            include ('../Config.php');
            $tampil = mysqli_query($koneksi,"select max(id_guru)as id_guru from guru");
            while ($baris = mysqli_fetch_array($tampil)){?>
              <?php
                if (isset($_POST['kirim'])){
                  $id = $_POST ['id_guru'];
                  $nuptk = $_POST ['nuptk'];
                  $nama = $_POST ['nama'];
                  $jk = $_POST ['jk'];
                  $tempat = $_POST ['tempat'];
                  $tanggal = $_POST ['tanggal'];
                  $status = $_POST ['status'];
                  $jenis = $_POST ['jenis'];
                  $jenjang = $_POST ['jenjang'];
                  $kompetensi = $_POST ['kompetensi'];
                  $temp = $_FILES['cover']['tmp_name'];
                  $name = $_FILES['cover']['name'];
                  $size = $_FILES['cover']['size'];
                  $type = $_FILES['cover']['type'];
                    // insert data ke database
                  $folder = "../guru/";
                  $a = "$folder/$name";
                  if ($size < 1024000 and $type = 'image/jpeg' && 'image/png') {
                    // upload Process
                  move_uploaded_file($temp, $folder . $name);
                    // insert data ke database
                  $tampil = mysqli_query($koneksi,"select * from status_kepegawaian where status='$status'");
                  while ($baris = mysqli_fetch_array($tampil)){
                  $tampil1 = mysqli_query($koneksi,"select * from jenis_ptk where ptk='$jenis'");
                  while ($baris1 = mysqli_fetch_array($tampil1)){
                  $tampil2 = mysqli_query($koneksi,"select * from jenjang where jenjang='$jenjang'");
                  while ($baris2 = mysqli_fetch_array($tampil2)){
                  $tampil3 = mysqli_query($koneksi,"select * from kompetensi where kompetensi='$kompetensi'");
                  while ($baris3 = mysqli_fetch_array($tampil3)){
                  $id_status = $baris['id_status'];
                  $id_ptk = $baris1['id_ptk'];
                  $id_jenjang = $baris2['id_jenjang'];
                  $id_kompetensi = $baris3['id_kompetensi'];
                  $insert = "insert into guru values ('$id', '$nuptk', '$nama', '$jk', '$tempat', '$tanggal', '$id_status', '$id_ptk', '$id_jenjang', '$id_kompetensi', '$name')";
                  $qry_insert=mysqli_query($koneksi, $insert);
                  echo "<div class='alert alert-success' role='alert'>
                                        Data Berhasil Disimpan
                        </div>";
                  }
                }}}}}
              ?>
            <form action="" method="post" enctype="multipart/form-data" >
              <div class="form-group">
                <input type="hidden" name="id_guru" value="<?php $a = $baris[0]+1; echo $a; }?>">
                <label for="price">NUPTK*</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-pencil"></i>
                  </div>
                <input class="form-control "
                 type="text" name="nuptk" min="0" required="required"/>
              </div>

              <div class="form-group">
                <label for="price">Nama*</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-pencil"></i>
                  </div>
                <input class="form-control "
                 type="text" name="nama" min="0" required="required" />
              </div>

              <div class="form-group">
                <label>Jenis Kelamin :</label>

                <div class="input-group date">
                  <label>
                    <input type="radio" name="jk" class="flat-red" value="Laki-laki" checked>
                    Laki - laki &nbsp&nbsp
                  </label>
                  <label>
                    <input type="radio" name="jk" class="flat-red" value="Perempuan" >
                    Perempuan
                  </label>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              <div class="form-group">
                <label for="price">Tempat Lahir*</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-user-o"></i>
                  </div>
                <input class="form-control "
                 type="text" name="tempat" min="0" required="required" />
              </div>

              <div class="form-group">
                <label for="price">Tanggal Lahir*</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                <input class="form-control "
                 type="date" name="tanggal" min="0" required="required" />
              </div>

              <div class="form-group">
                <label for="price">Status Kepegawaian*</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <select name="status" class="form-control ">
                <option>-</option>
                <option>GTY/PTY</option>
                <option>THS</option>
                <option>Lainnya</option>
              </select>
              </div>

              <div class="form-group">
                <label for="price">Jenis PTK*</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <select name="jenis" class="form-control ">
                <option>-</option>
                <option>Kepala Sekolah</option>
                <option>Guru Kelas</option>
                <option>Kepala Mapel</option>
                <option>Tenaga Administrasi</option>
                <option>Penjaga Sekolah</option>
                <option>Lainnya</option>
              </select>
              </div>

              <div class="form-group">
                <label for="price">Jenjang*</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <select name="jenjang" class="form-control ">
                <option>-</option>
                <option>S1</option>
                <option>D2</option>
                <option>SMA / Sederajat</option>
                <option>Lainnya</option>
              </select>
              </div>

              <div class="form-group">
                <label for="price">Kompetensi*</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <select name="kompetensi" class="form-control ">
                <option>-</option>
                <option>Guru Kelas SD/MI</option>
                <option>Pendidikan Agama Islam</option>
                <option>Pendidikan Jasmani dan Kesehatan</option>
                <option>Bahasa Inggris</option>
                <option>IPS</option>
                <option>Umum</option>
                <option>Lainnya</option>
              </select>
              </div>

              <div class="form-group">
                <label for="price">Foto*</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-camera"></i>
                  </div>
                <input class="form-control"
                 type="file" name="cover" min="0" placeholder="guru yang Diraih" required="required" />
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
  <script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <?php include 'Footer.php'; ?>
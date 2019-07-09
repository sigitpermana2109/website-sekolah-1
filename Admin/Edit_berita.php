<?php include 'Header.php'; ?>
<link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data
        <small>berita</small>
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
            <a href="menampilkan_berita.php"><i class="fa fa-arrow-left"></i> Back</a>
          </div>
        </div>
          <div class="box-body">
            <?php
            $a = $_GET['id'];
            include ('../Config.php');
            $tampil = mysqli_query($koneksi,"select * from berita where id_berita = $a");
            while ($baris = mysqli_fetch_array($tampil)){
            ?>
              <?php
                  if (isset($_POST['kirim'])){
                  $id = $_POST ['id_berita'];
                  $hari = $_POST ['hari'];
                  $waktu = $_POST ['waktu'];
                  $judul = $_POST ['judul'];
                  $isi = addslashes($_POST['isi']);
                  $temp = $_FILES['cover']['tmp_name'];
                  $name = $_FILES['cover']['name'];
                  $size = $_FILES['cover']['size'];
                  $type = $_FILES['cover']['type'];
                    // insert data ke database
                  $folder = "../berita/";
                  $a = "$folder/$name";
                  if ($size < 1024000 and $type = 'image/jpeg' && 'image/png') {
                    // upload Process
                  move_uploaded_file($temp, $folder . $name);
                    // insert data ke database
                  $edit = "update berita set hari='$hari', waktu='$waktu', judul='$judul', isi='$isi', gambar='$name' where id_berita='$id'";
                  $qry_insert=mysqli_query($koneksi, $edit);
                  echo "<div class='alert alert-success' role='alert'>
                      Data Berhasil Disimpan
                  </div>";
                }
            }
            ?>
            <form action="" method="post" enctype="multipart/form-data" >
              <form action="" method="post" enctype="multipart/form-data" >
              <div class="form-group">
                <input type="hidden" name="id_berita" value="<?php $a = $baris[0]+1; echo $a; ?>">
                <label for="price">Hari*</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                <input class="form-control "
                 type="text" name="hari" min="0" required="required" value="<?php echo date ('Y M d');?>" readonly />
              </div>

              <div class="form-group">
                <label for="price">Waktu*</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                <input class="form-control "
                 type="text" name="waktu" min="0" required="required" value="<?php echo date ('h:i:s');?>" readonly />
              </div>

              <div class="form-group">
                <label for="price">Judul*</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-pencil"></i>
                  </div>
                <input class="form-control "
                 type="text" name="judul" min="0" placeholder="Judul Berita" value="<?php echo $baris['judul'];?>" required="required" />
              </div>

              <div class="form-group">
                <label for="price">Isi*</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-pencil"></i>
                  </div>
                 <textarea class="textarea" name="isi" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $baris['isi'];}?></textarea>

              </div>

              <div class="form-group">
                <label for="price">Gambar*</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-camera"></i>
                  </div>
                <input class="form-control"
                 type="file" name="cover" min="0" placeholder="berita yang Diraih" required="required" />
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
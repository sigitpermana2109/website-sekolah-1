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
            <a href="menampilkan_fotosekolah.php"><i class="fa fa-arrow-left"></i> Back</a>
          </div>
        </div>
          <div class="box-body">
          <?php
            $a = $_GET['id_keg_sekolah'];
            include ('../Config.php');
            $tampil = mysqli_query($koneksi,"select * from keg_sekolah where id_keg_sekolah = $a");
            while ($baris = mysqli_fetch_array($tampil)){
            ?>
              <?php
            if (isset($_POST['kirim'])){
              $id = $_POST ['id'];
              $keterangan = $_POST['ket'];
               // insert data ke database
                $edit = "update keg_sekolah set keterangan='$keterangan' where id_keg_sekolah='$id'";
               $qry_insert=mysqli_query($koneksi, $edit);
               echo "<div class='alert alert-success' role='alert'>
                                   Data Berhasil Disimpan
                   </div>";
            }
            ?>
            <form action="" method="post" enctype="multipart/form-data" >
              <div class="form-group">
                <input type="hidden" name="id" value="<?php echo$baris[0];?>">
                <label for="price">Deskripsi*</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-pencil"></i>
                  </div>
                <input class="form-control "type="text" name="ket" min="0" value="<?php echo $baris[2]; }?>" required="required" />
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
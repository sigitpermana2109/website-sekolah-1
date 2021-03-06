<?php include 'Header.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Data
        <small>Prestasi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Edit Data Prestasi</a></li>
      </ol>
    </section>
    <!-- Main content -->
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-danger">
            <div class="box-header">
              <div class="card" style="background-color: rgb(244, 244, 244); padding:10px;margin-bottom: 10px;">
            <a href="menampilkan_prestasi.php"><i class="fa fa-arrow-left"></i> Back</a>
          </div>
        </div>
          <div class="box-body">
            <?php
            $a = $_GET['id'];
            include ('../Config.php');
            $tampil = mysqli_query($koneksi,"select * from prestasi where id = $a");
            while ($baris = mysqli_fetch_array($tampil)){
            ?>
              <?php
            if (isset($_POST['kirim'])){
              $id = $_POST ['id'];
              $keterangan = $_POST ['keterangan'];
             $tanggal = $_POST ['tanggal_diraih'];
               // insert data ke database
                $edit = "update prestasi set keterangan='$keterangan', tanggal_diraih='$tanggal' where id='$id'";
               $qry_insert=mysqli_query($koneksi, $edit);
               echo "<div class='alert alert-success' role='alert'>
                                   Data Berhasil Disimpan
                   </div>";
            }
            ?>
            <form action="" method="post" enctype="multipart/form-data" >
              <div class="form-group">
                <input type="hidden" name="id" value="<?php echo$baris[0];?>">
                <label for="price">Keterangan*</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-pencil"></i>
                  </div>
                <input class="form-control "
                 type="text" name="keterangan" min="0" value="<?php echo$baris[1];?>" required="required" />
              </div>


              <div class="form-group">
                <label for="name">Tanggal Diraih*</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                <input type="date"  class="form-control " name="tanggal_diraih" value="<?php echo$baris[2];}?>" required="required">
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
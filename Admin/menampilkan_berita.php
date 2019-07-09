<?php include 'Header.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tabel
        <small>Prestasi</small>
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
            <a href="Tambah_berita.php"><i class="fa fa-plus"></i> Add New</a>
          </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Hari</th>
                  <th>Waktu</th>
                  <th>Judul</th>
                  <th>Isi</th>
                  <th>Gambar</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                include ('../Config.php');
                $tampil = mysqli_query($koneksi,"select * from berita");
                while ($baris = mysqli_fetch_array($tampil)) {
                 echo "<tr>
                <td >$baris[hari]</td>
                <td >$baris[waktu]</td>    
                <td >$baris[judul]</td>
                <td >$baris[isi]</td>
                <td >$baris[gambar]</td>
                <td style='padding: 10px 10px 10px 10px;width: 130px;'><a href= 'edit_berita.php?id=$baris[id_berita]' class='btn btn-primary glyphicon glyphicon-edit' title='Edit' style='text-decoration:none;' ></a>  
                    <a onclick=\"return confirm ('Yakin Akan Menghapus ?');\" href='hapus_berita.php?id=$baris[id_berita]' class='btn btn-danger glyphicon glyphicon-trash' title='Hapus' style='text-decoration:none;'></a></th>
                </tr>";}?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'Footer.php'; ?>
<?php include 'Header.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Tabel
        <small>Guru</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Detail Tabel Guru</a></li>
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
            <?php
            include ('../Config.php');
            $a = $_GET['no'];
            $tampil = mysqli_query($koneksi,"select * from guru, kompetensi, jenis_ptk, status_kepegawaian, jenjang where guru.id_guru= $a");
            if ($baris = mysqli_fetch_array($tampil)){
            echo "<pre style='font-size:20px;'><img src='../guru/$baris[foto]' width=20% style='float:right;'>
  Nama                    : $baris[nama]
  NUPTK                   : $baris[nuptk]
  Jenis Kelamin           : $baris[jk]
  Tempat, Tanggal Lahir   : $baris[tempat_lahir], $baris[tanggal_lahir]
  Status Kepegawaian      : $baris[status]
  Jenis PTK               : $baris[ptk]
  Jenjang                 : $baris[jenjang]
  Kompetensi              : $baris[kompetensi]
</pre>";
}
?>
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
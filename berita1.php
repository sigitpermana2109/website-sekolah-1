<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>SDIT Citra Winaya</title>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
	<link rel="stylesheet" href="wp-content/themes/sh-theme/libs/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="wp-content/themes/sh-theme/libs/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="wp-content/themes/sh-theme/style.responsive.css" />
	<link rel="icon" type="image/png" href="wp-content/themes/sh-theme/images/logosd.png" />
  <link rel="stylesheet" href="wp-content/themes/sh-theme/style.css" />
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="pingback" href="xmlrpc.php" />
  <link rel="stylesheet" type="text/css" href="js/slideshow.js">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  <link href="css/berita1.css" rel="stylesheet">    


    <script src="js/slideshow.js"></script>
</head>
<body style="background-color: white;">

	<nav class="navbar navbar-default navbar-fixed-top" style=" background-color: green;">
		    <div class="top-bar hidden-xs hidden-sm" style="position: relative; z-index: 99999;">
<header id="mu-header" style="background-color: #006400;">
    <div class="header-top" style="background-color:#006400;">
      <div class="container" style="background-color: #006400;">
        <div class="row align-items-center">
          <div class="col-lg-6 col-sm-6 col-4 header-top-left" >
            <a href="#">
              <span class="lnr lnr-phone"></span>
              <span class="textm">
                <span class="textm" style="color: #FFF; font-size: 14px;font-family: Times New Roman;"><span class="fa fa-phone fa-lg" style="color: #FFF;"></span> 081321453346 | 022 (2039507)</span>
              </span>
            </a>
            <a href="#">
              <span class="lnr lnr-envelope"></span>
              <span class="textm">
                <span class="textm" style="color: #FFF; font-size: 14px;font-family: Times New Roman;"><span class="fa fa-envelope-o" style="color: #FFF;"></span> citrawinaya@yahoo.com</span>
              </span>
            </a>
          </div>
          <div class="col-lg-6 col-sm-6 col-8 header-top-right">
            <a href="Admin/User.php?action==login" class="text-uppercase" style="color: #FFF;"><span class="fa fa-user" style="color: #FFF;"></span> Login</a>
          </div>
        </div>
      </div>
    </div>
  </header>
</div>
    <!-- <div class="header-cover"></div> -->
    <div class="container" style=" position: relative;">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="index.php" class="navbar-brand hidden-xs hidden-sm">
            <img id="header-logo" src="wp-content/themes/sh-theme/images/header-logo.png" />
        </a>
    </div>
    <div class="navbar-collapse collapse">
        
<ul class="nav navbar-nav navbar-right menu-2" >
	<li class="menu-item-20"><a title="Beranda" href="index.php" style="color: white;"><span class="fa fa-home"></span> Beranda</a>
	</li>
	<li class="w3-dropdown-hover"><a title="Profil" href="#" style="color: white;"><span class="fa fa-university"></span> Profil</a>
 	 <div >
      <div class="w3-dropdown-content w3-bar-block w3-card-4  active">
        <a href="visimisi.php" class="w3-bar-item w3-button">Visi Misi</a>
        <a href="sejarah.php" class="w3-bar-item w3-button">Sejarah</a>
        <a href="tujuan.php" class="w3-bar-item w3-button">Tujuan</a>
      </div>
    </div>
  	</li>
	<li class="menu-item-12"><a title="Guru" href="guru.php" style="color: white;"><span class="fa fa-user"></span> Guru</a>
  </li>
  <li class="menu-item-12 active"><a title="Berita" href="berita1.php" style="color: white;"><span class="fa fa-globe"></span> Berita</a>
  </li>
  <li class="menu-item-50"><a title="Ekskul" href="eskul.php" style="color: white;"><span class="fa fa-star"></span> Ekskul</a>
  </li>
  <li class="menu-item-17"><a title="Galeri" href="foto_eskul.php" style="color: white;"><span class="fa fa-camera"></span> Galeri</a>
  </li>
  <li class="menu-item-456"><a title="Kontak" href="#footer" class="get-contact" style="color: white;"><span class="fa fa-phone fa-lg"></span> Kontak</a>
  </li>
</ul>
    </div>
</div>

</nav>
<br>
<br>
<br>
	<!-- / header -->
	

 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
   	     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <div class="mu-course-container">
                  <div class="row">

    <?php
    include 'Config.php';
    $abc = mysqli_query($koneksi,"select min(id_berita) id_berita from berita");
    while($baris1 = mysqli_fetch_array($abc)){
    $id1  = $baris1[0];
    $ab   = mysqli_query($koneksi,"select max(id_berita) id_berita from berita");
    while($baris = mysqli_fetch_array($ab)){
        $id = $baris[0];
        $halaman = 4;
        $page   = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
        $mulai  = ($page>1) ? ($page * $halaman) - $halaman : 0;
        $result = mysqli_query($koneksi,"select * from berita");
        $total  = mysqli_num_rows($result);
        $pages  = ceil($total/$halaman);            
        $query  = mysqli_query($koneksi,"select * from berita LIMIT $mulai, $halaman")or die(mysql_error);
        $no     = $mulai+1;
 
  while ($baris2 = mysqli_fetch_assoc($query)) {
            $b = $baris2['isi'];
            $j = $baris2['judul'];
            $a = $baris2['gambar'];
            $c = substr($b, 0, 100);
            echo "
                    <div class='col-md-6 col-sm-6'>
                    <div class='mu-latest-course-single'>
                      <figure class='mu-latest-course-img'>
                        <figcaption class='mu-latest-course-imgcaption' style='background: green;margin-left:-40px; margin-top:-15px;'>
                          <a href='#' style='color: white;font-family: arial ;'><span class='fa fa-calendar'> ".date('d M Y', strtotime($baris2['hari']))."</span></a>
                          <span><i class='fa fa-clock-o' style='color: white;'> ".date('H:m:s', strtotime($baris2['hari']))."</i></span>
                        </figcaption>
                      </figure>
                      <div class='mu-latest-course-single-content'>
                        <h4><a href='berita.php?id=$baris2[id_berita]'><font color='green' size='5'>".$j."</font><br></a></h4><a href='berita/$baris2[gambar]'><img src='berita/".$a."' style='height:200px; width:auto;display:block;margin-left:auto;margin-right:auto;'></a>
                        <p>
                       <font style='font-size:14px;font-family:Times New Roman;'>".$c."...<a href='berita.php?id_berita=$baris2[id_berita]' style='color:green;''>Selanjutnya</a></font><br>
                        </p> 
                        </p>
                      </div>
                    </div> 
                  </div>
                  ";}}} ?>                  
                 <div class="w3-bar w3-center">
<?php for ($i=1; $i<=$pages ; $i++){ ?>
<a href="?halaman=<?php echo $i; ?>" class="w3-button w3-hover-green active" style="color: white;background-color: green;"><?php echo $i; ?></a>
  <?php } ?>
</div>
                  </div>
                </div>
                <!-- end course content container -->
                <!-- start course pagination -->
               
                <!-- end course pagination -->
              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Berita Terkini</h3>
                    <ul class="mu-sidebar-catg">
                    <?php 
                        $abc = mysqli_query($koneksi,"select min(id_berita) id_berita from berita");
    while($baris1 = mysqli_fetch_array($abc)){
    $id1  = $baris1[0];
    $ab   = mysqli_query($koneksi,"select max(id_berita) id_berita from berita");
    while($baris = mysqli_fetch_array($ab)){
    $id = $baris[0];
    for ($i=$baris1[0]; $i<=$id; $i++) {
    $tampil = mysqli_query($koneksi,"select * from berita where id_berita=$i");
    while ($baris2 = mysqli_fetch_array($tampil)){ 
    	echo "<li><a href='berita.php?id_berita=$i'>".$baris2['judul']."</a></li>";}}}}?>
                    </ul>
                  </div>
                  <!-- end single sidebar -->
                  
                  <!-- end single sidebar -->
                </aside>
                <!-- / end sidebar -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
	
	<footer id="footer">
		<div class="container">
			<section>
				<article class="col-1">
					<h3 style="font-size: 35px;">Kontak</h3>
					<ul>
						<li class="address"><a href="#">Jl. Cipedes Tengah No. 8 Kelurahan Cipedes Kecamatan Sukajadi Kota Bandung 40162</a></li>
						<li class="mail"><a href="#">citrawinaya@yahoo.com</a></li>
						<li class="phone last"><a href="#">081321453346 | 022 (2039507)</a></li>
					</ul>
				</article>
				<article class="col-2">
					<h3 style="font-size: 35px;">Tentang Kami</h3>
					<p>SDIT Citrawinaya merupakan salah satu Lembaga Pendidikan Dasar yang Menerapkan Sistem Pembelajaran sesuai dengan Metode Ummi.</p>
				</article>
				<article class="col-2">
					<h3 style="margin-left: 74px; font-size: 35px;">Lokasi</h3>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.990857782354!2d107.58889005043505!3d-6.891696069330601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e663e8f3b623%3A0x404c8319abdacac4!2sSekolah+Dasar+Islam+Terpadu+Citra+Winaya!5e0!3m2!1sid!2sid!4v1550191820294" width="250" frameborder="0" style="border:0" allowfullscreen></iframe>
				</article>
				<article class="col-3" >
					<h3 style="font-size: 35px;">Sosial Media</h3>
					<p>Ikuti Sosial Media Kami Untuk Mendapatkan Informasi Lebih Lanjut</p>
					<ul>
						<li class="facebook"><a href="https://www.facebook.com/pages/SD-IT-Citra-Winaya/687782618026656">Facebook</a></li>
						<li class="google-plus"><a href="#">Google+</a></li>
						<li class="twitter"><a href="#">Twitter</a></li>
						<li class="pinterest"><a href="#">Pinterest</a></li>
					</ul></div>
				</article>
			</section>
			<p class="copy">Copyright 2019 SDIT Citra Winaya. Designed by DSM</a>. All rights reserved.</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->

	<div id="fancy">
		<h2>Request information</h2>
		<form action="#">
			<div class="left">
				<fieldset class="mail"><input placeholder="Email address..." type="text"></fieldset>
				<fieldset class="name"><input placeholder="Name..." type="text"></fieldset>
				<fieldset class="subject"><select><option>Choose subject...</option><option>Choose subject...</option><option>Choose subject...</option></select></fieldset>
			</div>
			<div class="right">
				<fieldset class="question"><textarea placeholder="Question..."></textarea></fieldset>
			</div>
			<div class="btn-holder">
				<button class="btn blue" type="submit">Send request</button>
			</div>
		</form>
	</div>

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php  
include ('../Config.php'); 
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      header("location:Index.php");  
 }  
 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Data Tidak Boleh Kosong!!!")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($koneksi, $_POST["username"]);  
           $password = mysqli_real_escape_string($koneksi, $_POST["password"]);  
           $password = md5($password);  
           $query = "INSERT INTO user (username, password) VALUES('$username', '$password')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Registrasi Berhasil)</script>';  
           }  
      }  
 }  
 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Kedua Kolom Wajib Di isi!")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($koneksi, $_POST["username"]);  
           $password = mysqli_real_escape_string($koneksi, $_POST["password"]);  
           $password = md5($password);  
           $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";  
           $result = mysqli_query($koneksi, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                $_SESSION['username'] = $username;  
                header("location:Index.php");  
           }  
           else  
           {  
                echo '<script>alert("Detail Penggunaan yang Salah!")</script>';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Login</title>  
           <!-- <script src="bootstrap-4.2.1-dist/js/"></script> -->
           <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   -->
          <link rel="stylesheet" type="text/css" href="bower_components/stylelogin.css"> 
          <link href="assets/css/font-awesome.css" rel="stylesheet" />
          <link rel="icon" type="image/png" href="bower_components/logo.jpg" />
           <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   -->
      </head>  
      <body style="background-image: url(bower_components/bg.jpg);background-size: cover;">  
           <br /><br />  
           <div class="box" style="width:500px;opacity: 0.8;">  
                <!-- <h3 align="center"></h3>   -->
                <img src="bower_components/logo.jpg" width=40% style="display: block;margin-left: auto;margin-right: auto;">
                <h2 align="center" style="font-family: aharoni;">Admin</h2>  
                <br />  
                <form method="post">  
                    <div class="inputBox">
                       <input type="text" name="username" required="">
                        <label ><span class="fa fa-user"> Username</span></label>
                    </div>
                    <div class="inputBox">
                      <input type="Password" name="password" required="">
                      <label ><span class="fa fa-lock"> Password</span> </label>
                    </div>
                    <input type="submit" name="login" value="Login" class="btn btn-info" /> 
                    <!-- <p align="center"><a href="user.php">Belum Punya Akun?</a></p>   -->
                </form>    
           </div>  
      </body>  
 </html>  
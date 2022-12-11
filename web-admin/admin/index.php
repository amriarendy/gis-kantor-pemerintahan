<?php
session_start();
$koneksi = new mysqli("localhost","root","","db_kantordinas");

if (!isset($_SESSION['admin']))
{
  echo "<script>alert('Anda Harus Login Dahulu');</script>";
  echo "<script>location'login.php';</script>";
  header('location:login.php');
  exit();
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin Kantor</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Administator Kantor Pemerintahan  </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
						
          <li> <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Home</a></li>
          <li> <a  href="index.php?halaman=user"><i class="fa fa-dashboard fa-3x"></i> user</a></li>
          <li> <a  href="index.php?halaman=kantor"><i class="fa fa-dashboard fa-3x"></i> Kantor</a></li>
          <li> <a  href="index.php?halaman=pelayanan"><i class="fa fa-dashboard fa-3x"></i> Pelayanan</a></li>
					<li> <a  href="index.php?halaman=berita"><i class="fa fa-dashboard fa-3x"></i> Berita</a></li>
					<li> <a  href="index.php?halaman=gambar"><i class="fa fa-dashboard fa-3x"></i> Gambar</a></li>
          <li> <a  href="index.php?halaman=komen"><i class="fa fa-dashboard fa-3x"></i> komen</a></li>
          <li> <a  href="index.php?halaman=komen_berita"><i class="fa fa-dashboard fa-3x"></i> komen berita</a></li>
          <li> <a  href="index.php?halaman=logout"><i class="fa fa-dashboard fa-3x"></i> logout</a></li>
					
                     
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			<?php
			if (isset($_GET['halaman']))
			{
				if  ($_GET['halaman']=="berita")
				{
					include 'berita.php';
				}
				elseif  ($_GET['halaman']=="kantor")
				{
					include 'kantor.php';
				}
				elseif  ($_GET['halaman']=="pelayanan")
				{
					include 'pelayanan.php';
				}
				elseif  ($_GET['halaman']=="gambar")
				{
					include 'gambar.php';
				}
				elseif  ($_GET['halaman']=="user")
				{
					include 'user.php';
				}
        elseif  ($_GET['halaman']=="komen")
        {
          include 'komen.php';
        }
        elseif  ($_GET['halaman']=="hapuskomen")
        {
          include 'hapuskomen.php';
        }
        elseif  ($_GET['halaman']=="komen_berita")
        {
          include 'komen_berita.php';
        }
        elseif  ($_GET['halaman']=="hapuskomenberita")
        {
          include 'hapuskomenberita.php';
        }
        elseif  ($_GET['halaman']=="tambah_kantor")
        {
          include 'tambah_kantor.php';
        }
        elseif  ($_GET['halaman']=="tambah_berita")
        {
          include 'tambah_berita.php';
        }
        elseif  ($_GET['halaman']=="tambah_komen")
        {
          include 'tambah_komen.php';
        }
        elseif  ($_GET['halaman']=="tambah_gambar")
        {
          include 'tambah_gambar.php';
        }
        elseif  ($_GET['halaman']=="hapus_gambar")
        {
          include 'hapus_gambar.php';
        }
        elseif  ($_GET['halaman']=="ubah_gambar")
        {
          include 'ubah_gambar.php';
        }
        elseif  ($_GET['halaman']=="tambah_pelayanan")
        {
          include 'tambah_pelayanan.php';
        }
        elseif  ($_GET['halaman']=="hapuskantor")
        {
          include 'hapuskantor.php';
        }
        elseif  ($_GET['halaman']=="ubahkantor")
        {
          include 'ubahkantor.php';
        }
        elseif  ($_GET['halaman']=="ubahpelayanan")
        {
          include 'ubahpelayanan.php';
        }
        elseif  ($_GET['halaman']=="hapuspelayanan")
        {
          include 'hapuspelayanan.php';
        }
        elseif  ($_GET['halaman']=="hapusberita")
        {
          include 'hapusberita.php';
        }
        elseif  ($_GET['halaman']=="ubahberita")
        {
          include 'ubahberita.php';
        }
        elseif  ($_GET['halaman']=="ubah_user")
        {
          include 'ubah_user.php';
        }
        elseif  ($_GET['halaman']=="hapus_user")
        {
          include 'hapus_user.php';
        }
        elseif  ($_GET['halaman']=="tambah_user")
        {
          include 'tambah_user.php';
        }
        elseif  ($_GET['halaman']=="logout")
        {
          include 'logout.php';
        }
			}
			else
			{
				include 'home.php';
			}
			?>
					  
		</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

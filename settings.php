<?php 
include("koneksi.php");
session_start();
if(!isset($_SESSION['login_user']))
    {
    header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Telbooks | Settings</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="Image/img_0000s_0002_logo.png">
</head>
<body class="body-login">
	<header id="intro-head-profil">
        <div class="wrapper">
        	<form class="search-p">
        		<div class="img-logo">
            		<a href="home.php"><img src="Image/img_0000s_0002_logo.png" height="50px"></a>
            	</div>
  				<input type="text" class="search" name="search">
  				<h1>Settings</h1>
			</form> 
        </div>
    </header>

	<nav class="navigation">
		<div class="wrapper-nav">
			<ul>
            	<li><a href="home.php">Home</a></li>
            	<li><a href="profil.php">Profil</a></li>
            	<ul class="left">
                	<li><a href="settings.php">Settings</a></li>
            	</ul>
        	</ul>
        </div>
	</nav>

	<section >
		<div class="wrapper">
			<div class="form-module-profil-1">
            	<div class="main-form_profil-1">
             		<form method="post" action="" class="box-setting" role="form" data-toggle="validator">
             			<h1>Ingin Keluar...</h1>
             			<a href="logout.php" class="sign-btn">Sign Out</a>
                        <hr class="line">
                        <h1>Berikan penilaian kalian tentang Telbooks</h1>
                        <a href="#penilaian" class="sign-btn">Klik disini</a>
                        <hr class="line">
                        <h1 id="txt-info">Info lebih lanjut</h1>
                        <div id="end-nav-settings">
                            <nav>
                                <ul>
                                    <p>
                                    <li><a href="contact.php" class="contac">Contact Us</a></li>
                                    <li><a href="about.php" class="abo">About</a></li>
                                    </p>
                                </ul>
                            </nav>
                        </div>
             		</form>
             	</div>
            </div>
		</div>
	</section>

	<footer class="footer">
    	<div class="wrapper">
        </div>
    </footer>
</body>
</html>
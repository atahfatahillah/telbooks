<?php 
include("koneksi.php");
ini_set('display_errors','Off');

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
	<title>Telbooks | Home</title>
	<link rel="shortcut icon" href="Image/img_0000s_0002_logo.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style type="text/css">
label {
    text-align: justify-all;
}
</style>
<body class="body-login">

	<header id="intro-head-profil">
        <div class="wrapper">
        	<form class="search-p">
        		<div class="img-logo">
            		<a href="home.php"><img src="Image/img_0000s_0002_logo.png" height="50px"></a>
            	</div>
  				<input type="text" class="search" name="search">
  				<h1>Home</h1>
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

    <section>
        <div class="wrapper">
        <div class="form-module-profil-1">
            <div class="main-form_profil-1">
                <div class="contact-pic">
                    <img src="image/img_0000s_0002_logo.png" height="100px" width="100px">
                </div>
                <form method="post" action="" class="box-contact" role="form">
                    <p><label>Nama   :</label></p>
                    <p><label>Email  :</label></p>
                    <p><label>Lahir  :</label></p>
                    <p><label>Gender :</label></p>
                    <p><label>Ponsel :</label></p>
                    <p><label>Status :</label></p>
                    <p><label>Facebook ID  :</label></p>
                    <p><label>Twitter  :</label></p>
                    <p><label>BBM ID  :</label></p>
                    <p><label>Line ID  :</label></p>
                </form>
            </div>
        </div>
</body>
</html>
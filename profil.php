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
	<title>Telbooks | Profil</title>
	<link rel="shortcut icon" href="Image/img_0000s_0002_logo.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="body-login">

	<header id="intro-head-profil">
        <div class="wrapper">
        	<form class="search-p">
        		<div class="img-logo">
            		<a href="home.html"><img src="Image/img_0000s_0002_logo.png" height="50px"></a>
            	</div>
  				<input type="text" class="search" name="search">
  				<h1>Profil</h1>
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
    	<div class="color-banner">
    		
    	</div>
    	<div class="wrapper">
    		<div class="form-module-profil-pic">
    			<div class="profil-pic">
    				<img src="image/img_0000s_0002_logo.png" class="pic" height="20px">
    				<ul>
    					<li><a href="#">Upload</a></li>
    					<li><a href="#">Edit</a></li>
    				</ul>
                </div>
    		</div>
            <div class="form-module-profil">
            	<div class="main-form_profil">
             	<form method="post" action="" class="box-profil" role="form" data-toggle="validator">
                 	<p><label for="fnama">Nama Lengkap</label> <input type="text" class="f-nama" placeholder=""></p>
                 	
                 	<p><label for="email">Email</label> <input type="email" class="e-mail" placeholder=""></p>
                    
                    <p><label for="fnama">Sandi</label> <input type="password" data-minlength="6" class="pass-word" id="inputPassword" value="" name="password" placeholder=""></p>
                    
                    <p><label for="lnama">Konirmasi sandi</label> <input type="password" data-minlength="6" class="pass-word" id="inputPassword" value="" name="password" placeholder=""></p>
                    
                    <p><label for="lhr">Tanggal lahir</label><input type="text" class="password" id="inputPassword" value="" name="ttl" placeholder="Day - Month - Year" required=""></p>
                
                    
                    <p><label for="gen">Gender</label></p>
                        <p><select id="k-el" name="kelamin">
                                <option value="no" selected>saya ...</option>
                                <option value="laki laki">Laki - Laki</option>
                                <option value="perempuan">Perempuan</option>
                                <option value="other">Other</option>
                          </select></p>
                    
                    <p><label for="pon">Ponsel</label> <input type="tel" class="p-on" value="" name="no_ponsel"></p>
                    
                    <p><label for="gen">Status</label></p>
                    <p><select id="k-el" name="stat">
                        <option value="no" selected>- Status -</option>
                        <option value="guru">Guru</option>
                        <option value="pelajar">Pelajar</option>
                        <option value="karyawan">Karyawan</option>
                        </select>
                    </p>
                    
                    <div class="social">
                            <p class="socl"><label  for="social"> Social Media </label></p>
                            <hr class="line">    
                            <p><label for="idf">Facebook ID</label></p>
                            <p><input type="text" class="email" value="" name="facebook" placeholder=""></p>
                            <p><label for="idf">Twitter ID</label></p>
                            <p><input type="text" class="email" value="" name="twitter" placeholder=""></p>
                            <p><label for="idf">BBM ID</label></p>
                            <p><input type="text" class="email" value="" name="bbm" placeholder=""></p>
                            <p><label for="idf">Whatsapp</label></p>
                            <p><input type="text" class="email" value="" name="wa" placeholder=""></p>
                            <p><label for="idf">Line ID</label></p>
                            <p><input type="text" class="email" value="" name="line"></p>
                            <p><label for="idf">Telegram</label></p>
                            <p><input type="text" class="email" value="" name="lete" placeholder=""></p>
                        </div>
                	</form>
               	</div>
            </div> 
            
           	<div class="form-module-profil-2">
           		<a href="#save" class="save-btn">Save</a>
           	</div>
        </div>
    </section>

    <footer class="footer">
    	<div class="wrapper">

           
            
        </div>
    </footer>

</body>
</html>
<?php
require_once "koneksi.php";
ini_set('display_errors','Off');

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $username = $_POST["uname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $kelas = $_POST["kelas"];
    $angkatan = $_POST["angkatan"];
    $jurusan = $_POST["jurusan"];
    $ttl = $_POST["ttl"];
    $gender = $_POST["gender"];
    $notelp = $_POST["notelp"];
    $status = $_POST["status"];
    $facebook = $_POST["facebook"];
    $twitter = $_POST["twitter"];
    $bbm = $_POST["bbm"];
    $idline = $_POST["idline"];

    $name = mysqli_real_escape_string($konek, $name);
    $username = mysqli_real_escape_string($konek, $username);
    $email = mysqli_real_escape_string($konek, $email);
    $password = mysqli_real_escape_string($konek, $password);
    $password = md5($password);
    $kelas = mysqli_real_escape_string($konek, $kelas);
    $angkatan = mysqli_real_escape_string($konek, $angkatan);
    $jurusan = mysqli_real_escape_string($konek, $jurusan);
    $ttl = mysqli_real_escape_string($konek, $ttl);
    $gender = mysqli_real_escape_string($konek, $gender);
    $notelp = mysqli_real_escape_string($konek, $notelp);
    $status = mysqli_real_escape_string($konek, $status);
    $facebook = mysqli_real_escape_string($konek, $facebook);
    $twitter = mysqli_real_escape_string($konek, $twitter);
    $bbm = mysqli_real_escape_string($konek, $bbm);
    $idline = mysqli_real_escape_string($konek, $idline);

    $sql = "SELECT uname FROM pengguna WHERE uname='$username'";
    $result = mysqli_query($konek,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
        if(mysqli_num_rows($result) == 1)
        {
        $msg = "Sorry ... Udah ada usernamenya";
        }
        else
        {
        $query = mysqli_query($konek, "INSERT INTO pengguna (name, email, password, uname, kelas, angkatan, jurusan, ttl, gender, notelp, status, facebook, twitter, bbm, idline)VALUES ('$name', '$email', '$password', '$username', '$kelas', '$angkatan', '$jurusan', '$ttl', '$gender', '$notelp', '$status', '$facebook', '$twitter', '$bbm', '$idline')");
 
        if($query)
        {
        $msg = "Daftar berhasil! Silakan Login!";
        }
    }
    }
    ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Telbooks</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="shortcut icon" href="Image/img_0000s_0002_logo.png">
</head>

<body class="body-login">

	<header id="intro-head">
    	<div class="wrapper">
        
        	<div class="head-nav">
        		<div class="logo">
            		<a href="index.php"><img src="Image/img_0000s_0002_logo.png" height="70px"></a>
            	</div>
            
        		<div class="intro-nav-sign">
					<nav>
						<ul>
							<li><a href="login.php"><button class="login-btn" style="vertical-align:middle"><span>Log in</span></button></a></li>
						</ul>
					</nav>
            	</div>
            </div>
            
        </div>
    </header>
    
    <section>
    	<div class="wrapper">
        	
            <h1 id="intro-sign"> Buat Akun Telbooks Anda </h1>
            <h4 style="text-align: center;font-family: arial;margin-top: 2%;"><?php echo $msg; ?></h4>
            <div>
                <div class="form-module">
                
                <div class="main-form_signup">
                
                    <form method="post" action="" class="box-signup" role="form" data-toggle="validator">

<!--Form nama & email-->
                        <p><label for="fnama">Nama Lengkap</label></p>
                        <p><input type="text" class="fnama" value="" name="name" required="" placeholder="Alex Example"></p>
                        <p><label for="lnama">Username</label></p>
                        <p><input type="text" class="lnama" value="" name="uname" required="" placeholder="AlexExample"></p>
                        <p><label for="email">Email</label></p>
                        <p><input type="email" class="email" value="" name="email" required="" placeholder="Alex@domain.com"></p>
<!--End Form nama & email-->
<!--_________________-->
<!-- Form Kelas, Jurusan, Angkatan-->
                        <p><label for="lhr">Tingkatan</label></p>
                        <p>
                            <input class="lhr" name="kelas" placeholder="Kelas [Ex : XI Tel 9]" required="">
                            <input id="bln" name="jurusan" placeholder="Jurusan [Ex : RPL]" required="">
                            <input class="tgl" name="angkatan" placeholder="Angkatan [Ex : 23]" required="">
                        </p>
<!--end Form kelas, jurusan, angkatan-->
<!--_________________-->
<!--Form Password-->
                        <div class="form-group-pass">
                            <p><label for="password">Password</label></p>
                                <div class="form-group_col">
                                    <p><input type="password" data-minlength="6" class="password" id="inputPassword" value="" name="password" placeholder="6 Digits" required=""></p>
                                </div>
                            <p><label for="password">Re-type Password</label></p>    
                                <div class="form-group_col">
                                    <p><input type="password" data-minlength="6" class="password" id="inputPassword" value="" name="confirm" placeholder="6 Digits" required=""></p>
                                </div>
                        </div>
<!--End Form Password-->
                        <div class="form-group-pass">
                            <p><label for="password">Tanggal Lahir</label></p>
                                <div class="form-group_col">
                                    <p><input type="text" class="password" id="inputPassword" value="" name="ttl" placeholder="Day - Month - Year" required=""></p>
                                </div>
                        </div>
<!--_________________-->
<!--Form Tanggal Lahir-->

<!--End Form Tanggal lahir-->
<!--_________________-->
<!--Form Gender-->
                        <p><label for="gen">Gender</label></p>
                        <p><select id="kel" name="gender" required="">
                            <option value=no selected>- Jenis Kelamin -</option>
                            <option value=lakilaki>- Laki laki -</option>
                            <option value=perempuan>- Perempuan -</option>
                        </select></p>
<!--End form gender-->
<!--_________________-->
                        <div class="box-signup">
                            <p><label for="gen">Status</label></p>
                            <p><select id="kel" name="status" required="">
                                <option value=none selected>- Pilih Status -</option>
                                <option value=siswa>- Siswa -</option>
                                <option value=guru>- Guru -</option>
                                <option value=karyawan>- Karyawan -</option>
                                </select>
                            </p> 
                        </div>
                        <p><label for="notelp">No. Telp</label></p>
                        <p><input type="text" class="fnama" value="" name="notelp" required="" placeholder=""></p>
                </div>
<!--form status and more identity -->
            </div>
            <div class="form-module">
                
                    <div class="main-form_signup box-signup">
                        <div class="social">
                            <p class="socl"><label  for="social"> Social Media </label></p>
                            <hr class="line">
                            <p><label for="idf">Facebook ID</label></p>
                            <p><input type="text" class="email" value="" name="facebook"></p>
                            <p><label for="idf">Twitter ID</label></p>
                            <p><input type="text" class="email" value="" name="twitter" placeholder="@example"></p>
                            <p><label for="idf">BBM Pin</label></p>
                            <p><input type="text" class="email" value="" name="bbm"></p>
                            <p><label for="idf">Line ID</label></p>
                            <p><input type="text" class="email" value="" name="idline"></p>
                            </p>
                        </div>
                                                <!--_________________-->
<!--Form telp, terms, & button-->
                        <p id="ckbx"><input type="checkbox" class="ck" value="" name="check" required="">Saya Menyetujui Persyaratan dan Kebijakan Privasi Telbooks</p>
                        <!--Tombol Sumbit-->
                        <input class="sign-up-input" type="submit" name="submit" id="button" value="Register!" />
<!--End form telp, terms, & button-->
<!--_________________-->
                    </div>
                    </div>
                    </form>
            </div>
            
<!--end form status and more identity -->          
        </div>
    </section>
    
    <footer class="footer">
    	<div class="wrapper">
        	
            <div id="end-desc">
            	<p><a href="index.php"> 2016 &copy; Telbooks </a></p>
            </div>
            
            <div id="end-nav">
            	<nav>
        			<ul>
            			<li><a href="contact.php">Contact Us</a></li>
                		<li><a href="about.php">About</a></li>
            		</ul>
        		</nav>
            </div>
            
        </div>
    </footer>

</body>
</html>


<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Telbooks</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="shortcut icon" href="Image/img_0000s_0002_logo.png">
</head>
<body id="body-index">
    <header id="header">
        <div class="wrapper">
            <div class="intro-nav">
                <nav>
                    <ul>
                        <li><a href="login.php"><button class="login-btn" style="vertical-align:middle"><span>Log in</span></button></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <section id="section">
        <div class="wrapper">
            <div class="main-img">
                <img src="Image/img_0000_Telbooks-copy.png">
            </div>
            <div class="main-text">
                <h1> Find Person you Meet In </h1> 
                <h1> Telkom Schools </h1>
            </div>
            <div class="main-form">
                <form method="post" action="">
                    <input type="text" class="in-nama" value="" name="name" placeholder="Nama">
                    <input type="text" class="in-kelas" value="" name="kelas" placeholder="Kelas">
                <select id="op-jurusan" name="jurusan">
                            <option value=no selected>- Pilih Jurusan -</option>
                            <?php
                                require_once "koneksi.php";
                                $data   = "SELECT * FROM jurusan";
                                $sql    = mysqli_query($konek, $data);
                                while($j = mysqli_fetch_array($sql)){
                                echo "<option value=$j[id_jurusan]>$j[nama_jurusan]</option>";
                            } 
                            ?>
                </select>
                <select id="op-angkatan" name="angkatan">
                            <option value=no selected>- Pilih Angkatan -</option>
                            <?php
                                require_once "koneksi.php";
                                $data   = "SELECT * FROM angkatan";
                                $sql    = mysqli_query($konek, $data);
                                while($j = mysqli_fetch_array($sql)){
                                echo "<option value=$j[id_angkatan]>$j[angkatan]</option>";
                            } 
                            ?>
                </select>
                <a href="find.php" class="find-btn">Find</a>
                </form>
            </div>           
        </div>
    </section>
    <footer id="footer">
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
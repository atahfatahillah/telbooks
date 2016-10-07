<?php
include("koneksi.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password received from loginform
$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$sql_query="SELECT id FROM user WHERE username='$username' and password='$password'";
$result=mysqli_query($conn,$sql_query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);// If result matched $username and $password, table row must be 1 row
if($count==1)
{
$_SESSION['login_user']=$username;
 
header("location: home.php");
}
else
{
$error="Username or Password is invalid";
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
	
    <header class="intro-head">
    		<div class="wrapper">
            </div>
    </header>
    
    <section>
    	<div class="wrapper">
        
        	<div class="form-module">
            
        		<div class="main-img">
            		<a href="index.php"><img id="img-tp" src="Image/img_0000s_0002_logo.png" height="100px"></a>
            	</div>
            
            	<div id="intro-txt">
            		<h4> hello </h4>
            	</div>
                <h4 style="text-align: center;font-family: arial;margin-top: 2%;"><?php echo $error; ?></h4>
            	<div class="main-form_login">
            		<form method="post" action="" class="box-login" name="loginform">
                		<p><input type="text" class="txt-user" value="" name="uname" placeholder="Username" required=""></p>
        				<p><input type="password" class="txt-pass" value="" name="password" placeholder="Password" required=""></p>
                        <p><input class="login-btn_input" type="submit" name="button" id="button" value="Log in"></input></p>
                    	<p class="txt">Or</p>
                	</form>
            	</div>
            
            	<div class="txt-sign">
            		<p><a href="signup.php">Create New Account</a></p>
            	</div>
            
        	</div>   
             
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
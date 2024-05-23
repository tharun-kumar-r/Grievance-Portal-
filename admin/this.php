<?php
include "../include/@config-domain.php";
require "../include/resmail/PHPMailerAutoload.php";
session_start();
$myfile = fopen("../clgname.txt", "r") or die("error");
$clgname = "OTP For Grievance @" . fread($myfile,filesize("../clgname.txt"));
fclose($myfile);

if(!empty($_SESSION['admin_lock']))
{
	echo '<script>window.location="dashboard";</script>';

}



if(isset($_POST['val1']))
{

$email = $_POST['email'];
$pass = md5($_POST['pass']);
$_SESSION['admin_lock'] = $email;

$sql = mysqli_query($con,"SELECT * FROM admin WHERE email='$email' and pass='$pass'");
if(mysqli_num_rows($sql)> 0)
{
    $_SESSION['admin_lock'] = $email;
echo"<script>window.location='dashboard';</script>";
    
}
else{
    $error ='<font size="2" color="red">Invalid login credentials!.</font>';
}
}


?>

<!-- begain code -->


<html>
	<head>

	<style>
*{
	padding:0px;
	margin:0px;
}
html,body{
	height:100%;
	place-items:center;
	align-items:center;
	display:grid;
}
</style>
<link rel="icon" type="image/png" href="../img/123.png" />
<link rel="stylesheet" href="../font/font.css">
<link rel="stylesheet" href="../css/style.css">

	</head>
<body bgcolor="#f6f9fa"><center>
<div class="contain">
<?php include "../include/brand_name.php"; ?>
<form method="POST">
<div style="margin:10px;">
<font class="sign">Admin Login</font>
</div>
<div class="fx1"><font color="#4b4b4b" size="2">Please enter the email & password and click on login!.</font></div>
<div class="fx1" style="margin:6px;"><?php echo $error ?></font>
<div style="margin:10px;"><input type="email" value="<?php echo $email ?>" name="email" placeholder="Email" class="ginput" required></div> 
<div style="margin:10px;"><input type="password" name="pass" placeholder="Password" class="ginput" required></div> 
<div style="margin:10px;"><input type="submit" name="val1" value="LOGIN" class="submit1"></div> 
</form>
</div>
<br>
<?php include "../include/down.php"; ?>







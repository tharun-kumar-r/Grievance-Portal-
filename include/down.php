<?php 
$myfile = fopen("./clgname.txt", "r") or die("error");
$clgname = "Copyrights &copy; " . fread($myfile,filesize("./clgname.txt")) ." ".date('yy') . "<br>Developed by <a class='links' href='https://www.rajsoft.ga' target='_blank'>Rajsoft tech</a>";
fclose($myfile);

?>

<font color="#696969" size="2"><?php echo $clgname ?></font><br><br>












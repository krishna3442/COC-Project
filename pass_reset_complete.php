<?php
$conn=mysql_connect("localhost","root","Krishnasai123");
$db=mysql_select_db("project",$conn);
$newpass=$_POST['newpass'];
$newpass1=$_POST['newpass1'];
$post_userid=$_POST['userid'];
$code=$_GET['code'];
if($newpass=$newpass1)
{
	$enc_pass=md5($newpass);
	mysql_query("UPDATE signup SET password='$enc_pass' WHERE userid='$post_userid'");
	mysql_query("UPDATE signup SET passreset='0' WHERE userid='$post_userid'");
	echo "password has been updated<p> <a href='login.php'>click here to login</a>
	
}
else
{
	echo "passswords must match <a href='forgot_pass.php?code=$code&userid=$post_userid'>click here to go back</a>";
}


?>
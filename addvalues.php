<?php
 $conn=mysql_connect("localhost","root","Krishnasai123");
 $db=mysql_select_db("project",$conn);


if($conn)
{
	echo "connected";
	if($db)
	{
		echo "hell yeah";
	}
	else
	{
		echo "fu"; 
	}
}
else
{
	echo "not connected";
}
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mob=$_POST['mobileno'];
$email=$_POST['email'];
$uid=$_POST['userid'];
$pass=$_POST['password'];
$sql="INSERT INTO signup(firstname,lastname,mobileno,email,userid,password) VALUES('$fname','$lname',$mob,'$email','$uid','$pass')";
if(mysql_query($sql))
header("location:login.php");

?>
 
 
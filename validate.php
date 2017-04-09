<?php
 
 if(isset($_POST['login']))
 {
	 
	 $userid=$_POST['userid'];
	 $password=$_POST['password'];
	 
	 
	 //to prevent sql injection
	 $userid=stripcslashes($userid);
	 $password=stripcslashes($password);
	 $userid=mysql_real_escape_string($userid);
	 $password=mysql_real_escape_string($password);
	 
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
	 $result=mysql_query("select*from signup where userid='$userid' and password='$password' ")or die("failed to query database".mysql_error());
	 
	 $row=mysql_fetch_array($result);
	 
	if($row['userid']==$userid && $row['password']==$password)
	 {
		 echo "pass ";
		
		 if(isset($_POST['remember']))
       {  
		 setcookie('userid',$userid,time()+60*60*7);
		 setcookie('password',$password,time()+60*60*7);
		 
		 }
		 session_start();
		 $_SESSION['userid']=$userid;
		$x=time();
	     $_SESSION['expire'] = $x + (30 * 60);
		
	    header("location: welcome.php");
	 }
	 else
	 {
		echo "Email  password is Invalid";
	
	
		  header("location:login.php");
		
	 }
 }
  else
  {
    header("location:login.php");
  }
  ?>
 
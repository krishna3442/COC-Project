<?php
$conn=mysql_connect("localhost","root","Krishnasai123");
$db=mysql_select_db("project",$conn);

if($_GET['code'])
{
	$get_userid=$_GET['userid'];
	$get_code=$_GET['code'];
	$query=mysql_query("SELECT * FROM signup WHERE userid='$get_userid'");
	while($row=mysql_fetch_assoc($query))
	{
		$db_code=$row['passreset'];
		$db_userid=$row['userid'];
	}
	if($get_userid==$db_userid && $get_code==$db_code)
	{
		echo "
		 <form action='pass_reset_complete.php?code=$get_code' method='POST'>
		   Enter a new password <br><input type='password' name='newpass'><br>
		   re-enter your password<br><input type='password' name='newpass1'><p>
		   <input type='hidden' name='userid' value='$db_userid'>
		   <input type='submit' value='Update Password!'>
		   </form>
		   ";
    }
}
if(!$_GET['code'])
{
echo "
<form action='forgot_pass.php' method='POST'>
Enter your userid<br><input type='text' name='userid'><p>
Enter your email<br><input type='text' name='email'><p>
<input type='submit' value='submit' name='submit'>
</form>
";
if(isset($_POST['submit']))
{
	$userid=$_POST['userid'];
	$email=$_POST['email'];
	$query=mysql_query("SELECT * FROM signup where userid='$userid'");
	$numrow=mysql_num_rows($query);
	if($numrow!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$db_email=$row['email'];
		}
		if($email==$db_email)
		{
			$code=rand(10000,1000000);
			$to=$db_email;
			$subject="password reset";
			$body =" please do not reply to this email.
			
			 click the link
			 
			 http://localhost/pro/forgot_pass.php?code=$code&userid=$userid ";
			 mysql_query("UPDATE signup SET passreset='$code' WHERE userid='$userid'");
			 mail($to,$subject,$body);
			 echo "check your email";
		}
		else
		{
			echo "enter correct email";
			
		}
	}
	else
	{
		echo "uid not exists";
	}
}
}

?>
<?php
    session_start();

    if (isset($_SESSION['userid'])) {
      
    
        $now = time(); 

        if ($now > $_SESSION['expire']) {
            session_destroy();
            echo "Your session has expired! <a href='index.php'>Login here</a>";
        }
        else 
		{ 
	   
		header("location:welcome.php");
           
		}
	}
?>
<!DOCTYPE html>
<html>
<head>

<style type="text/css">
header
{
  height:100px;
  position:fixed;
  background:#505050;
  width:100%;
}
.menu
{
float:right;
margin-right:10%;
margin-top:35px;
}
.menu ul
{
margin:0px;
padding:0px;
list-style:none;
}
.menu ul li
{
float:left;
}
.menu ul li a
{
color:#fff;
text-decoration:none;
margin-left:10px;
margin-right:10px;
}
th
{
	text-align:right;
}
div.login {
    
    color: white;
    margin: 20px 0 20px 0;
    padding: 200px;
} 
body
{
	background-image:url("logimg.jpg");
	background-size: 100%;
    background-repeat: no-repeat;
}
#userid
{
	border-radius:10px;
	box-sizing:border-box;
	padding:15px;
	width:500px;
}
#password
{
	border-radius:10px;
	box-sizing:border-box;
	padding:15px;
	width:500px;
}


	

</style>
</head>
<body>
<header>
<div class="menu">
     <nav>
	    <ul>
		   <li><a href="index.php">HOME</a></li>
		    <li><a href="signup.php">SIGNUP</a></li>
	    </ul>
		</nav>
	</div>
</header>
<div class="login">
<table cellpadding="5" cellspacing="10" align="center">
   <form method="post" action="validate.php">
          <tr><th>UserId</th><td><input type="text" required id="userid"  name="userid"></td></tr>
          <tr><th>Password</th><td><input type="password" required  id="password" name="password"></td></tr>
          <tr><td colspan="5" align="center"> <input type="checkbox" name="remember" value="1" id="rem">Remember Me</td> <td colspan="5" align="right"> <a href="forgot_pass.php">forgot password?</a> </td></tr>
		  
          <tr><td colspan="5" align="right"> <input type="submit" name="login" value="Login" id="sub"></td></tr>
   </form>
</table>
</div>
</body>
</html>
<?php
if(isset($_COOKIE['userid'])and isset($_COOKIE['password']))
{
	$userid=$_COOKIE['userid'];
	$password=$_COOKIE['password'];
	 echo "<script>
	 document.getElementById('userid').value='$userid';
	  document.getElementById('password').value='$password';
	  </script>";
	 
	 
}
 ?>
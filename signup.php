<!DOCTYPE html>
<html>
<head>
<style type="text/css">
th
{
	text-align:right;
}
div.signup {
    
    color: white;
    margin: 20px 0 20px 0;
    padding: 100px;
} 
	body
{
	background-image:url("logimg.jpg");
	background-size: 100%;
    background-repeat: no-repeat;
}

	
</style>
</head>
<body>
<div class="signup">
<table cellpadding="5" cellspacing="10" align="center">
   <form method="post" action="addvalues.php">
   
    <tr><th>First Name</th><td><input type="text" id="fname"  name="fname"></td></tr>
		 <tr><th>Last Name</th><td><input type="text" id="lname"  name="lname"></td></tr>
		  <tr><th>Mobile Number</th><td><input type="number" id="mobileno"  name="mobileno"></td></tr>
          <tr><th>Email</th><td><input type="email" id="email"  name="email"></td></tr>
		  <tr><th>UserId</th><td><input type="text" id="userid"  name="userid"></td></tr>
		   
		    
          <tr><th>Password</th><td><input type="password"  id="pass" name="password"></td></tr>
		  
          
          <tr><td colspan="5" align="right"> <input type="submit" name="signup" value="signup"></td></tr>
   </form>
</table>
</div>
</body>
</html>
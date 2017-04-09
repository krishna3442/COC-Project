<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>


<style>
body{
background-image: url("colorcoc.jpg");
background-size: 100%;
background-repeat: no-repeat;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:transparent;
	float:middle;
}

li {
    float: left;
}

li a {
    display:block;
    color: white;
    text-align: center;
    padding: 10px;
    text-decoration: none;
	
}

li a:hover {
    background-color:#af75b5;
}



</style>
</head>
<body>
<ul>
  <li><a>News</a></li>
  <li><a>War Zone</a></li>
  
  <li><a href="strategy.php">Strategy</a></li>
  <li><a>Chat Zone</a></li>
  <li><a>Store</a></li>
  <li><a>About</a></li>
  <?php
  if(!isset($_SESSION['userid']))
  {
	  	  echo "
  <li style = 'float:right;'><a href='signup.php'>SignUp</a></li>
<li style = 'float:right;'><a href='login.php'>Log In</a></li>";

  }
  else
  {
	  	 echo "<li style = 'float:right;'><a href='logout.php'>Logout</a></li>";
		 echo "<li style = 'float:right;'><a href='welcome.php'>welcome page</a></li>";

  }
?>
</ul>
<audio  src="coc1" autoplay="true" style= "display: none" type="audio/mpeg" >
</body>

</html>



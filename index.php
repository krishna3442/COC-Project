<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>


<style>
body{
background-image: url("b.jpg");
background-size: 100%;
background-repeat: no-repeat;
}
.floating-box {
    display: inline-block;
    width: 150px;
    height: 75px;
    margin: 10px;
    border: 3px solid #73AD21;  
}
.parent {
    width:400px;
    height:200px;
    
    
    position:relative;
	
}
img
{
	opacity:0.5;
	width:185px;
	height:85px;
}
img:hover {
    opacity: 2.0;
    
}
.div1 {position:absolute;bottom:0;right:0;width:185px;height:85px;background-image: url("");background-size: 300px 150px;}
.div2 {width:185px;height:85px;position:absolute;bottom:0;left:0;background-image: url("");background-size: 300px 150px;}
.div3 {width:185px;height:85px;position:absolute;top:0;right:0;}
.div4 {width:185px;height:185px;position:absolute;top:0;left:0;}
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
    background-color:#ADD8E6;
}



</style>
</head>
<body>
<ul>
  
  <li><a>Store</a></li>
  <li><a>ChatZone</a></li>
  
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
<div style="position: absolute; top: 60px; left: 450px; width: 110px; height: 50px;">
<div class="parent">
<div class="div1"><a href="strategy.php"><img src="Warzone1.png"></a></div>
<div class="div2"><a href="strategy.php"><img src="Strategy1.png"></a></div>
<div class="div3"><a href="strategy.php"><img src="NEWS1.png"></a></div>
<div class="div4"><a href="strategy.php"><img src="media1.png"></a></div>
</div>
</div>
<audio  src="coc1" autoplay="true" style= "display: none" type="audio/mpeg" >
</body>

</html>



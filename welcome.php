<?php
session_start();

if(!$_SESSION['userid']){
           session_destroy();
           header("location:index.php");
           exit();
        }
?>
<!DOCTYPE html>
<html>
<head>

<style>
header
{
  height:70px;
  position:fixed;
  background:  #008080;
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
margin-left:20px;
margin-right:-100px;
}

 
body
{
	background-image:url("cocimg.jpg");
	
	background-size: 100%;
    background-repeat: no-repeat;
}
.menul
{
float:left;
margin-right:10%;
margin-top:35px;
}
.menul ul
{
margin:0px;
padding:0px;
list-style:none;
}
.menul ul li
{
float:right;
}
.menul ul li a
{
color:#fff;
text-decoration:none;
margin-left:20px;
margin-right:20px;
}
</style>
</style>
</head>
<body>
<header>
<div class="menu">
     <nav>
	    <ul>
		   <li><a href="logout.php">LOGOUT</a></li>
		    
	    </ul>
		</nav>
	</div>
	<div class="menul">
     <nav>
	    <ul>
		<li><a href="u.php">UPLOAD BASES</a></li>
		   <li><a href="viewimage.php">VIEW BASES</a></li>
		   <li><a href="#">STRATEGIES</a></li>
		   <li><a href="index.php">HOME</a></li>
		    
	    </ul>
		</nav>
	</div>
</header>
</body>
</html>
<?php
session_start();

?>
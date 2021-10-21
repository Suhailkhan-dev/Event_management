<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wedding";
$er=" ";
if(isset($_POST['submit'])){
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email=$_POST['email'];
$password=$_POST['pwd'];

$sql="select * from admin where email='$email' AND password='$password'";

$reuslt = mysqli_query($conn,$sql);

$num =mysqli_fetch_array($reuslt);

if($num>0)
{  

  $name=$num['name'];
  session_start();
  $_SESSION['email']=$email;
  
	 header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/home1.php");
	}
	else
	{   
		$er="Invalid Username or password";

	}
}


echo <<<LOGIN
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bounce.css">
	<link rel="stylesheet" type="text/css" href="slide.css">
	<style type="text/css"> .bounce-top {
	-webkit-animation: bounce-top 5s both;
	        animation: bounce-top 5s both;
}
.slide-in-fwd-center {
	-webkit-animation: slide-in-fwd-center 5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
	        animation: slide-in-fwd-center 5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}
h1 {
    color: orange;
    margin-left: 20px;
}
button {size: 12px;border: black;background-color: orange;font-size: 16px; padding: 12px 28px; border-radius: 2px;text-align: center}
</style>
<body background="indian-wedding.png">
<h1 style="text-align:center;">
		<form method="POST" action="login.php">
			<h2 class="bounce-top"> <br> LOGIN ADMIN <br> <br>	
			<h3 class="slide-in-fwd-center"> Username <br>
			<p style="color: yellow">$er</p>
			<input type="email" placeholder ="Enter Email" name="email">
			<h3 class="slide-in-fwd-center"> Password <br>
			<input type="password" name="pwd"> <br> <br>
			<button type="submit" class="block" name="submit">LOGIN</button>
		</form>
</head>
</body>
<script>
  function preventBack() {
    window.history.forward();
  }
  setTimeout("preventBack()", 0);
  
  window.onunload = function() {
  window.alert("need to logout");
   
  };
</script>
</html>
LOGIN;
?>

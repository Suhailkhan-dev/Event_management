<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wedding";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];
	
	$fileExt = explode('.',$fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$fileNameNew = uniqid('',true).".".$fileActualExt;
				$fileDestination = '../images/'.$fileNameNew;
				move_uploaded_file($fileTmpName,$fileDestination);
				
				$picn=$fileNameNew;
				
	$sql="insert into pics (picn) values ('$picn')";
	$r=mysqli_query($conn,$sql);
	
 echo "<SCRIPT type='text/javascript'> 
        window.location.replace(\"http:gallery1.php\");
    </SCRIPT>";
	
	
?>
	
	
	
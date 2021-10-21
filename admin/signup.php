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

			
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];






$sql = "INSERT INTO admin (name,email,password) VALUES ('$name','$email','$password')";

if (mysqli_query($conn, $sql)) {
    $message = 'Submitted sucessfully.';

   echo "<SCRIPT type='text/javascript'> 
        window.location.replace(\"http:home1.php\");
    </SCRIPT>";


}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn); 

?>
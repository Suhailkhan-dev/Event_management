<!DOCTYPE html>
<html style="background-color:#d6b4e7;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finaldbms</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aguafina+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya:400,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alex+Brush">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean-1.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/File-Input---Beautiful-Input--Button-Approach-Jasny-Bootstrap.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic-1.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Projects-Clean.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
</head>

<body style="background-color:#d6b4e7;">
    <div style="height:71px;">
        <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean" style="height:73px;background-color:#663a82;margin-top:-1px;">
            <div class="container"><a class="navbar-brand" href="home.html" style="font-size:42px;color:rgb(255,255,255);font-family:'Alex Brush', cursive;"><br><strong>Wishberry</strong><br><br></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        
                        <li class="nav-item" role="presentation"><a class="nav-link" href="about.html" style="font-family:'Alex Brush', cursive;font-size:25px;color:rgb(255,255,255);">About Us</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="contactus.html" style="font-size:25px;font-family:'Alex Brush', cursive;color:rgb(255,255,255);">Contact Us</a></li>
                    </ul>
            </div>
    </div>
    </nav>
    </div>
    
    <div class="photo-gallery" style="background-color:#d6b4e7;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="font-size:56px;font-family:'Alex Brush', cursive;color:#663a82;">Gallery</h2>
            </div>
            <div class="row photos">
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

$sql="select * from pics";
$r=mysqli_query($conn,$sql);

$path="images/";

if(mysqli_fetch_row($r)>0)
{

                while($row=mysqli_fetch_array($r))
                {
                 $picn=$row['picn'];
				 
				echo "<div class='col-sm-6 col-md-4 col-lg-3 item'><a href='".$path.$picn."' data-lightbox='photos'><img class='img-fluid' src='".$path.$picn."'></a></div>";
				
				}
}
?>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/File-Input---Beautiful-Input--Button-Approach-Jasny-Bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>
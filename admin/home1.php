<?php
         $conn=mysqli_connect("localhost","root","","wedding");
		 
session_start();
$email=$_SESSION['email'];	
$sql="select * from admin where email='$email'";	 
$r=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($r);
$name=$row['name'];				
?>

<!DOCTYPE html>
<html>

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
        <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean" style="height:73px;background-color:#663a82;">
            <div class="container"><a class="navbar-brand"  style="font-size:42px;color:rgb(255,255,255);font-family:'Alex Brush', cursive;"><br><strong>Wishberry</strong><br><br></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">

                    </ul><button class="btn btn-primary" type="button" onclick="window.location.href='signup.html'" style="margin-right:20px; background-color:#fffdfd;color:#663a82;font-size:22px;font-family:'Alex Brush', cursive;">Insert User</button>
					<button class="btn btn-primary" type="button" onclick="window.location.href='logout.php'" style="background-color:#fffdfd;color:#663a82;font-size:22px;font-family:'Alex Brush', cursive;">Log Out</button></div>
    </div>
    </nav>
    </div>
    <div style="margin-top:45px;height:70px;width:100%;">
        <h1 style="height:60px;background-color:#663a82;font-size:40px;font-family:'Alex Brush', cursive;color:rgb(234,241,248);">Welcome:  <?PHP echo $name; ?></h1>
    </div>
    <div class="projects-clean" style="background-color:#d6b4e7;margin-top:2px;">
        <div class="container">
            <div class="intro"></div>
            <div class="row projects">
                <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="assets/img/micheile-henderson-406428-unsplash-1.jpg" style="background-image:url(&quot;assets/img/micheile-henderson-406428-unsplash.jpg&quot;);"><a class="btn btn-primary" role="button" href="newmenu.html" style="margin-top:30px;padding-right:30px;padding-left:30px;background-color:#fffffe;font-family:Alegreya, serif;font-size:25px;color:#75263d;">INSERT</a></div>
                <div
                    class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="assets/img/almos-bechtold-534205-unsplash.jpg" style="background-image:url(&quot;assets/img/almos-bechtold-534205-unsplash.jpg&quot;);"><a class="btn btn-primary" role="button" href="table.php" style="margin-top:30px;padding-right:30px;padding-left:30px;background-color:#fffffe;font-size:25px;font-family:Alegreya, serif;color:#75263d;">VIEW</a></div>
            <div
                class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="assets/img/loft.jpg"><a class="btn btn-primary" role="button" href="gallery1.php" style="margin-top:30px;padding-right:30px;padding-left:30px;background-color:#fffffe;font-size:25px;font-family:Alegreya, serif;color:#75263d;">GALLERY</a></div>
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
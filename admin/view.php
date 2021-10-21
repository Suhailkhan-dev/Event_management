<?php
                $conn=mysqli_connect("localhost","root","","wedding");

				$cid=$_GET['id'];
	$sql="SELECT * from clients where cid='$cid'";
    $sqlr=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($sqlr);
$clienttotal=$row['total'];	$clientemail=$row['email']; $clientph=$row['phno']; $clientadd=$row['address']; $date=$row['date']; $clientn=$row['name'];			


				$sql1="SELECT * from caterers where cid='$cid'";
    $sqlr1=mysqli_query($conn,$sql1);
    $row1=mysqli_fetch_assoc($sqlr1);
		$ctname=$row1['name']; $ctph=$row1['ph']; $ctc=$row1['cost'];

		$sql2="SELECT * from clothing where cid='$cid'";
    $sqlr2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_assoc($sqlr2);
		$clcost=$row2['cost']; $clname=$row2['name']; $clph=$row2['ph'];

		$sql3="SELECT * from decoration where cid='$cid'";
    $sqlr3=mysqli_query($conn,$sql3);
    $row3=mysqli_fetch_assoc($sqlr3);
		$dcost=$row3['cost']; $dname=$row3['decorator']; $dph=$row3['ph'];

		$sql4="SELECT * from makeup where cid='$cid'";
    $sqlr4=mysqli_query($conn,$sql4);
    $row4=mysqli_fetch_assoc($sqlr4);
		$mcost=$row4['cost']; $mname=$row4['name']; $mph=$row4['ph'];

		$sql5="SELECT * from music where cid='$cid'";
    $sqlr5=mysqli_query($conn,$sql5);
    $row5=mysqli_fetch_assoc($sqlr5);
		$mucost=$row5['cost']; $muname=$row5['name']; $muph=$row5['ph']; $mutype=$row5['type'];

		$sql6="SELECT * from photography where cid='$cid'";
    $sqlr6=mysqli_query($conn,$sql6);
    $row6=mysqli_fetch_assoc($sqlr6);
		$pcost=$row6['cost']; $pname=$row6['name']; $pph=$row6['ph'];

		$sql7="SELECT * from theme where cid='$cid'";
    $sqlr7=mysqli_query($conn,$sql7);
    $row7=mysqli_fetch_assoc($sqlr7);
		$tcost=$row7['cost']; $tname=$row7['type'];

		

		$sql9="SELECT * from venue where cid='$cid'";
    $sqlr9=mysqli_query($conn,$sql9);
    $row9=mysqli_fetch_assoc($sqlr9);
		$vcost=$row9['cost']; $vname=$row9['name']; $vaddress=$row9['address']; $vph=$row9['ph'];
		
		?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alex+Brush">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/css/ensign-form.css">
    <link rel="stylesheet" href="assets/css/ensign-form1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/PHP-Contact-Form-dark.css">
    <link rel="stylesheet" href="assets/css/PHP-Contact-Form-dark1.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/select2.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-color:#fce8e8;">
<nav class="navbar navbar-light navbar-expand-md" style="background-color:#663a82 ;">
        <div class="container-fluid"><a class="navbar-brand" href="home1.php" style="font-family:'Alex Brush', cursive;font-size:41px;color:rgba(255,255,255,0.9);">Wishberry</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="table.php" style="color:#ffffff;font-family:'Alex Brush', cursive;">Table</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="form.html" style="color:#ffffff;font-family:'Alex Brush', cursive;">Insert</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div id="contact" style="background-color:#ffffff;padding:17px;">
        <div class="container d-block d-flex flex-column align-items-center">
            <div class="intro">
                <h2 style="background-color:#663a82 ;width:494px;">DETAILS</h2>
            </div>
        </div>
    </div>
    <div class="register-photo" style="padding-top:78px;background-color:#663a82 ;">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(&quot;assets/img/seyedeh-hamideh-kazemi-Y4DNR1dyEKE-unsplash.jpg&quot;);"></div>
            <form method="post">
                <h2 class="text-center"><strong>Client Details</strong></h2><input class="form-control" type="text" name="name" placeholder="name" value=<?PHP echo $clientn; ?> readonly><input class="form-control" type="text" name="phone number" placeholder="phone number" value=<?PHP echo $clientph; ?> readonly><input class="form-control" type="text" name="address"
                    placeholder="address" value=<?PHP echo $clientadd; ?> readonly><input class="form-control" type="text" name="e-mail id" placeholder="e-mail id" value=<?PHP echo $clientemail; ?> readonly>
					<input class="form-control" type="text" name="date" placeholder="DATE" value=<?PHP echo $date; ?> readonly>
					<input class="form-control" type="text" name="total" placeholder="TOTAL" value=<?PHP echo $clienttotal; ?> readonly>
					</form>
        </div>
    </div>
    <div class="register-photo" style="padding-top:78px;background-color:#663a82 ;">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(&quot;assets/img/abby-savage-zNsSwsuyP3A-unsplash.jpg&quot;);"></div>
            <form method="post">
                <h2 class="text-center"><strong>Venue</strong></h2><input class="form-control" type="text" name="venue name" placeholder="venue name" value=<?PHP echo $vname; ?> readonly><input class="form-control" type="text" name="venue location" placeholder="venue location" value=<?PHP echo $vaddress; ?> readonly><input class="form-control" type="text"
                    name="phone number" placeholder="phone number" value=<?PHP echo $vph; ?> readonly><input class="form-control" type="text" name="cost" placeholder="cost" value=<?PHP echo $vcost; ?> readonly></form>
        </div>
    </div>
    <div class="register-photo" style="padding-top:78px;background-color:#663a82 ;">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(&quot;assets/img/dil-F35EmcotWPY-unsplash.jpg&quot;);"></div>
            <form method="post">
                <h2 class="text-center"><strong>Theme</strong></h2><input class="form-control" type="text" name="theme name" placeholder="theme name" value=<?PHP echo $tname; ?> readonly><input class="form-control" type="text" name="cost" value=<?PHP echo $tcost; ?> placeholder="cost" readonly></form>
        </div>
    </div>
    <div class="register-photo" style="padding-top:78px;background-color:#663a82 ;">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(&quot;assets/img/yellow-balloon-beside-white-balloon-226737.jpg&quot;);"></div>
            <form method="post">
                <h2 class="text-center"><strong>Decoration</strong></h2><input class="form-control" type="text" name="decoration theme" placeholder="decoration theme" value=<?PHP echo $dname; ?> readonly><input class="form-control" type="text" name="phone number" placeholder="phone number" value=<?PHP echo $dph; ?> readonly><input class="form-control"
                    type="text" name="cost" placeholder="cost" value=<?PHP echo $dcost; ?> readonly></form>
        </div>
    </div>
    <div class="register-photo" style="padding-top:78px;background-color:#663a82 ;">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(&quot;assets/img/celebration-colorful-colourful-cupcakes-587741.jpg&quot;);"></div>
            <form method="post">
                <h2 class="text-center"><strong>Caterers</strong></h2><input class="form-control" type="text" name="catering name" placeholder="catering name" value=<?PHP echo $ctname; ?> readonly><input class="form-control" type="text" name="phone number" placeholder="phone number" value=<?PHP echo $ctph; ?> readonly><input class="form-control" type="text"
                    name="cost" placeholder="cost" value=<?PHP echo $ctc; ?> readonly></form>
        </div>
    </div>
    <div class="register-photo" style="padding-top:78px;background-color:#663a82 ;">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(&quot;assets/img/clothes-1620x911.jpg&quot;);"></div>
            <form method="post">
                <h2 class="text-center" style="width:282px;"><strong>Clothing and Accessories</strong></h2><input class="form-control" type="text" name="designer name" placeholder="designer name" value=<?PHP echo $clname; ?> readonly><input class="form-control" type="text" name="phone number" placeholder="phone number" value=<?PHP echo $clph; ?> readonly><input class="form-control"
                    type="text" name="cost" placeholder="cost" value=<?PHP echo $clcost; ?> readonly></form>
        </div>
    </div>
    <div class="register-photo" style="padding-top:78px;background-color:#663a82 ;">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(&quot;assets/img/Slider_1_-_Benjamin_Puckey_s_Take_On_The__70s.jpg&quot;);"></div>
            <form method="post">
                <h2 class="text-center" style="width:282px;"><strong>Makeup</strong></h2><input class="form-control" type="text" name="makeup artist" placeholder="makeup artist" value=<?PHP echo $mname; ?> readonly><input class="form-control" type="text" name="phone number" placeholder="phone number" value=<?PHP echo $mph; ?> readonly><input class="form-control" type="text"
                    name="cost" placeholder="cost" value=<?PHP echo $mcost; ?> readonly></form>
        </div>
    </div>
   
    <div class="register-photo" style="padding-top:78px;background-color:#663a82 ;">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(&quot;assets/img/camera-lens.jpg&quot;);"></div>
            <form method="post">
                <h2 class="text-center" style="width:282px;"><strong>Photography</strong></h2><input class="form-control" type="text" name="studio name" placeholder="studio name" value=<?PHP echo $pname; ?> readonly><input class="form-control" type="text" name="phone number" placeholder="phone number" value=<?PHP echo $pph; ?> readonly><input class="form-control" type="text"
                    name="cost" placeholder="cost" value=<?PHP echo $pcost; ?> readonly></form>
        </div>
    </div>
    <div class="register-photo" style="padding-top:78px;background-color:#663a82 ;">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(&quot;assets/img/photo-1475744214834-0cb9be6eb226.jpg&quot;);"></div>
            <form method="post">
                <h2 class="text-center" style="width:282px;"><strong>Music</strong></h2><input class="form-control" type="text" name="artist name" placeholder="artist name" value=<?PHP echo $muname; ?> readonly><input class="form-control" type="text" name="genre" placeholder="genre" value=<?PHP echo $mutype; ?> readonly><input class="form-control" type="text" name="phone number"
                    placeholder="phone number" value=<?PHP echo $muph; ?> readonly><input class="form-control" type="text" name="cost" placeholder="cost" value=<?PHP echo $mucost; ?> readonly></form>
        </div>
		
		<a class="btn btn-primary" role="button" href="update.php?link=<?PHP echo $cid;?>" data-bs-hover-animate="pulse" style="width:100px;background-color:white;margin:20px;font-family:'Alex Brush', cursive; color:#663a82 ;"><b>Update</b></a>
    </div>
	
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/PHP-Contact-Form-dark.js"></script>
    <script src="assets/js/PHP-Contact-Form-dark1.js"></script>
    <script src="assets/js/select2.js"></script>
    <script src="assets/js/select21.js"></script>
    <script src="assets/js/select22.js"></script>
    <script src="assets/js/select23.js"></script>
    <script src="assets/js/select24.js"></script>
    <script src="assets/js/select25.js"></script>
    <script src="assets/js/select26.js"></script>
</body>

</html>
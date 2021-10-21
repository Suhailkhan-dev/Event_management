<?php
                $conn=mysqli_connect("localhost","root","","wedding");

				$cid=$_GET['link'];
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

    <div id="contact" style="background-color:#ffffff;padding:17px;">
        <div class="container d-block d-flex flex-column align-items-center">
            <div class="intro">
                <h2 style="background-color:#d65151;width:494px;">UPDATE</h2>
            </div>
        </div>
    </div>
	<form method="post" action="up.php?link=<?PHP echo $cid; ?>">
    <div class="register-photo" style="padding-top:78px;background-color:#d65151;">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(&quot;assets/img/52275wide.jpg&quot;);"></div>
            
                <h2 class="text-center"><strong>Client Details</strong></h2><input class="form-control" type="text" name="clname" placeholder="name" value=<?PHP echo $clientn; ?> ><input class="form-control" type="text" name="clph" placeholder="phone number" value=<?PHP echo $clientph; ?> ><input class="form-control" type="text" name="cladd"
                    placeholder="address" value=<?PHP echo $clientadd; ?> ><input class="form-control" type="text" name="clemail" placeholder="e-mail id" value=<?PHP echo $clientemail; ?>>
					<input class="form-control" type="date" name="cldate" placeholder="DATE" value=<?PHP echo $date; ?> >
					<input class="form-control" type="text" name="cltotal" placeholder="TOTAL" value=<?PHP echo $clienttotal; ?> >
				
        </div>
    </div>
    <div class="register-photo" style="padding-top:78px;background-color:#d65151;">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(&quot;assets/img/1-External-view-of-The-Castle-Destination-Wedding-Burgundy-France-gay-wedding-guide.jpg&quot;);"></div>
            
                <h2 class="text-center"><strong>Venue</strong></h2><input class="form-control" type="text" name="vname" placeholder="venue name" value=<?PHP echo $vname; ?> ><input class="form-control" type="text" name="vadd" placeholder="venue location" value=<?PHP echo $vaddress; ?> ><input class="form-control" type="text"
                    name="vph" placeholder="phone number" value=<?PHP echo $vph; ?> ><input class="form-control" type="text" name="vcost" placeholder="cost" value=<?PHP echo $vcost; ?> >
        </div>
    </div>
    <div class="register-photo" style="padding-top:78px;background-color:#d65151;">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(&quot;assets/img/52b02bf10957a_France 4 Hotel Du Cap Eden Roc.jpg&quot;);"></div>
       
                <h2 class="text-center"><strong>Theme</strong></h2><input class="form-control" type="text" name="tname" placeholder="theme name" value=<?PHP echo $tname; ?> ><input class="form-control" type="text" name="tcost" value=<?PHP echo $tcost; ?> placeholder="cost" >
        </div>
    </div>
    <div class="register-photo" style="padding-top:78px;background-color:#d65151;">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(&quot;assets/img/56708179-belles-fleurs-et-fond-de-mur-rideau-de-vague-scène-de-cérémonie-de-mariage-.jpg&quot;);"></div>
            
                <h2 class="text-center"><strong>Decoration</strong></h2><input class="form-control" type="text" name="dname" placeholder="decoration theme" value=<?PHP echo $dname; ?> ><input class="form-control" type="text" name="dph" placeholder="phone number" value=<?PHP echo $dph; ?> ><input class="form-control"
                    type="text" name="dcost" placeholder="cost" value=<?PHP echo $dcost; ?>  >
        </div>
    </div>
    <div class="register-photo" style="padding-top:78px;background-color:#d65151;">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(&quot;assets/img/5-pure-vegetarian-caterers-to-check-out-for-your-mumbai-wedding.jpg&quot;);"></div>
            
                <h2 class="text-center"><strong>Caterers</strong></h2><input class="form-control" type="text" name="ctname" placeholder="catering name" value=<?PHP echo $ctname; ?>  ><input class="form-control" type="text" name="ctph" placeholder="phone number" value=<?PHP echo $ctph; ?>  ><input class="form-control" type="text"
                    name="ctcost" placeholder="cost" value=<?PHP echo $ctc; ?>  >
        </div>
    </div>
    <div class="register-photo" style="padding-top:78px;background-color:#d65151;">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(&quot;assets/img/clothes-1620x911.jpg&quot;);"></div>
           
                <h2 class="text-center" style="width:282px;"><strong>Clothing and Accessories</strong></h2><input class="form-control" type="text" name="caname" placeholder="designer name" value=<?PHP echo $clname; ?>  ><input class="form-control" type="text" name="caph" placeholder="phone number" value=<?PHP echo $clph; ?>  ><input class="form-control"
                    type="text" name="cacost" placeholder="cost" value=<?PHP echo $clcost; ?>  >
        </div>
    </div>
    <div class="register-photo" style="padding-top:78px;background-color:#d65151;">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(&quot;assets/img/Slider_1_-_Benjamin_Puckey_s_Take_On_The__70s.jpg&quot;);"></div>
         
                <h2 class="text-center" style="width:282px;"><strong>Makeup</strong></h2><input class="form-control" type="text" name="mname" placeholder="makeup artist" value=<?PHP echo $mname; ?>  ><input class="form-control" type="text" name="mph" placeholder="phone number" value=<?PHP echo $mph; ?>  ><input class="form-control" type="text"
                    name="mcost" placeholder="cost" value=<?PHP echo $mcost; ?>  >
        </div>
    </div>
    
    <div class="register-photo" style="padding-top:78px;background-color:#d65151;">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(&quot;assets/img/camera-lens.jpg&quot;);"></div>
    
                <h2 class="text-center" style="width:282px;"><strong>Photography</strong></h2><input class="form-control" type="text" name="pname" placeholder="studio name" value=<?PHP echo $pname; ?>  ><input class="form-control" type="text" name="pph" placeholder="phone number" value=<?PHP echo $pph; ?>  ><input class="form-control" type="text"
                    name="pcost" placeholder="cost" value=<?PHP echo $pcost; ?>  >
        </div>
    </div>
    <div class="register-photo" style="padding-top:78px;background-color:#d65151;">
        <div class="form-container">
            <div class="image-holder" style="background-image:url(&quot;assets/img/photo-1475744214834-0cb9be6eb226.jpg&quot;);"></div>
            
                <h2 class="text-center" style="width:282px;"><strong>Music</strong></h2><input class="form-control" type="text" name="muname" placeholder="artist name" value=<?PHP echo $muname; ?>  ><input class="form-control" type="text" name="mutype" placeholder="genre" value=<?PHP echo $mutype; ?>  ><input class="form-control" type="text" name="muph"
                    placeholder="phone number" value=<?PHP echo $muph; ?>  ><input class="form-control" type="text" name="mucost" placeholder="cost" value=<?PHP echo $mucost; ?>  >
        </div>
		
		<button class="btn btn-primary" type="submit" data-aos="slide-up" data-aos-duration="900" style="background-color:white; color:#d65151; padding:16px;width:147px;margin:24px;"><b>SAVE</b></button>
    </div>
	</form>
	
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
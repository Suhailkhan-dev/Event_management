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

<body style="background-color:#d6b4e7;">
    <nav class="navbar navbar-light navbar-expand-md" style="background-color:#663a82 ;">
        <div class="container-fluid"><a class="navbar-brand" href="home1.php" style="font-family:'Alex Brush', cursive;font-size:41px;color:rgba(255,255,255,0.9);">Wishberry</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="newmenu.html" style="color:#ffffff;font-family:'Alex Brush', cursive;">Insert</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="gallery1.php" style="color:#ffffff;font-family:'Alex Brush', cursive;">Gallery</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <h1 style="font-family:'Alex Brush', cursive;color:#663a82 ;">List Of Clients</h1>
    <div class="table-responsive">
        <table class="table">
            <thead style="color:#663a82 ;">
                <tr>
                    <th style="font-family:'Alex Brush', cursive;font-size:20px;">Name</th>
                    <th style="font-family:'Alex Brush', cursive;font-size:20px;">Date</th>
                    <th style="font-family:'Alex Brush', cursive;font-size:20px;">Contact Number</th>
					<th style="font-family:'Alex Brush', cursive;font-size:20px;">Total Amount</th>
					
                </tr>
            </thead>
            <tbody>
			 <?php
                $conn=mysqli_connect("localhost","root","","wedding");

if($conn)
$res="select * from clients ORDER BY date DESC";
$result= mysqli_query($conn,$res);
$row=mysqli_num_rows($result);

if($row)
{

                while($row=mysqli_fetch_array($result))
                {
                 $cid=$row['cid']; $name=$row['name']; $date=$row['date']; $ph=$row['phno'];   
				 echo "<tr>";
                    echo "<td>".$name."</td>";
                    echo "<td>".$date."</td>";
                    echo "<td>".$ph."</td>";
                
				
$sql1="SELECT * from caterers where cid='$cid'";
    $sqlr1=mysqli_query($conn,$sql1);
    $row1=mysqli_fetch_assoc($sqlr1);
		$ccost=$row1['cost'];

		$sql2="SELECT * from clothing where cid='$cid'";
    $sqlr2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_assoc($sqlr2);
		$clcost=$row2['cost'];

		$sql3="SELECT * from decoration where cid='$cid'";
    $sqlr3=mysqli_query($conn,$sql3);
    $row3=mysqli_fetch_assoc($sqlr3);
		$dcost=$row3['cost'];

		$sql4="SELECT * from makeup where cid='$cid'";
    $sqlr4=mysqli_query($conn,$sql4);
    $row4=mysqli_fetch_assoc($sqlr4);
		$mcost=$row4['cost'];

		$sql5="SELECT * from music where cid='$cid'";
    $sqlr5=mysqli_query($conn,$sql5);
    $row5=mysqli_fetch_assoc($sqlr5);
		$mucost=$row5['cost'];

		$sql6="SELECT * from photography where cid='$cid'";
    $sqlr6=mysqli_query($conn,$sql6);
    $row6=mysqli_fetch_assoc($sqlr6);
		$pcost=$row6['cost'];

		$sql7="SELECT * from theme where cid='$cid'";
    $sqlr7=mysqli_query($conn,$sql7);
    $row7=mysqli_fetch_assoc($sqlr7);
		$tcost=$row7['cost'];	

		

		$sql9="SELECT * from venue where cid='$cid'";
    $sqlr9=mysqli_query($conn,$sql9);
    $row9=mysqli_fetch_assoc($sqlr9);
		$vcost=$row9['cost'];		
				
				$totalcost=$ccost+$clcost+$dcost+$mcost+$mucost+$pcost+$tcost+$vcost;
				
				$i="update clients set total='$totalcost' where cid='$cid'";
				$ir=mysqli_query($conn,$i);
				
				echo "<td>".$totalcost."</td>";
				
				echo <<<LOGIN
				<td><a class="btn btn-primary" role="button" href="view.php?id=$cid" data-bs-hover-animate="pulse" style="width:100px;background-color:#663a82 ;font-family:'Alex Brush', cursive;">View Details</a></td>";
                    <td><a class="btn btn-primary" role="button" href="delete.php?id=$cid" data-bs-hover-animate="pulse" style="width:100px;background-color:#663a82 ;margin:0px;font-family:'Alex Brush', cursive;">Delete</a></td>
LOGIN;
				echo "</tr>";
				}
}
else echo "<p style=color:#663a82 ;'>No Clients</p>";
				
                ?>
                
            </tbody>
        </table>
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
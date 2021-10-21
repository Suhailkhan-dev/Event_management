<?php
 $server="localhost";
 $name="root";
 $password="";
 $dbname="wedding";
 $connection=mysqli_connect($server,$name,$password,$dbname);
 $cid=0;
 //client
 $cname=$_POST['NAME'];
 $cadd=$_POST['ADDRESS'];
 $cphno=$_POST['clphone'];
 $cemail=$_POST['email_id'];
 $date=$_POST['date'];
//venue
 $venue=$_POST['venue_name'];
 $vlocaion=$_POST['VENUE_LOCATION'];
 $vph=$_POST['VPHONE'];
 $vcost=$_POST['VCOST'];

 //theme
 $tname=$_POST['tname'];
 $tcost=$_POST['TCOST'];

 //decoration
 $dname=$_POST['dname'];
 $dph=$_POST['DPH'];
 $dcost=$_POST['DCOST'];

 //caters
 $ctname=$_POST['ctname'];
 $ctph=$_POST['ctph'];
 $ctcost=$_POST['ctcost'];

 //clothing & accessories
 $caname=$_POST['caname'];
 $caph=$_POST['caph'];
 $cacost=$_POST['cacost'];

 //makeup
 $mname=$_POST['mname'];
 $mph=$_POST['mph'];
 $mcost=$_POST['mcost'];

 
 //photography
 $pname=$_POST['pname'];
 $pcost=$_POST['pcost'];
 $pph=$_POST['pph'];

 //music
 $muname=$_POST['muname'];
 $genre=$_POST['genre'];
 $muph=$_POST['muph'];
 $mucost=$_POST['mucost'];
 
 echo $cname.$cadd.$cphno.$cemail;
 echo  $dname.$dph.$dcost;
 echo  $tname.$tcost;
 echo   $trname.$trph.$trcost;

 $query="INSERT INTO clients (name,email,phno,address,date) values ('$cname','$cemail','$cphno','$cadd','$date')";
 $result=mysqli_query($connection,$query);
   	$cidquery="SELECT * from clients where email='$cemail'";
    $cidresult=mysqli_query($connection,$cidquery);
    $row=mysqli_fetch_assoc($cidresult);
		$cid=$row['cid'];
  

$query1="INSERT INTO caterers (cid,name,ph,cost) values ('$cid','$ctname','$ctph','$ctcost')";
 $result1=mysqli_query($connection,$query1);

$query2="INSERT INTO clothing (cid,name,ph,cost) values ('$cid','$caname','$caph','$cacost')";
 $result2=mysqli_query($connection,$query2);

$query3="INSERT INTO decoration (cid,decorator,ph,cost) values ('$cid','$dname','$dph','$dcost')";
 $result3=mysqli_query($connection,$query3);

$query4="INSERT INTO makeup (cid,name,ph,cost) values ('$cid','$mname','$mph','$mcost')";
 $result4=mysqli_query($connection,$query4);

$query5="INSERT INTO music (cid,name,ph,cost,type) values ('$cid','$muname','$muph','$mucost','$genre')";
 $result5=mysqli_query($connection,$query5);

$query6="INSERT INTO photography (cid,name,ph,cost) values ('$cid','$pname','$pph','$pcost')";
 $result6=mysqli_query($connection,$query6);

 $query7="INSERT INTO theme (cid,type,cost) values ('$cid','$tname','$tcost')";
 $result7=mysqli_query($connection,$query7);


 $query9="INSERT INTO venue (cid,name,address,ph,cost) values ('$cid','$venue','$vlocaion','$vph','$vcost')";
 $result9=mysqli_query($connection,$query9);
 
 echo "<SCRIPT type='text/javascript'> 
        window.location.replace(\"http:table.php\");
    </SCRIPT>";
 ?>
 
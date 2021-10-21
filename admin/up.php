<?php
                $conn=mysqli_connect("localhost","root","","wedding");

				$cid=$_GET['link'];
				
$clname=$_POST['clname'];
 $cladd=$_POST['cladd'];
 $clph=$_POST['clph'];
 $clemail=$_POST['clemail'];
 $cldate=$_POST['cldate'];
 $cltotal=$_POST['cltotal'];
//venue
 $vname=$_POST['vname'];
 $vadd=$_POST['vadd'];
 $vph=$_POST['vph'];
 $vcost=$_POST['vcost'];

 //theme
 $tname=$_POST['tname'];
 $tcost=$_POST['tcost'];

 //decoration
 $dname=$_POST['dname'];
 $dph=$_POST['dph'];
 $dcost=$_POST['dcost'];

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
 $mutype=$_POST['mutype'];
 $muph=$_POST['muph'];
 $mucost=$_POST['mucost'];
 
 
 
 $query="update clients set total='$cltotal', name='$clname', email='$clemail' ,phno='$clph', address='$cladd', date='$cldate' where cid='$cid' ";
 $result=mysqli_query($conn,$query);
 
  $query="update caterers set name='$ctname' ,ph='$ctph', cost='$ctcost' where cid='$cid' ";
 $result=mysqli_query($conn,$query);
 
 
 $query="update clothing set name='$caname' ,ph='$caph', cost='$cacost' where cid='$cid' ";
 $result=mysqli_query($conn,$query);
 
 $query="update decoration set decorator='$dname' ,ph='$dph', cost='$dcost' where cid='$cid' ";
 $result=mysqli_query($conn,$query);
 
 $query="update makeup set name='$mname' ,ph='$mph', cost='$mcost' where cid='$cid' ";
 $result=mysqli_query($conn,$query);
 
 $query="update music set name='$muname' ,ph='$muph', cost='$mucost',type='$mutype' where cid='$cid' ";
 $result=mysqli_query($conn,$query);
 
 $query="update photography set name='$pname' ,ph='$pph', cost='$pcost' where cid='$cid' ";
 $result=mysqli_query($conn,$query);
 
 $query="update theme set type='$tname', cost='$tcost' where cid='$cid' ";
 $result=mysqli_query($conn,$query);
 

 $query="update venue set name='$vname' ,ph='$vph', cost='$vcost', address='$vadd' where cid='$cid' ";
 $result=mysqli_query($conn,$query);
 
 echo "<SCRIPT type='text/javascript'> 
        window.location.replace(\"http:table.php\");
    </SCRIPT>";
 
 ?>
   	
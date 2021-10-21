<?php
                $conn=mysqli_connect("localhost","root","","wedding");

				$cid=$_GET['id'];
				
		$sql="delete from clients where cid='$cid'";
		$result=mysqli_query($conn,$sql);
		
				$sql="delete from caterers where cid='$cid'";
		$result=mysqli_query($conn,$sql);
		
				$sql="delete from clothing where cid='$cid'";
		$result=mysqli_query($conn,$sql);
		
				$sql="delete from decoration where cid='$cid'";
		$result=mysqli_query($conn,$sql);
		
				$sql="delete from makeup where cid='$cid'";
		$result=mysqli_query($conn,$sql);
		
				$sql="delete from music where cid='$cid'";
		$result=mysqli_query($conn,$sql);
		
				$sql="delete from photography where cid='$cid'";
		$result=mysqli_query($conn,$sql);
		
				$sql="delete from theme where cid='$cid'";
		$result=mysqli_query($conn,$sql);
				
				
		
				$sql="delete from venue where cid='$cid'";
		$result=mysqli_query($conn,$sql);
		
		echo "<SCRIPT type='text/javascript'> 
        window.location.replace(\"http:table.php\");
    </SCRIPT>";
		
?>
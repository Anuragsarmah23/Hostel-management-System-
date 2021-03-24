<?php
	//RADHEY
	$con=mysqli_connect('localhost','root','','hmms');
	if(!$con){
		die("CONNECTION NOT FOUND".mysqli_error());
	}
	$rtype=mysqli_real_escape_string($con,$_POST['rtype']);
	$tseat=mysqli_real_escape_string($con,$_POST['tseat']);
	$no=rand(100,999);
	$id=$rtype.$no;
	$q1="insert into room values('$id','$rtype','$tseat','$tseat')";
	$q1_run=mysqli_query($con,$q1);
	if($q1_run){
		echo '<script>alert("success")</script>';
		echo '<script>window.location.href="roomDetails.php"</script>';
		}	
	mysqli_close($con);	
?>			

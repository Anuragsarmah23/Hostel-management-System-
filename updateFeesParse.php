<?php
	//RADHEY
	session_start();
	$con=mysqli_connect('localhost','root','','hmms');
	if(!$con){
		die("CONNECTION NOT FOUND".mysqli_error());
	}
	$id=$_SESSION["fid"];
	$amount=mysqli_real_escape_string($con,$_POST['amount']);
	$q1="update fees set amount='$amount' where id='$id'";
	$q1_run=mysqli_query($con,$q1);
	if($q1_run){
		echo '<script>alert("success")</script>';
		echo '<script>window.location.href="reports.php"</script>';
		}	
	mysqli_close($con);	
?>			

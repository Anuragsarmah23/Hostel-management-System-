<?php
	session_start();
	$con=mysqli_connect('localhost','root','','hmms');
	if(!$con){
		die("CONNECTION NOT FOUND".mysqli_error());
	}
	$id=$_SESSION["staffID"];
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$designation=mysqli_real_escape_string($con,$_POST['designation']);
	$contact=mysqli_real_escape_string($con,$_POST['contact']);
	$address=mysqli_real_escape_string($con,$_POST['address']);
	$fname=mysqli_real_escape_string($con,$_POST['fname']);
	$dob=mysqli_real_escape_string($con,$_POST['dob']);
	$doj=mysqli_real_escape_string($con,$_POST['doj']);
	$q2="update staff set name='$name',email='$email',designation='$designation',contact='$contact',address='$address',fname='$fname',dob='$dob',doj='$doj' where id='$id'";
	$q2_run=mysqli_query($con,$q2);
	if($q2_run)
		$dispmsg='success';
	else
		$dispmsg='error';
	mysqli_close($con);
	echo json_encode($dispmsg);	
?>	
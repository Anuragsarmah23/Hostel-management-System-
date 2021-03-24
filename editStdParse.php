<?php
	session_start();
	$con=mysqli_connect('localhost','root','','hmms');
	if(!$con){
		die("CONNECTION NOT FOUND".mysqli_error());
	}
	$oldRID=$_SESSION["RID"];
	$stdID=$_SESSION["stdID"];
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$contact=mysqli_real_escape_string($con,$_POST['contact']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$address=mysqli_real_escape_string($con,$_POST['address']);
	$dept=mysqli_real_escape_string($con,$_POST['dept']);
	$course=mysqli_real_escape_string($con,$_POST['course']);
	$sem=mysqli_real_escape_string($con,$_POST['sem']);
	$dob=mysqli_real_escape_string($con,$_POST['dob']);
	$roomA=mysqli_real_escape_string($con,$_POST['roomA']);
	$q2="update student set name='$name',contact='$contact',department='$dept',course='$course',semester='$sem',email='$email',address='$address',dob='$dob',RoomID='$roomA' where id='$stdID'";
	$q2_run=mysqli_query($con,$q2);
	if($oldRID!=$roomA){
		$q3="update room set availableSeat=availableSeat+1 where id='$oldRID'";
		$q3_run=mysqli_query($con,$q3);
		$q4="update room set availableSeat=availableSeat-1 where id='$roomA'";
		$q4_run=mysqli_query($con,$q4);
		if($q4_run)
			$dispmsg='success';
		else
			$dispmsg='error';
	}
	if($q2_run)
		$dispmsg='success';
	else
		$dispmsg='error';
	mysqli_close($con);
	echo json_encode($dispmsg);	
?>	
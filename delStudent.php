<?php
	$con=mysqli_connect('localhost','root','','hmms');
	if(!$con){
		die("CONNECTION NOT FOUND".mysqli_error());
	}
	$id=$_GET["id"];
	$q1="select * from student where id='$id'";
	$q1_run=mysqli_query($con,$q1);
	$row1=mysqli_fetch_assoc($q1_run);
	$RID=$row1["RoomID"];
	$q="delete from student where id='$id'";
	$q_run=mysqli_query($con,$q);
	$q4="update room set availableSeat=availableSeat+1 where id='$RID'";
	$q4_run=mysqli_query($con,$q4);
	header("location:studentDetails.php");
?>	
<?php
	$con=mysqli_connect('localhost','root','','hmms');
	if(!$con){
		die("CONNECTION NOT FOUND".mysqli_error());
	}
	$id=$_GET["id"];
	$q1="select * from student where RoomID='$id'";
	$q1_run=mysqli_query($con,$q1);
	$rows=mysqli_num_rows($q1_run);
	if($rows > 0){
		echo '<script>alert("cannot delete room as students are allocated here..")</script>';
		echo '<script>window.location.href="roomDetails.php"</script>';
		die();
	}
	$q="delete from room where id='$id'";
	$q_run=mysqli_query($con,$q);
	header("location:roomDetails.php");
?>	
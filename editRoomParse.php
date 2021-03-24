<?php
	//RADHEY
	session_start();
	$con=mysqli_connect('localhost','root','','hmms');
	if(!$con){
		die("CONNECTION NOT FOUND".mysqli_error());
	}
	$RID=$_SESSION["RID"];
	$rtype=mysqli_real_escape_string($con,$_POST['rtype']);
	$tseat=mysqli_real_escape_string($con,$_POST['tseat']);
	$availSeat=$_SESSION["availSeat"];
	if($tseat > $_SESSION["TSeat"]){
		$aseat1=$tseat-$_SESSION["TSeat"];
		$aseat=$availSeat+$aseat1;
	}else{
		$aseat1=$_SESSION["TSeat"]-$tseat;
		$q2="select * from student where RoomID='$RID'";
		$q2_run=mysqli_query($con,$q2);
		$rows=mysqli_num_rows($q2_run);
		if($aseat1 >= $rows){
			echo '<script>alert("Cannot update seats as students are allocated here")</script>';
			echo '<script>window.location.href="roomDetails.php"</script>';
			die();
		}
		$aseat=$availSeat-$aseat1;
	}	
	$q1="update room set type='$rtype',totalSeat='$tseat',availableSeat='$aseat' where id='$RID'";
	$q1_run=mysqli_query($con,$q1);
	if($q1_run){
		echo '<script>alert("success")</script>';
		echo '<script>window.location.href="roomDetails.php"</script>';
		}	
	mysqli_close($con);	
?>			

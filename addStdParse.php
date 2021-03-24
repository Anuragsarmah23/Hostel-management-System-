<?php
	//RADHEY
	$con=mysqli_connect('localhost','root','','hmms');
	if(!$con){
		die("CONNECTION NOT FOUND".mysqli_error());
	}
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$no=rand(100,999);
	$id=$name.$no;
	$contact=mysqli_real_escape_string($con,$_POST['contact']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$address=mysqli_real_escape_string($con,$_POST['address']);
	$dept=mysqli_real_escape_string($con,$_POST['dept']);
	$course=mysqli_real_escape_string($con,$_POST['course']);
	$sem=mysqli_real_escape_string($con,$_POST['sem']);
	$dob=mysqli_real_escape_string($con,$_POST['dob']);
	$roomA=mysqli_real_escape_string($con,$_POST['roomA']);
	$q="select * from student WHERE email='$email'";
		$q_run=mysqli_query($con,$q);
		if(mysqli_num_rows($q_run)>0)
			$dispmsg='emailError';
		else{
			$q1="insert into student values('$id','$name','$contact','$dept','$course','$sem','$email','$address','$dob','$roomA')";
			$q1_run=mysqli_query($con,$q1);
			if($q1_run){
				$q4="select * from room where id='$roomA'";
				$q4_run=mysqli_query($con,$q4);
				$row=mysqli_fetch_assoc($q4_run);
				$avlSeat=$row['availableSeat']-1;
				$q2="update room set availableSeat='$avlSeat' where id='$roomA'";
				$q2_run=mysqli_query($con,$q2);
				if($q2_run)
					$dispmsg='success';
				else
					$dispmsg='error';
			}	
			else
				$dispmsg='error';
		}	
	mysqli_close($con);
	echo json_encode($dispmsg);		
?>			

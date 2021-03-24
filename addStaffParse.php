<?php
	//RADHEY
	$con=mysqli_connect('localhost','root','','hmms');
	if(!$con){
		die("CONNECTION NOT FOUND".mysqli_error());
	}
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$no=rand(100,999);
	$id=$name.$no;
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$designation=mysqli_real_escape_string($con,$_POST['designation']);
	$contact=mysqli_real_escape_string($con,$_POST['contact']);
	$address=mysqli_real_escape_string($con,$_POST['address']);
	$fname=mysqli_real_escape_string($con,$_POST['fname']);
	$dob=mysqli_real_escape_string($con,$_POST['dob']);
	$doj=mysqli_real_escape_string($con,$_POST['doj']);
	$q="select * from staff WHERE email='$email'";
		$q_run=mysqli_query($con,$q);
		if(mysqli_num_rows($q_run)>0)
			$dispmsg='emailError';
		else{
			$q1="insert into staff values('$id','$name','$email','$designation','$contact','$address','$fname','$dob','$doj')";
			$q1_run=mysqli_query($con,$q1);
			if($q1_run)
				$dispmsg='success';
			else
				$dispmsg='error';
		}	
	mysqli_close($con);
	echo json_encode($dispmsg);		
?>			

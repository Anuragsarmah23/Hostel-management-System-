<html>
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width,initial-scale=1.0" name="viewport">
		<title>HMMS</title>
		
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
		
		<link href="css/bootstrap.min.css" rel="stylesheet" >
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link href="css/animate.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/fixedcolumns/3.2.6/css/fixedColumns.bootstrap4.min.css" rel="stylesheet">
		
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
		<script src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>
		
	</head>
	
	<body>
		<div class="sidebar">
			<div class="sidebarBrand">
				Superintendent
			</div>
			<ul class="sideList">
				<a href="index.php">
					<li class="list-item"><i class="fa fa-laptop"></i><span style="font-size:16px;">Dashboard</span></li><br>
				</a>
				<a href="studentDetails.php">
					<li class="list-item"><i class="fa fa-users"></i><span style="font-size:16px;">Students</span></li><br>
				</a>
				<a href="staffDetails.php">
					<li class="list-item active"><i class="fa fa-user"></i><br><span style="font-size:16px;">Staff</span></li><br>
				</a>
				<a href="roomDetails.php">
					<li class="list-item"><i class="fa fa-bed"></i><span style="font-size:16px;">Rooms</span></li><br>	
				</a>
				<a href="fees.php">
					<li class="list-item"><i class="fa fa-money"></i><span style="font-size:16px;">Fees</span></li><br>
				</a>
				<a href="reports.php">
					<li class="list-item"><i class="fa fa-file"></i><span style="font-size:16px;">Reports</span></li>	
				</a>
			</ul>
		</div>
		<div class="navbar">
			<div class="row navbarContent">
				<a class="nav-link" href="index.php">STAFF DETAILS</a>
				<a class="nav-link" href="addStaff.php"><i class="fa fa-user-plus text-info"></i> ADD NEW</a>
				<a class="nav-link" style="margin-left:46.5vw;" href="index.php">HMMS</a>
			</div>
		</div>
		<div class="main">
			<div class="bg-white p-4" style="min-height:82vh;">
			<?php
				//Radhe
				$con=mysqli_connect("localhost","root","","hmms");
				if(!$con)
					die("Error");
				$q="select * from staff";
				$q_run=mysqli_query($con,$q);
				$rows=mysqli_num_rows($q_run);
				if($rows > 0){
			?>
				<table id="staffList" class="table table-striped table-bordered bg-white" style="width:100%">
				
					<thead>
						<tr>
							<th>ID</th>
							<th>NAME</th>
							<th>E-MAIL</th>
							<th>DESIGNATION</th>
							<th>CONTACT</th>
							<th>ADDRESS</th>
							<th>FATHER'S NAME</th>
							<th>DOB</th>
							<th>DOJ</th>
							<th>EDIT</th>
							<th>DEL</th>
						</tr>
					</thead>
					<tbody>
					<?php
						while($row=mysqli_fetch_assoc($q_run)){
					?>
						<tr>
							<td><?php echo $row["id"]; ?></td>
							<td><?php echo $row["name"]; ?></td>
							<td><?php echo $row["email"]; ?></td>
							<td><?php echo $row["designation"]; ?></td>
							<td><?php echo $row["contact"]; ?></td>
							<td><?php echo $row["address"]; ?></td>
							<td><?php echo $row["fname"]; ?></td>
							<td><?php echo $row["dob"]; ?></td>
							<td><?php echo $row["doj"]; ?></td>
							<td><a href="editStaff.php?id=<?php echo $row['id']; ?>"><i class="fa fa-edit editI"></i></a></td>
							<td><a href="delStaff.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash delI"></i></a></td>
						</tr>	
					<?php
						}
					?>	
					</tbody>
					
				</table>
			<?php
				}else{
					echo "<b>No records to display</b>";
				}
			?>	
			</div>
		</div>
		<div class="footer">
			&copyopyright 2019 HMMS.All Rights Reserved. 
		</div>
		
		<script>
			$(document).ready(function() {
				$('#staffList').DataTable({
					scrollX:true,
					fixedColumns:   true,
				});
			} );
		</script>
		
	</body>
</html>	
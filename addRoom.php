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
		<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
		<script src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	
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
					<li class="list-item"><i class="fa fa-user"></i><br><span style="font-size:16px;">Staff</span></li><br>
				</a>
				<a href="roomDetails.php">
					<li class="list-item active"><i class="fa fa-bed"></i><span style="font-size:16px;">Rooms</span></li><br>	
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
				<a class="nav-link" href="index.php">ADD NEW ROOM</a>
				<a class="nav-link" style="margin-left:56vw;" href="index.php">HMMS</a>
			</div>
		</div>
		<div class="main">
			<div class="card-header">
				ENTER ROOM DETAILS
			</div>
			<div class="bg-white p-4" style="min-height:92vh;">
				<form method="post" action="addRoomParse.php" id="validateIt">
					<div class="row">
						<div class="col-md-6 form-group">
							<label class="labelT" for="rtype">ROOM TYPE</label>
							<input type="text" name="rtype" id="rtype" class="form-control" placeholder="Enter Room Type" data-rule-required="true" data-msg-required="Please enter room type">
							<div class="validation"></div>
						</div>
						<div class="col-md-6 form-group">
							<label class="labelT" for="contact">TOTAL SEAT</label>
							<input type="number" name="tseat" id="tseat" class="form-control" placeholder="Enter Seats" data-rule-required="true" data-msg-required="Please enter total seats">
							<div class="validation"></div>
						</div>
					</div>
					<div class="row">
						<button type="submit" class="btn btn-primary ml-auto" style="width:10%; height:50px;margin-right:12px;margin-top:25px;">ADD</button>
					</div>
				</form>
			</div> 
		</div>
		<div class="footer">
			&copyopyright 2019 HMMS.All Rights Reserved. 
		</div>
		<script>
			$('#validateIt').validate();
		</script>
	</body>
</html>	
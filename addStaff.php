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
				<a class="nav-link" href="index.php">ADD NEW STAFF</a>
				<a class="nav-link" style="margin-left:56vw;" href="index.php">HMMS</a>
			</div>
		</div>
		<div class="main">
			<div class="card-header">
				ENTER STAFF DETAILS
			</div>
			<div class="bg-white p-4" style="min-height:92vh;">
				<form method="post" action="addStaffParse.php" id="validateIt" class="stdReg">
					<div class="row">
						<div class="col-md-6 form-group">
							<label class="labelT" for="name">FULL NAME</label>
							<input type="text" name="name" id="name" class="form-control" placeholder="Enter Full Name" data-rule-required="true" data-msg-required="Please enter the name">
							<div class="validation"></div>
						</div>
						<div class="col-md-6 form-group">
							<label class="labelT" for="email">E-MAIL ID</label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Enter E-Mail ID" data-rule-required="true" data-msg-required="Please enter the email" data-rule-email="true" data-msg-email="Enter valid email address">
							<div class="validation"></div>
						</div>	
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label class="labelT" for="designation">DESIGNATION</label>
							<input type="text" name="designation" id="designation" class="form-control" placeholder="Enter Designation" data-rule-required="true" data-msg-required="Please enter the designation">
							<div class="validation"></div>
						</div>
						<div class="col-md-6 form-group">
							<label class="labelT" for="contact">CONTACT No.</label>
							<input type="text" name="contact" id="contact" class="form-control" placeholder="Enter Contact Number" data-rule-required="true" data-msg-required="Please enter the contact number" data-rule-numbersonly="true" data-msg-numbersonly="Contact number should not contain any alphabet">
							<div class="validation"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label class="labelT" for="address">ADDRESS</label>
							<input type="text" name="address" id="address" class="form-control" placeholder="Enter address" data-rule-required="true" data-msg-required="Please enter the address">
							<div class="validation"></div>
						</div>
						<div class="col-md-6 form-group">
							<label class="labelT" for="fname">FATHER'S NAME</label>
							<input type="text" name="fname" id="fname" class="form-control" placeholder="Enter father's name" data-rule-required="true" data-msg-required="Please enter the father's name">
							<div class="validation"></div>
						</div>	
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label class="labelT" for="dob">DOB</label>
							<input type="date" name="dob" id="dob" max="2001-04-31" min="1990-01-01" value="2000-04-01" class="form-control" data-rule-required="true" data-msg-required="Please select the date of birth">
						</div>
						<div class="col-md-6 form-group">
							<label class="labelT" for="doj">DOJ</label>
							<input type="date" name="doj" id="doj" max="2019-01-01" min="1960-01-01" value="2010-04-01" class="form-control" data-rule-required="true" data-msg-required="Please select the date of joining">
						</div>
					</div>
						<button type="submit" class="btn btn-primary pull-right p-3" style="width:20%;">ADD</button>
					<div id="cnfmsg">Success</div>
					<div id="emailmsg">Email already exist</div>
					<div id="errormsg">Something went wrong...Please try again</div> 
				</form>
			</div> 
		</div>
		<div class="footer">
			&copyopyright 2019 HMMS.All Rights Reserved. 
		</div>
		<script>
			$('#validateIt').validate();
		</script>
		
		<script>
			jQuery.validator.addMethod("numbersonly", function(value, element) {
				return this.optional(element) || /^[0-9]+$/i.test(value);
			}, "Enter Number");
		</script>
		<script>
			$(document).ready(function() {
				$('.stdReg').submit(function() {	
					var datastr=$(".stdReg").serialize();
					$.ajax({
						type: "POST",
						url: "addStaffParse.php",
						data: datastr,
						dataType: "json",
						encoded: "true",
						success: function(msg) {
							if (msg == 'success') {
								$("#cnfmsg").addClass("show");
								$("#emailmsg").removeClass("show");
								$("#errormsg").removeClass("show");	
								setTimeout(function () {
									location.href="staffDetails.php"; 
								}, 1000);
							}
							 else if (msg == 'emailError'){
								$("#cnfmsg").removeClass("show");
								$("#emailmsg").addClass("show");
								$("#errormsg").removeClass("show");
							}
							else {
								$("#cnfmsg").removeClass("show");
								$("#emailmsg").removeClass("show");
								$("#errormsg").addClass("show");
								setTimeout(function () {
									location.reload(true); 
								},1000);
							}
						}
					});
					return false;
				
				});
			});
	</script>
	</body>
</html>	
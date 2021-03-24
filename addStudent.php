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
					<li class="list-item active"><i class="fa fa-users"></i><span style="font-size:16px;">Students</span></li><br>
				</a>
				<a href="staffDetails.php">
					<li class="list-item"><i class="fa fa-user"></i><br><span style="font-size:16px;">Staff</span></li><br>
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
				<a class="nav-link" href="index.php">ADD NEW STUDENT</a>
				<a class="nav-link" style="margin-left:56vw;" href="index.php">HMMS</a>
			</div>
		</div>
		<div class="main">
			<div class="card-header">
				ENTER STUDENT DETAILS
			</div>
			<div class="bg-white p-4" style="min-height:92vh;">
				<form method="post" action="addStdParse.php" id="validateIt" class="stdReg">
					<div class="row">
						<div class="col-md-6 form-group">
							<label class="labelT" for="name">FULL NAME</label>
							<input type="text" name="name" id="name" class="form-control" placeholder="Enter Full Name" data-rule-required="true" data-msg-required="Please enter the name">
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
							<label class="labelT" for="email">E-MAIL ID</label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Enter E-Mail ID" data-rule-required="true" data-msg-required="Please enter the email" data-rule-email="true" data-msg-email="Enter valid email address">
							<div class="validation"></div>
						</div>
						<div class="col-md-6 form-group">
							<label class="labelT" for="address">ADDRESS</label>
							<input type="text" name="address" id="address" class="form-control" placeholder="Enter address" data-rule-required="true" data-msg-required="Please enter the address">
							<div class="validation"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label class="labelT" for="dept">DEPARTMENT</label>
							<select name="dept" id="dept" class="form-control" data-rule-required="true" data-msg-required="Please select the department">
								<option value="" disabled selected>Select the department</option>
								<option value="Anthropology">Anthropology</option>
								<option value="Arabic">Arabic</option>
								<option value="Assamese">Assamese</option>
								<option value="Bengali">Bengali</option>
								<option value="Bodo">Bodo</option>
								<option value="Botany">Botany</option>
								<option value="Chemistry">Chemistry</option>
								<option value="CS & IT">CS & IT</option>
								<option value="Economics">Economics</option>
								<option value="Education">Education</option>
								<option value="English">English</option>
								<option value="Geography">Geography</option>
								<option value="Geology">Geology</option>
								<option value="Hindi">Hindi</option>
								<option value="History">History</option>
								<option value="Mathematics">Mathematics</option>
								<option value="Persian">Persian</option>
								<option value="Philosophy">Philosophy</option>
								<option value="Physics">Physics</option>
								<option value="Political Science">Political Science</option>
								<option value="Sanskrit">Sanskrit</option>
								<option value="Statistics">Statistics</option>
								<option value="Zoology">Zoology</option>
							</select>
							<div class="validation"></div>
						</div> 
						<div class="col-md-6 form-group">
							<label class="labelT" for="course">Course</label>
							<select name="course" id="course" class="form-control" data-rule-required="true" data-msg-required="Please select the course">
								<option value="" disabled selected>Select the course</option>
							</select>
							<div class="validation"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label class="labelT" for="sem">Semester</label>
							<select name="sem" id="sem" class="form-control" data-rule-required="true" data-msg-required="Please select the semester">
								<option value="" disabled selected>Select the semester</option>
							</select>
							<div class="validation"></div>
						</div>
						<div class="col-md-6 form-group">
							<label class="labelT" for="dob">DOB</label>
							<input type="date" name="dob" id="dob" max="2001-04-31" min="1990-01-01" value="2000-04-01" class="form-control" data-rule-required="true" data-msg-required="Please select the date of birth">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label class="labelT" for="roomA">Allocate Room</label>
							<?php
								$con=mysqli_connect('localhost','root','','hmms');
								if(!$con){
									die("CONNECTION NOT FOUND".mysqli_error());
								}
								$q="select * from room where availableSeat > 0 order by availableSeat asc";
								$q_run=mysqli_query($con,$q);
								echo '<select name="roomA" id="roomA" class="form-control" data-rule-required="true" data-msg-required="Please select the room to allocate">
										<option value="" selected>Select the room for allocation</option>';
										while($row=mysqli_fetch_assoc($q_run)){
								echo '	<option value="'.$row["id"].'">'.$row["id"].'</option>';
										}
								echo '</select>';
							?>
						</div>
						<button type="submit" class="btn btn-primary ml-auto" style="width:10%; height:50px;margin-right:12px;margin-top:25px;">ADD</button>
					</div>
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
			$(document).ready(function () {
				$("#dept").change(function () {
					switch($(this).val()) {
						case 'Anthropology':
						var myOptions = {
								BSc : 'BSc',
								BA : 'BA',
								MSc : 'MSc',
								MA : 'MA'
							};
							break;
						case 'Arabic':
						var myOptions = {
								BA : 'BA',
								MA : 'MA'
							};
							break;
						case 'Assamese':
						var myOptions = {
								BA : 'BA',
								MA : 'MA'
							};
							break;
						case 'Bengali':
						var myOptions = {
								BA : 'BA',
								MA : 'MA'
							};
							break;
						case 'Bodo':
						var myOptions = {
								BA : 'BA',
								MA : 'MA'
							};
							break;
						case 'Botany':
						var myOptions = {
								BSc : 'BSc',
								MSc : 'MSc'
							};
							break;
						case 'Chemistry':
						var myOptions = {
								BSc : 'BSc',
								MSc : 'MSc'
							};
							break;
						case 'CS & IT':
						var myOptions = {
								BScCS : 'BSc(CS)',
								BScIT : 'BSc(IT)',
								BCA : 'BCA',
								MScIT : 'MSc(IT)',
								MCA : 'MCA'
							};
							break;	
						case 'Economics':
						var myOptions = {
								BA : 'BA',
								MA : 'MA'
							};
							break;
						case 'Education':
						var myOptions = {
								BA : 'BA',
								MA : 'MA'
							};
							break;
						case 'English':
						var myOptions = {
								BA : 'BA',
								MA : 'MA'
							};
							break;
						case 'Geography':
						var myOptions = {
								BSc : 'BSc',
								BA : 'BA',
								MSc : 'MSc',
								MA : 'MA'
							};
							break;
						case 'Geology':
						var myOptions = {
								BSc : 'BSc',
								BA : 'BA',
								MSc : 'MSc',
								MA : 'MA'
							};
							break;
						case 'Hindi':
						var myOptions = {
								BA : 'BA',
								MA : 'MA'
							};
							break;
						case 'History':
						var myOptions = {
								BA : 'BA',
								MA : 'MA'
							};
							break;
						case 'Mathematics':
						var myOptions = {
								BSc : 'BSc',
								MSc : 'MSc'
							};
							break;
						case 'Persian':
						var myOptions = {
								BA : 'BA',
								MA : 'MA'
							};
							break;
						case 'Philosophy':
						var myOptions = {
								BA : 'BA',
								MA : 'MA'
							};
							break;
						case 'Physics':
						var myOptions = {
								BSc : 'BSc',
								MSc : 'MSc'
							};
							break;
						case 'Political Science':
						var myOptions = {
								BA : 'BA',
								MA : 'MA'
							};
							break;
						case 'Sanskrit':
						var myOptions = {
								BA : 'BA',
								MA : 'MA'
							};
							break;
						case 'Statistics':
						var myOptions = {
								BSc : 'BSc',
								MSc : 'MSc'
							};
							break;
						case 'Zoology':
						var myOptions = {
								BSc : 'BSc',
								MSc : 'MSc'
							};
							break;
						default:
							$("#course").html("<option value='' selected disabled>select the course</option>");  
					}
					var mySelect = $('#course');
					mySelect.empty();
					mySelect.append(
							$('<option value="" selected disabled>Select the course</option>')   
						);
					$.each(myOptions, function(val, text) {  
						mySelect.append(    
							$('<option></option>').val(val).html(text)
						);
					});
				});
			});
		</script>	
		<script>
			$(document).ready(function () {
				$("#course").change(function () {
					switch($(this).val()) {
						case 'BScCS':
						var myOptions = {
								sem1 : '1st Sem',
								sem2 : '2nd Sem',
								sem3 : '3rd Sem',
								sem4 : '4th Sem',
								sem5 : '5th Sem',
								sem6 : '6th Sem'
							};
							break;
						case 'BScIT':
						var myOptions = {
								sem1 : '1st Sem',
								sem2 : '2nd Sem',
								sem3 : '3rd Sem',
								sem4 : '4th Sem',
								sem5 : '5th Sem',
								sem6 : '6th Sem'
							};
							break;
						case 'BSc':
						var myOptions = {
								sem1 : '1st Sem',
								sem2 : '2nd Sem',
								sem3 : '3rd Sem',
								sem4 : '4th Sem',
								sem5 : '5th Sem',
								sem6 : '6th Sem'
							};
							break;
						case 'BCA':
						var myOptions = {
								sem1 : '1st Sem',
								sem2 : '2nd Sem',
								sem3 : '3rd Sem',
								sem4 : '4th Sem',
								sem5 : '5th Sem',
								sem6 : '6th Sem'
							};
							break;
						case 'BA':
						var myOptions = {
								sem1 : '1st Sem',
								sem2 : '2nd Sem',
								sem3 : '3rd Sem',
								sem4 : '4th Sem',
								sem5 : '5th Sem',
								sem6 : '6th Sem'
							};
							break;
						case 'MSc':
						var myOptions = {
								sem1 : '1st Sem',
								sem2 : '2nd Sem',
								sem3 : '3rd Sem',
								sem4 : '4th Sem'
							};
							break;
						case 'MScIT':
						var myOptions = {
								sem1 : '1st Sem',
								sem2 : '2nd Sem',
								sem3 : '3rd Sem',
								sem4 : '4th Sem'
							};
							break;
						case 'MCA':
						var myOptions = {
								sem1 : '1st Sem',
								sem2 : '2nd Sem',
								sem3 : '3rd Sem',
								sem4 : '4th Sem',
								sem5 : '5th Sem',
								sem6 : '6th Sem'
							};
							break;	
						case 'MA':
						var myOptions = {
								sem1 : '1st Sem',
								sem2 : '2nd Sem',
								sem3 : '3rd Sem',
								sem4 : '4th Sem'
							};
							break;
						default:
							$("#sem").html("<option value='' selected disabled>select the semester</option>");  
					}
					var mySelect = $('#sem');
					mySelect.empty();
					mySelect.append(
							$('<option value="" selected disabled>Select the semester</option>')   
						);
					$.each(myOptions, function(val, text) {  
						mySelect.append(    
							$('<option></option>').val(val).html(text)
						);
					});
				});
			});
		</script>	
		<script>
			$(document).ready(function() {
				$('.stdReg').submit(function() {	
					var datastr=$(".stdReg").serialize();
					$.ajax({
						type: "POST",
						url: "addStdParse.php",
						data: datastr,
						dataType: "json",
						encoded: "true",
						success: function(msg) {
							if (msg == 'success') {
								$("#cnfmsg").addClass("show");
								$("#emailmsg").removeClass("show");
								$("#errormsg").removeClass("show");	
								setTimeout(function () {
									location.href="studentDetails.php"; 
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
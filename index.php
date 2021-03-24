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
		
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-2.1.0.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
		
	</head>
	
	<body>
		<div class="sidebar">
			<div class="sidebarBrand">
				Superintendent
			</div>
			<ul class="sideList">
				<a href="index.php">
					<li class="list-item active"><i class="fa fa-laptop"></i><span style="font-size:16px;">Dashboard</span></li><br>
				</a>
				<a href="studentDetails.php">
					<li class="list-item"><i class="fa fa-users"></i><span style="font-size:16px;">Students</span></li><br>
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
				<a class="nav-link" href="index.php">Dashboard</a>
				<a class="nav-link" style="margin-left:60vw;" href="index.php">HMMS</a>
			</div>
		</div>
		<div class="main">
			<div class="chart-container">
				<canvas id="myChart" height="200" style="height:100% !important;"></canvas>
			</div>
			<?php
				//Radhe
				$con=mysqli_connect("localhost","root","","hmms");
				if(!$con)
					die("Error");
				$q="select * from student";
				$q_run=mysqli_query($con,$q);
				$rows=mysqli_num_rows($q_run);
				$q1="select * from staff";
				$q1_run=mysqli_query($con,$q1);
				$rows1=mysqli_num_rows($q1_run);
				$q2="select * from room";
				$q2_run=mysqli_query($con,$q2);
				$rows2=mysqli_num_rows($q2_run);
				$q354="select * from fees";
				$q354_run=mysqli_query($con,$q354);
				$rows354=mysqli_num_rows($q354_run);
			?>
			<div class="row pt-3">
				<div class="col-md-4">
					<div class="card py-4 px-5 hIconR1">
						<div class="row">
							<div class="hIcon">
								<i class="fa fa-bed"></i>
							</div>
							<div class="hContent">
								<span style="font-size:16px;">Rooms</span><br>
								<?php echo $rows2; ?>
							</div>
						</div>
					</div>	
				</div>
				<div class="col-md-4">
					<div class="card py-4 px-5  hIconR2">
						<div class="row">
							<div class="hIcon">
								<i class="fa fa-users"></i>
							</div>
							<div class="hContent">
								<span style="font-size:16px;">Students</span><br>
								<?php echo $rows; ?>
							</div>
						</div>
					</div>	
				</div>
				<div class="col-md-4">
					<div class="card py-4 px-5 hIconR3">
						<div class="row">
							<div class="hIcon">
								<i class="fa fa-user"></i>
							</div>
							<div class="hContent">
								<span style="font-size:16px;">Staff</span><br>
								<?php echo $rows1; ?>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
		<div class="footer">
			&copyopyright 2019 HMMS.All Rights Reserved. 
		</div>
		<script>
			var ctx = document.getElementById('myChart').getContext('2d');
			var student="<?php echo $rows; ?>";
			var room="<?php echo $rows2; ?>";
			var fees="<?php echo $rows354; ?>";
			var chart = new Chart(ctx, {
				// The type of chart we want to create
				type: 'bar',

				// The data for our dataset
				data: {
					labels: ['Students','Room', 'Fees'],
					datasets: [{
						label: 'HMMS',
						backgroundColor: 'rgba(255,255,255,0.1)',
						borderColor: '#fff',
						data: [student,room,fees],
					}]
					
				},
				maintainAspectRatio: false,
				// Configuration options go here
				options: {
					legend: {
							// This more specific font property overrides the global property
						labels: {	
							fontColor: 'white'
						}
					
					},
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero:true,
								fontColor: 'white',
                                stepSize: 1,
                                max: 10
							},
							gridLines: {
								tickMarkLength: 5, 
								color:'rgba(255,255,255,0.2)',
								borderDash:[2]
							},
						}],
					  xAxes: [{
							ticks: {
								fontColor: 'white'
							},
							gridLines: {
								tickMarkLength: 5, 
								color:'rgba(255,255,255,0.4)'
							},
						}],
					}
				}
			});
		</script>
		
	</body>
</html>	
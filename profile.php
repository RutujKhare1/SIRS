<?php
	include("connection.php");
	include('auth.php');
	$lookup=$_SESSION['sess_user'];
	$res = mysqli_query($conn,"SELECT * FROM student WHERE s_id='".$lookup."'");
	$row = mysqli_fetch_assoc($res);
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css\base.css">
		<link rel="stylesheet" type="text/css" href="css\navbar.css">
		<link rel="stylesheet" type="text/css" href="css\o365-icons.css">
		<link rel="stylesheet" type="text/css" href="css\o365-icons-sup.css">
		<link rel="stylesheet" type="text/css" href="css\sidebar.css">
		<link rel="stylesheet" type="text/css" href="css\content.css">
		<link rel="stylesheet" type="text/css" href="css\leftstatic.css">
		<link rel="stylesheet" type="text/css" href="css\profile.css">
		<title>SIRS | Profile</title>
		<script type="text/javascript" src="js\button.js">
		</script>
		<script type="text/javascript" src="js\modal.js">
		</script>
	</head>
	<body style="margin: 0px; height: 100%; overflow: auto;" id="cgo">
		<nav class="nav-base" style="opacity: 1;">
			<div class="nav-logo">
				<button class="openbtn" onclick="Navi()" id="navbtn"> <span class="wf wf-family-o365 wf-o365-hamburger"></span> </button>
			</div>
			<span class="nav-title" align="center">SIRS(Beta)</span>
			<button class="nav-button"><span class="wf wf-family-o365 wf-o365-search"></span></button>
			<input type="text" placeholder="Search">
		</nav>
		<div class="sidepane" id="sidewrap">
			<div class="sidepane"></div>
			<a href="index.php"><span class="wf wf-family-o365 wf-o365-waffle" style="margin-top: 3px; margin-right: 10px;"> </span> Dashboard</a>
			<a href="#"><span class="wf wf-family-o365 wf-o365-people" style="margin-top: 3px; margin-right: 10px;"> </span> Profile</a>
			<a href="about.php"><span class="wf wf-family-o365 wf-o365-circleinfo" style="margin-top: 3px; margin-right: 10px;"> </span> About</a>
			<a href="logout.php"><span class="wf wf-family-o365 wf-o365-cross" style="margin-top: 3px; margin-right: 10px;"> </span> Logout</a>
		</div>
		<div class="left-static">
			<div class="static-head" align="center">
				<img src="img\avatar720x720.png" class="avatar">
				<div class="static-text" style="letter-spacing: 0em;font-size: 1.4em;"><?php echo $row["s_name"]; ?></div>
				<div class="static-text" style="font-size: 1.2em;font-weight: 100;"><?php echo $row["s_id"]; ?></div>
			</div></div>
		</div>
		<div class="spacer"></div>
		<div class="profile">
			<div class="profile-item" style="text-align: center;width: auto;">
				<img src="img\avatar720x720.png" class="avatar">
			</div>
			<div class="profile-item">
				<?php echo "Name : ",$row['s_name'];?>
			</div>
			<div class="profile-item">
				<?php echo "IRN : ",$row['s_id'];?>
			</div>
			<div class="profile-item">
				<?php echo "Roll № : ",$row['r_no']?>
			</div>
			<div class="profile-item">
				<?php echo "Year : ",$row['year']?>
			</div>
			<div class="profile-item">
				<?php echo "Branch : ",$row['branch']?>
			</div>
			<div class="profile-item">
				<?php echo "DOB : ",$row['DOB']?>
			</div>
			<div class="profile-item" style="text-align: center;">
				<button>Save Changes</button>
			</div>
		</div>
	</body>
</html>
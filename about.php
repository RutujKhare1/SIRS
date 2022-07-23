<?php
	include("connection.php");
	include('auth.php');
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css\o365-icons.css">
		<link rel="stylesheet" type="text/css" href="css\base.css">
		<link rel="stylesheet" type="text/css" href="css\navbar.css">
		<link rel="stylesheet" type="text/css" href="css\sidebar.css">
		<link rel="stylesheet" type="text/css" href="css\content.css">
		<title>SIRS | About</title>
		<script type="text/javascript" src="js\button.js">
		</script>
	</head>
	<body style="margin: 0px; height: 100%;">
		<div class="blurb"></div>
		<nav class="nav-base">
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
			<a href="profile.php"><span class="wf wf-family-o365 wf-o365-people" style="margin-top: 3px; margin-right: 10px;"> </span> Profile</a>
			<a href="about.php"><span class="wf wf-family-o365 wf-o365-circleinfo" style="margin-top: 3px; margin-right: 10px;"> </span> About</a>
			<a href="logout.php"><span class="wf wf-family-o365 wf-o365-cross" style="margin-top: 3px; margin-right: 10px;"> </span> Logout</a>
		</div>
		<div class="content-wrapper" align="center">
			<p align="center">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<div class="column" id="profile">
				<div align="center">
					<img src="img\avatar720x720.png" class="avatar">
				</div>
				Satyaki Garkal
				<div id="descrip">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="column" id="profile">
				<div align="center">
					<img src="img\avatar720x720.png" class="avatar">
				</div>
				Anubhav Narayan
				<div id="descrip">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
			<div class="column" id="profile">
				<div align="center">
					<img src="img\avatar720x720.png" class="avatar">
				</div>
				Rutuj Khare
				<div id="descrip">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>
		</div>
	</body>
</html>
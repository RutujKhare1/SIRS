<?php
	include("connection.php");
	include('auth.php');
	$lookup=$_SESSION['sess_user'];
	exec('python C:\xampp\htdocs\SIRS1_2\pyscripts\idscript.py '.$lookup);
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
		<link rel="stylesheet" type="text/css" href="css\grid.css">
		<link rel="stylesheet" type="text/css" href="css\modal.css">
		<title>SIRS | Dashboard</title>
		<script type="text/javascript" src="js\button.js">
		</script>
		<script type="text/javascript" src="js\modal.js">
		</script>		
	</head>
	<body style="margin: 0px; height: 100%; overflow: hidden;" id="cgo">
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
			<a href="#"><span class="wf wf-family-o365 wf-o365-waffle" style="margin-top: 3px; margin-right: 10px;"> </span> Dashboard</a>
			<a href="admin\profile.php"><span class="wf wf-family-o365 wf-o365-people" style="margin-top: 3px; margin-right: 10px;"> </span> Profile</a>
			<a href="about.php"><span class="wf wf-family-o365 wf-o365-circleinfo" style="margin-top: 3px; margin-right: 10px;"> </span> About</a>
			<a href="logout.php"><span class="wf wf-family-o365 wf-o365-cross" style="margin-top: 3px; margin-right: 10px;"> </span> Logout</a>
		</div>
		<div class="left-static">
			<div class="head" align="center">
				<img src="img\avatar720x720.png" class="avatar">
				<div class="static-text" style="letter-spacing: 0em;font-size: 1.4em;">Administrator</div>
			</div>
		</div>
		<div class="grid" style="margin-left: 18em">
			<button onclick="modalOpen()" class="grid-item" id="att">
				<span class="wf-supp wf-o365-e11e" style="font-family: o365Icons; font-size: 3rem;"></span><br>
				Attendance
			</button>
		</div>
		<script type="text/javascript"
			id="botcopy-embedder-d7lcfheammjct"
			class="botcopy-embedder-d7lcfheammjct"
			data-botId="5d88fbb4848d3754b51965ac">
			var s = document.createElement('script'); 
			s.type = 'text/javascript'; s.async = true; 
			s.src = 'https://d7lcfheammjct.cloudfront.net/js/injection.js'; 
			document.body.appendChild(s);
		</script>
	</body>
</html>
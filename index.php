<?php
	include("connection.php");
	include('auth.php');
	$lookup=$_SESSION['sess_user'];
	$res = mysqli_query($conn,"SELECT s_name,s_id FROM student WHERE s_id='".$lookup."'");
	$row = mysqli_fetch_assoc($res);
	$atresp = mysqli_query($conn,"SELECT * FROM attendance WHERE s_id='".$lookup."' && attendance=1");
	$atres = mysqli_query($conn,"SELECT * FROM attendance WHERE s_id='".$lookup."'");
	$numatp = mysqli_num_rows($atresp);
	$numat = mysqli_num_rows($atres);
	$percent = round(($numatp/$numat)*100);
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
		<div class="left-static">
			<div class="static-head" align="center">
				<img src="img\avatar720x720.png" class="avatar">
				<div class="static-text" style="letter-spacing: 0em;font-size: 1.4em;"><?php echo $row["s_name"]; ?></div>
				<div class="static-text" style="font-size: 1.2em;font-weight: 100;"><?php echo $row["s_id"]; ?></div>
			</div>
		</div>
		<div class="spacer"></div>
		<div class="grid">
			<button onclick="modalOpen()" class="grid-item" id="att">
				<span class="wf-supp wf-o365-e11e" style="font-family: o365Icons; font-size: 3rem;"></span><br>
				Attendance
				<div><?php echo $percent,"%";?></div>
				<?php
					$modalurl="embed.php?id=".$lookup."";
				?>
			</button>
		</div>
		<div id="myModal" class="modal">
  			<div class="modal-content">
    			<div class="modal-header">
      				<span class="close" onclick="modalClose()" style="margin-top: 4px;"><span class="wf wf-family-o365 wf-o365-cross"> </span></span>
      				<h2>Attendance</h2>
    			</div>
    			<div class="modal-body">
      				<iframe style="height: 95%; width: 100%; border: 0px;" src="<?php echo $modalurl;?>"></iframe>
    			</div>
  			</div>
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
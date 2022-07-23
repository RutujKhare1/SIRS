<?php
	include("connection.php");
	include('auth.php');
	if (isset($_GET["id"])) {
		$lookat = $_GET["id"];
	}
	$query = mysqli_query($conn,"SELECT * FROM attendance WHERE s_id='".$lookat."';");
	$subquery = mysqli_query($conn,"SELECT DISTINCT c_id FROM attendance WHERE s_id='".$lookat."';");
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css\base.css">
	<link rel="stylesheet" type="text/css" href="css\grid.css">
</head>
<body style="width: 100%; align-items: center; align-self: center;">
	<div class='grid' style="margin-top: 0px;">
			<?php
			$block="grid-item";
			while($div=mysqli_fetch_assoc($subquery))
			{
				$atsub = mysqli_query($conn,"SELECT attendance FROM attendance WHERE s_id='".$lookat."' AND c_id='".$div['c_id']."';");
				$patsub = mysqli_query($conn,"SELECT attendance FROM attendance WHERE s_id='".$lookat."' AND c_id='".$div['c_id']."' AND attendance=1;");
				$npatsub = mysqli_num_rows($patsub);
				$natsub = mysqli_num_rows($atsub);
				$subname = mysqli_fetch_assoc(mysqli_query($conn,"SELECT c_name FROM course WHERE c_id='".$div['c_id']."';"));
				if($natsub==0)
				{
					$percent="N/A";
				}
				else
				{
					$percent=round(($npatsub/$natsub)*100);
				}
				echo "<div class=\"grid-item\" style=\"height: 100px;\">";
				echo $subname['c_name'],"<br>",$percent,"%";
				echo "</div>";
			}
			?>
	</div>
</body>
</html>
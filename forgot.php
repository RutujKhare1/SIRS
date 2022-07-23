<?php
include("connection.php");
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css\base.css">
		<link rel="stylesheet" type="text/css" href="css\loginblk.css">
		<link rel="stylesheet" type="text/css" href="css\modal.css">
		<title>Forgot Password?</title>
		<script type="text/javascript" src="js\button.js">
		</script>
		<script type="text/javascript" src="js\modal.js">
		</script>
		<style type="text/css">
			/* Add Animation */
			@-webkit-keyframes animateri {
			  from {left:0%; opacity:0} 
			  to {left:50%; opacity:1}
			}

			@keyframes animateri {
			  from {left:0%; opacity:0} 
			  to {left:50%; opacity:1}
			}
		</style>
	</head>
	<body>
		<div class="blurb"></div>
		<div class="inbar" style="
  -webkit-animation-name: animateri;
  -webkit-animation-duration: 0.7s;
  animation-name: animateri;
  animation-duration: 0.7s;">
			<div class="title">Forgot Password?</div>
			<form action="" method="post">
  				<div class="container">
    				<label for="username">IRN</label>
    				<input type="text" placeholder="Enter the IRN(eg. C17048)" name="username" required>
    				<div align="center" id="logindiv"><button type="submit" name="submit">Submit</button></div>
  				</div>
			</form>
  		</div>

<?php
if(isset($_POST['submit']))
{
	if(!empty($_POST['username']))
 	{
 		$user = $_POST['username']; 
 		$query = mysqli_query($conn, "SELECT * FROM login WHERE uid='".$user."';");
 		$numrows = mysqli_num_rows($query);
 		$row = mysqli_fetch_assoc($query);
 		if($numrows==1)
 		{
 			session_start();
 			$_SESSION['sess_user']=$user;
 		}
 		else
 		{
 			echo 'Contact Admin';
 		}
 	}
}?>
</body>
</html>


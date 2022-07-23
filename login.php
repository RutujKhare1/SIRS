<?php
include("connection.php");
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css\base.css">
		<link rel="stylesheet" type="text/css" href="css\loginblk.css">
		<link rel="stylesheet" type="text/css" href="css\modal.css">
		<title>SIRS | Login</title>
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
			  -webkit-animation-duration: 0.85s;
			  animation-name: animateri;
			  animation-duration: 0.85s;">
			<div class="title">Login | SIRS</div>
			<form action="" method="post">
  				<div class="container">
    				<label for="username">Username</label>
    				<input type="text" placeholder="Enter Username" name="username" required>
   					<label for="passwd">Password</label>
   					<input type="password" placeholder="Enter Password" name="passwd" required>
     				<div style="float: left; width: auto; background-color: transparent;"><input type="checkbox" checked="checked" name="remember"><span id="rme"> Remember Me</span></div>
    				<div style="float: right; width: auto; background-color: transparent;"><a href="forgot.php">Forgot Password?</a></div>
    				<div align="center" id="logindiv"><button type="submit" name="submit">Login</button></div>
  				</div>
			</form>
  		</div>
<!-- PHP Here -->
<?php
if(isset($_POST['submit']))
{
	if(!empty($_POST['username']) && !empty($_POST['passwd']))
 	{
 		$user = $_POST['username'];
 		$pass = $_POST['passwd']; 
 		$query = mysqli_query($conn, "SELECT * FROM login WHERE uid='".$user."' AND password='".$pass."';");
 		$numrows = mysqli_num_rows($query);
 		$row = mysqli_fetch_assoc($query);
 			if($numrows>0)
 			{
 				session_start();
 				$_SESSION['sess_user']=$user;
 				if($row['type']=="admin")
 				{
 					echo '<script type="text/javascript">document.getElementById(\'logindiv\').style.background = "#00D";</script>';
 					header('Location: admin.php');
 				}
 				else
 				{
 					echo '<script type="text/javascript">document.getElementById(\'logindiv\').style.background = "#0D0";</script>';
 					header('Location: index.php');
 				}
 			}
 			else
 			{
 				echo '<script type="text/javascript">document.getElementById(\'logindiv\').style.background = "#D00";</script>';
 			}
 	}
}?>
</body>
</html>


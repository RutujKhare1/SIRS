<?php
include("connection.php");
include('auth.php');
$lookup=$_SESSION['sess_user'];

// To find graph of user
$result = shell_exec('python C:\xampp\htdocs\SIRS1_2\pyscripts\graph.py '.$lookup);
?>
<html>
<head>
</head>
<body>
    <!-- Basic code for Image starts here -> -->
    <?php
        $filepath= 'userGraph.png';
        echo "<img src=".$filepath.">"
    ?>
    <!-- End -->
 </body>
 </html>



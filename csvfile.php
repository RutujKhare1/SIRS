<?php
include("connection.php");
$query = "select * from attendance";
$result=mysqli_query($conn,$query);
?>
<html>
<head>
</head>
<body>
	<form method="post" action="export.php">
		<input type="submit" name="export" value="CSV export">
	</form>
     <table>
     	<tr>
     		<th width="5%">student_ID</th>
     		<th width="15%">Course</th>
     		<th width="15%">date</th>
     		<th width="10%">attendance</th>
     	</tr>
     	<?php
     	while($row=mysqli_fetch_array($result))
     	{
 		?>
     	 <tr> 
     	 	<td><?php echo $row["s_id"]; ?></td>
     	 	<td><?php echo $row["c_id"]; ?></td>
     	 	<td><?php echo $row["date"]; ?></td>
     	 	<td><?php echo $row["attendance"]; ?></td>
     	 </tr>
     	<?php } ?>
     </table>
 </body>
 </html>



<?php 
include("connection.php");
$result = mysqli_query($conn,"SELECT * FROM attendance;");
if (!$result) die('Couldn\'t fetch records');
$num_fields = mysqli_num_fields($result);
$fp = fopen(".\\csv\\all.csv", 'w');
fwrite($fp, "PRN,Course ID,Date,Attendance\n");
while($row=mysqli_fetch_assoc($result))
{
    fwrite($fp, $row['s_id'].",".$row['c_id'].",".$row['date'].",".$row['attendance']."\n");
}
fclose($fp);
?>
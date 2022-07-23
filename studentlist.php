<?php 
include("connection.php");

?>
<!doctype html>
<html>
<style>
*{
 margin:0px;
 padding:0px;
 font-family:helvetica; 
}
.menu{
 background:#333;
 overflow:hidden; 
}
.menu a{
 color:white; 
 padding:14px 16px; 
 float:left; 
 text-decoration:none;  
 font-size:20px;  
}
.dropdown{
 float:left; 
 overflow:hidden; 
}

.menu a:hover, .button:hover{
 background:#dfdfdf; 
 color:black;  
}
.drop-content{ 
 display:none; 
 position:absolute; 
 background:#dfdfdf;
 min-width:160px; 
 box-shadow:0px 8px 16px 0px #333; 
 z-index:1 ; 
}
.drop-content a{
 color:black; 
 float:none; 
 display:block; 
 text-decoration:none; 
 padding:10px 10px; 
}
.drop-content a:hover{
 background:#afafaf; 
}
.dropdown:hover .drop-content{
 display:block; 
}
</style>
<body>
 <div class="menu">
  <div class="dropdown">
<select>
<option>select year</option>;
<div class="drop-content">
<?php
$query = mysqli_query($conn,"SELECT distinct year FROM student");
while($row=mysqli_fetch_array($query))
{
$y=$row["year"];
echo "<option>$y<br></option>";
 }
 ?>
</select>
</div>
<div class="dropdown">
<select>
<option>select branch</option>;
<div class="drop-content">
<?php
$query = mysqli_query($conn,"SELECT distinct branch FROM student");
while($row=mysqli_fetch_array($query))
{
$b=$row["branch"];
echo "<option>$b<br></option>";
 }
 ?>
</select>
</div>

<div class="dropdown">
<select>
<option>select subject</option>;
<div class="drop-content">
<?php
$query = mysqli_query($conn,"SELECT distinct c_name FROM course");
while($row=mysqli_fetch_array($query))
{
$b=$row["c_name"];
echo "<option>$b<br></option>";
 }
 ?>
</select>
</div>

 <input type="submit" name="submit" value="Submit">

</body>
</html>

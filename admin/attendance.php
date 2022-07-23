<html>
<body>
<div class="container_fluid">
	           <div class="row bg-title">
	           	   <div class="col-lg-12">
	           	   	   <h4 class="page-title">Student attendance</h4>
	           	   	   <ol class="breadcrumb">
	           	   	   	   <li><a href="#">Dashboard</a></li>
	           	   	   	   <li class="active">attendance</li>
	           	   	   	</ol>
	           	   </div>
	           	</div>
	           	<div class="row">
	           		<div class="col-lg-12">
	           			<div class="white-box">
	           				<div class="panel panel-default">
	           					<div class="panel-heading"><div class="panel-title">student attendance</div></div>
	           					<div class="panel-body">
	           						<?php echo form_open();?>
	           						<table class="table table-bordered table-responsive ">
	           							<thead>
	           							<tr>
	           								<th>roll_no</th>
	           								<th>name</th>
	           								<th>course</th>
	           								<th>date</th>
	           								<th>Action</th>
	           							</tr>
	           							<tbody>
	           								<tr>
	           								<td></td>
	           								<td></td>
	           								<td></td>
	           								<td></td>
	           								<td>
	           									<input type="radio" value="1" name="atten">Present
	           									<input type="radio" value="0" name="atten">Absent
	           								</td>
	           							</tr>
	           						

	           						<tr>
	           							<td colspan="4"><input type="submit" name="submit" class="btn btn-success btn-sm">
	           							</td>
	           						</tr>
	           							</tbody>
	           						</thead>
	           					</table>
	           					<?php echo form_close()?>
	           				</div>
	           			</div>
	           		</div>
	           	</div>
</div>
</html>
</body>





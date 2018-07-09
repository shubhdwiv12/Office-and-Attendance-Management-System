<?php
include('header.php');
?>
<div>
	<a href="index.php" class="pull-right btn btn-primary">Back</a>
</div>
<div class="text-center">
	<form class="form-inline" method="post" action="employee.php">
	  <div class="form-group">
	    <label >Employee Name:</label>
	    <input type="text" name="uename" class="form-control" >
	  </div>
	  <div class="form-group">
	    <label>Employee No:</label>
	    <input type="text" name="uenumber" class="form-control">
	  </div>
	  <button type="submit" name="login" class="btn btn-default">Enter</button>
	</form>
</div><br>
<table class="table table-bordered">
	<thead>
		<th>Serial No.</th>
		<th>Employee No.</th>
		<th>Employee Name</th>
		<th>City</th>
		<th>Contact No</th>
		<th>Department</th>
		<th>Project</th>
		<th>Pay Scale</th>
		<th>Grade</th>
	</thead>
<?php
if(isset($_POST['login'])){
	include('dbcon.php');
	$uename=$_POST['uename'];
	$uenumber=$_POST['uenumber'];
	$query="SELECT * FROM `employee` WHERE `employee_no`='$uenumber' AND `employee_name` LIKE '%$uename%'";
	$run=mysqli_query($con,$query);
	if(mysqli_num_rows($run)<1){
		echo '<tbody><tr><td>no records found</td></tr>';
	}else{
		$count=0;
		while($data=mysqli_fetch_assoc($run)){
			$count++;
			?>
		<tr>
			<td><?php echo $count; ?></td>
			<td><?php echo $data['employee_no']; ?></td>
			<td><?php echo $data['employee_name']; ?></td>
			<td><?php echo $data['city']; ?></td>
			<td><?php echo $data['contact_no']; ?></td>
			<td><?php echo $data['department']; ?></td>
			<td><?php echo $data['project']; ?></td>
			<td><?php echo $data['pay_scale']; ?></td>
			<td><?php echo $data['grade']; ?></td>
		</tr>
		<?php
		}
	}
}
?>
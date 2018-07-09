<?php
include 'headeradmin.php';
?>
<?php
session_start();
if($_SESSION['uid']){
}
else{
	 header('location:../login.php');
}
?>
<div class="text-center">
<form class="form-inline" method="post" action="report.php">
	  <div class="form-group">
	    <label >Enter Date:</label>
	    <input type="date" name="date" class="form-control" >
	  </div>
	  <button type="submit" name="login" class="btn btn-default">Submit</button>
</form>
</div>
</div>
</body>
</html>
<table class="table table-bordered">
	<thead>
		<th>Serial No.</th>
		<th>Employee Name</th>
		<th>Attendance</th>
	</thead>
<?php
if(isset($_POST['login'])){
	include('../dbcon.php');
	$uedate=$_POST['date'];
	$query="SELECT * FROM `attendance` WHERE `date`='$uedate'";
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
			<td><?php echo $data['employee_name']; ?></td>
			<td><?php echo $data['attend']; ?></td>
			<?php
		}
	}
}
?>

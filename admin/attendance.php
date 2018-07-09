<?php
session_start();
if($_SESSION['uid']){
}
else{
	 header('location:../login.php');
}
?>
<?php
include 'headeradmin.php';
include '../dbcon.php';
$query="SELECT * FROM `employee`";
$run=mysqli_query($con,$query);
$c=0;
?>
<br><br>
<div class="panel-body">
	<div class="well text-center">
		<h3><b>Date:-<?php  echo date("Y-m-d"); ?></b></h3>
	</div>
	<form method="post" action="attendsubmit.php">
		<table class="table table-striped">
			<tr>
				<th>Serial No.</th>
				<th>Employee Name</th>
				<th>Attendance</th>
			</tr>
				<?php while($data = mysqli_fetch_assoc($run)){  ?>
			<tr>
				<td><?php echo $data['id'];?></td>
				<td><?php echo  $data['employee_name']; ?></td>
				<input type="hidden" name="naam[]" value="<?php echo  $data['employee_name']; ?>">
				<td>
				<input type="radio" name="status[<?php echo $c;?>]" value="present"> P
				<input type="radio" name="status[<?php echo $c;?>]" value="absent"> A
				</td>
			</tr><?php $c++;}?>
		</table>
		<input type="submit" name="submit" class="btn btn-primary center-block" value="Submit">
	</form>
		
</div>
</div>
</body>
</html>
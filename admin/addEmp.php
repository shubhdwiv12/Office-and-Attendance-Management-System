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
?>
	<div class="text-center form">
		<div class="details">
			<h2 class="text-center visible-lg-inline bg-info">Add Employee</h2>
		</div>
	<form method="POST" action="addEmp.php">
		<div class="form-group">
			<label class="font-weight-bold" >Employee Name</label>
			<input type="text" name="ename" class="form-control col-lg-8 mx-auto"   placeholder="Enter Employee Name">
		</div>
		<div class="form-group">
			<label class="font-weight-bold " >Employee No.</label>
			<input type="text" name="enumber" class="form-control col-8 mx-auto"  placeholder="Enter Employee No.">
		</div>
		<div class="form-group">
			<label class="font-weight-bold " >city</label>
			<input type="text" name="city" class="form-control col-8 mx-auto"  placeholder="Enter city">
		</div>
		<div class="form-group">
			<label class="font-weight-bold " >Contact No.</label>
			<input type="text" name="contact" class="form-control col-8 mx-auto"  placeholder="Enter Contact No.">
		</div>
		<div class="form-group">
			<label class="font-weight-bold " for="exampleInputPassword1">Department</label>
			<input type="text" name="department" class="form-control col-8 mx-auto" placeholder="Enter Department">
		</div>
		<div class="form-group">
			<label class="font-weight-bold " for="exampleInputPassword1">Project</label>
			<input type="text" name="project" class="form-control col-8 mx-auto" placeholder="Enter Project">
		</div>
		<div class="form-group">
			<label class="font-weight-bold " for="exampleInputPassword1">Pay Scale</label>
			<input type="text" name="pay_scale" class="form-control col-8 mx-auto" placeholder="Enter Pay Scale">
		</div>
		<div class="form-group">
			<label class="font-weight-bold " for="exampleInputPassword1">Employee Level</label><br>
			<select name="grade">
				<option value="A">Grade A</option>
				<option value="B">Grade B</option>
				<option value="C">Grade C</option>
				<option value="D">Grade D</option>
			</select>
		</div>
		<button  type="submit" name="login" class="btn btn-primary ">Submit</button>
	</form>
	</div>
</div>
</body>
</html>
<?php
if(isset($_POST['login'])){
include('../dbcon.php');
$ename=$_POST['ename'];
$enumber=$_POST['enumber'];
$city=$_POST['city'];
$contact=$_POST['contact'];
$department=$_POST['department'];
$pay_scale=$_POST['pay_scale'];
$project=$_POST['project'];
$grade=$_POST['grade'];
$query="INSERT INTO `employee`(`employee_no`, `employee_name`, `city`, `contact_no`, `department`,`project`,`pay_scale`,`grade`) VALUES ('$enumber','$ename','$city','$contact','$department','$project','$pay_scale','$grade')";
$run=mysqli_query($con,$query);
if($run==true){
?>
<script type="text/javascript">
	alert("Data Instered Successfully.");
</script>
<?php
}else{
	echo '<div class="alert alert-danger"><strong>Data not inserted, Try Again!!</strong></div>';
}

}
?>
<div class="bg-success py-3">
	<h4 class="text-center">&copy;Copyright 2018</h4>
</div>
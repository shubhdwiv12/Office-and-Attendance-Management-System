<?php
session_start();
if($_SESSION['uid']){
}
else{
	 header('location:../login.php');
}
?>
<?php
include 'head.php';
?>
<br>
<div>
	<h1 class="bg-info text-center">Welcome to Admin Dashboard</h1>
</div>
<div class="button">
	<a href="addEmp.php" class="btn btn-success btn-lg "  role="button">Add Employee</a>
	<a href="UpdateEmp.php" class="btn btn-success btn-lg " role="button">Update Employee</a>
	<a href="deleteEmp.php" class="btn btn-success btn-lg" role="button">Delete Employee</a>
	<a href="attendance.php" class="btn btn-success btn-lg " role="button">Attendance</a>
	<a href="report.php" class="btn btn-success btn-lg " role="button">Attendance Report</a>

	<a href="logout.php" class="btn btn-success btn-lg pull-right " role="button">Log out</a>
</div>
</div>
<script type="text/javascript" src="../bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="../bootstrap/jquery.min.js"></script>
</body>
</html>
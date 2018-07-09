<?php
if(isset($_POST['submit'])){
	include('../dbcon.php');
	$i=0;
	foreach($_POST['status'] as $id=>$status){
	$ename=$_POST['naam'][$id];
	$status=$_POST['status'][$id];
	$date= date("Y-m-d");
	$sql="INSERT INTO `attendance`( `employee_name`, `date`, `attend`) VALUES ('$ename','$date','$status')";
	 mysqli_query($con,$sql);
	$i++;
	}
	if($i!=0){
		?>
		<script type="text/javascript">
			alert('Attendance Taken Successfully');
			window.open('admindash.php','_self');
		</script>
		<?php
	}
	else{
		echo "not success";
	}
}









?>
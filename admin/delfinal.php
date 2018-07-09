<?php
	include('../dbcon.php');
	$id=$_REQUEST['sid'];
	$query="DELETE FROM `employee` WHERE `id`='$id';";
	$run=mysqli_query($con,$query);
	if($run==true){
		?>
		<script type="text/javascript">
			alert('Data deleted successfully!!');
			window.open('deleteEmp.php','_self');
		</script>
		<?php
		}
		else{
			echo "not success";
		}
?>
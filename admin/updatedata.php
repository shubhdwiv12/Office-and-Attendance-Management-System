<?php
if (isset($_POST['login'])) {
	include('../dbcon.php');
	$ename=$_POST['ename'];
	$enumber=$_POST['enumber'];
	$city=$_POST['city'];
	$contact=$_POST['contact'];
	$department=$_POST['department'];
	$project=$_POST['project'];
	$pay_scale=$_POST['pay_scale'];
	$grade=$_POST['grade'];
	$id=$_POST['id'];
	$query="UPDATE `employee` SET `employee_no`='$enumber',`employee_name`='$ename',`city`='$city',`contact_no`='$contact',`department`='$department',`project`='$project',`pay_scale`='$pay_scale',`grade`='$grade'  WHERE id='$id'";
	$run=mysqli_query($con,$query);
	if($run==true){
		?>
		<script type="text/javascript">
			alert('Data Updated successfully!!');
			window.open('updateform.php?id=<?php echo  $id; ?>','_self');
		</script>
		<?php
		}
		else{
			echo "not success";
		}
}
?>
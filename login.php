<?php
session_start();
if(isset($_SESSION['uid'])){
	header('location:admin/admindash.php');
}
?>
<?php
include('header.php');
?>
			<div>
				<div class="text-center form">
					<div class="details">
						<h2 class="text-center visible-lg-inline bg-info">Admin Login</h2>
						<a href="index.php" class="pull-right btn btn-primary">Back</a>
					</div>
					<form method="POST">
						<div class="form-group">
							<label class="font-weight-bold" >User Name</label>
							<input type="text" name="uname" class="form-control col-lg-8 mx-auto"   placeholder="Enter Username">
					    </div>
						<div class="form-group">
						    <label class="font-weight-bold">Password</label>
							<input type="password" name="password" class="form-control col-8 mx-auto" id="exampleInputPassword1" placeholder="Password">
						</div>
						<button  type="submit" name="login" class="btn btn-primary">Log in</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/jquery.min.js"></script>
</head>
</body>
</html>
<?php
include('dbcon.php');
if(isset($_POST['login'])){
	$username=$_POST['uname'];
	$password=$_POST['password'];
	$query="SELECT * FROM `admin` WHERE username='$username' AND password='$password';";
	$run=mysqli_query($con,$query);
	$row=mysqli_num_rows($run);
	if($row<1){
		?>
		<script type="text/javascript">alert('username or password wrong');</script>
		<?php
	}else{
		$data=mysqli_fetch_assoc($run);
		$id=$data['id'];
		$_SESSION['uid']=$id;
		header('location:admin/admindash.php');
	}

}
?>
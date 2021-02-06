
<?php include 'db.php' ;?>
<?php include 'header.php';?>

<!-- update user data by this dunc -->
<?php
if (isset($_GET["update"])) {
	$user_id = $_GET["update"];
	$query   = "SELECT * FROM userdata WHERE user_id = $user_id";
	$slect_user_id =  mysqli_query($connected, $query);
	while ($row = mysqli_fetch_assoc($slect_user_id)){
			$user_id     = $row['user_id'];
			$user_name   = $row['user_name'];
			$user_password   = $row['password'];
			$user_email  = $row['user_email'];
			$user_phon   = $row['user_phon'];

		?>
		<section>
    <div class="continer">
	<div class="row">
		<div class="col-md-4 offset-md-3">
			<h1>Update user information</h1>
			<div class="login-box">
				<form action="" method="POST" accept-charset="utf-8" autocomplete="off">
					<!-- user name fild -->
				<div class="form-group">
				 <label>user name</label>
				 	<input type="text" name="username" class="form-control" value="<?php echo $user_name; ?>">
				</div>
				<!-- password fild -->
				<div class="form-group">
				 <label>password</label>
				 	<input type="password" name="password" class="form-control" value="<?php echo $user_password;?>">
				</div>
				<!-- email fild -->
				<div class="form-group">
				 <label>Email</label>
				 	<input type="gmail" name="email" class="form-control" value="<?php echo $user_email;?>">
				</div>
				<!-- phone number fild -->
				<div class="form-group">
				 <label>phone</label>
				 	<input type="text" name="phone" class="form-control" value="<?php echo $user_phon;?>">
				</div>
				<!-- regster button -->
			<div class="form-group">
				<input type="Submit" name="update" class="btn btn-primary" value="Update user info">
				</div>
			</form>
			</div>
			</div>	
		</div>	
	</div>	
</section>
<?php
	
}
}
?>
<?php
// update data resave by this code
if (isset($_POST["update"])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$Email    = $_POST['email'];
	$phone    = $_POST['phone'];

	$hasspasword = sha1($password);
	
	$query ="UPDATE userdata SET user_name = '$username',password = '$hasspasword', user_email = '$Email',user_phon = '$phone' WHERE user_id ='$user_id'";
	 $update_new_user =  mysqli_query($connected, $query);
    if (!$update_new_user) {
    	die('query field'. mysqli_error($connected));
    }
	else{
		header("location:alluser.php");
	} 
}
?>

<?php include 'footer.php';?>
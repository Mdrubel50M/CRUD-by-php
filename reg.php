
<?php include 'db.php' ;?>

<?php include 'header.php';?>
<!-- reg code start -->
<?php
// <!-- message send function -->
$message ="";
// data collection or stor from user fild by this code
if (isset($_POST['regter'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$Email    = $_POST['email'];
	$phone    = $_POST['phone'];
	// password incrapting by this func
	$hasspasword = sha1($password);
// data send into database by is code function
    $query = "INSERT INTO userdata(user_name, password, user_email, user_phon)VALUES('$username','$hasspasword', '$Email ', '$phone')";

    $creat_new_user =  mysqli_query($connected, $query);
    if (!$creat_new_user) {
    	die('query field'. mysqli_error($connected));
    }
    else{
    	$message = '<div class="alert alert-success">New user regter sucessfuly</div>';
    }
}

?>
<!-- reg form is start -->
<section class="reg-section">
    <div class="continer">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<h1 class="titler">regster a new user</h1>
			<div class="login-box">
				<form action="" method="POST" accept-charset="utf-8" autocomplete="off">
					<!-- user name fild -->
				<div class="form-group">
				 <label>user name</label>
				 	<input type="text" name="username" class="form-control" autocomplete="off">
				</div>
				<!-- password fild -->
				<div class="form-group">
				 <label>password</label>
				 	<input type="password" name="password" class="form-control" autocomplete="off">
				</div>
				<!-- email fild -->
				<div class="form-group">
				 <label>Email</label>
				 	<input type="gmail" name="email" class="form-control" autocomplete="off">
				</div>
				<!-- phone number fild -->
				<div class="form-group">
				 <label>phone</label>
				 	<input type="text" name="phone" class="form-control" autocomplete="off">
				</div>
				<!-- regster button -->
			   <div class="form-group">
				<input type="submit" name="regter" class="btn btn-primary">
				</div>
			</div>

	<!-- message send function -->
			</form>

			<?php echo $message; ?>
			</div>	
		</div>	
	</div>	
</section>

<?php include 'footer.php';?>
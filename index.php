<!-- function page include -->
<?php include 'db.php';?>
<!-- header page include -->
<?php include 'header.php';?>


<?php
//loging code 
if (isset($_POST['login'])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];
    
    
// echo($username .'<br>'. $password );
}

?>

<!-- login form -->
<section>
    <div class="continer">
	<div class="row">
		<div class="col-md-4 offset-md-3">
			<h1>Login-admin</h1>
			<div class="login-box">
				<form action="" method="POST" accept-charset="utf-8" autocomplete="off">
				<div class="form-group">
				 <label>user name</label>
				 	<input type="text" name="username" class="form-control" autocomplete="off">
				</div>
				<div class="form-group">
				 <label>password</label>
				 	<input type="password" name="password" class="form-control" autocomplete="off">
				</div>
			    <div class="form-group">
				<input type="submit" name="login" class="btn btn-primary">
				</div>
			</form>
			</div>
			</div>	
		</div>	
	</div>	
</section>
<!-- footer page include -->
<?php include 'footer.php';?>


<?php include 'db.php';?>
<?php include 'header.php';?>

<?php 
// data select from database and show at user fild
$query = "SELECT * FROM userdata";
$selet_all_user = mysqli_query($connected, $query);
?>

<section class="teble-section">
    <div class="continer">
	<div class="row">
	<div class="col-md-8 offset-md-2">
		<h2 class="alluser-t">all user in here</h2>
<table class="table table-dark">
  <thead>
    <tr class="table-active">
    <th colspan="" rowspan="" headers="" scope="col" class="Aurid">id</th>
     <th colspan="" rowspan="" headers="" scope="col">username</th>
    <th colspan="" rowspan="" headers="" scope="col">your email</th>
    <th colspan="" rowspan="" headers="" scope="col">your phone</th> 
    <th colspan="" rowspan="" headers="" scope="col">update</th>   
  </tr>
  </thead>
  <tbody>
  	<?php 
		while($row      = mysqli_fetch_assoc($selet_all_user)){
			$userid     = $row['user_id'];
			$username   = $row['user_name'];
			$useremail  = $row['user_email'];
			$userphon   = $row['user_phon'];
		

			?>

			<tr>
				<th scope="row"><?php echo $userid; ?></th>
				<td><?php echo $username; ?></td>
				<td ><?php echo $useremail; ?></td>
				<td ><?php echo $userphon; ?></td>
				<td >
					<div class="btn btn-group">
						<a href="update.php?update=<?php echo $userid;?>" class="btn btn-primary">Update</a>
					<a href="alluser.php?delete=<?php echo $userid;?>" class="btn btn-danger">Delete</a>
					</div>
				</td>
		   </tr> 
			<?php
		}
		 ?>
    
  </tbody>
</table>
		
	</div>
	</div>		
	</div>	
</section>
<!-- delet data by this code -->
<?php 
// delete query code
if (isset($_GET['delete'])) {
	$the_user_id = $_GET['delete'];

	$query = "DELETE FROM userdata WHERE user_id = $the_user_id";
	$delete_user = mysqli_query($connected, $query);
// this function for reload
	header("location:alluser.php");
	# code...
}
?>



<?php include 'footer.php';?>
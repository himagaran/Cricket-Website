<?php include('database.php');?>

<?php 

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


$query = mysqli_query($database, "INSERT INTO user_details(userName, password ,email) VALUES ('$username', '$password', '$email')");
if($query){
	echo'Successfully Sign Up';
	
	include ("index.html");
	?>
	
	<br/>
    <a href = "index.php">Back to Home	</a>
	<?php
}else{
	echo'not done';
}
?>
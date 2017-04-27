

<?php 
   SESSION_START();

   if(!isset($_SESSION['username'])){
	$_SESSION['username']= "";
   }

?>
<html>
<body>
<?php

include('database.php'); 

$username = $_POST['username'];
$password = $_POST['password'];
	$_SESSION['username'] = $username ;

$query = mysqli_query($database, "SELECT * FROM user_details WHERE userName = '$username' AND password = '$password'");
$result = mysqli_fetch_assoc($query);

if(($result["userName"] == $username) && ($result["password"] == $password)){
	echo 'logged in';
	include ("index.html");
	echo '<br/>';
	}else{
	echo 'Wrong username or password';
	include ("index.html");
	
    }
	
	
	
?>

</body>
</html>

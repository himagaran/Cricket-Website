<?php 
include('database.php');

$username= $_POST['username'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];


$query = mysqli_query($database, "INSERT INTO comment(username,email,subject,message) VALUES ('$username', '$email','$subject','$message')");

if($query = true){
	echo"Thank you for choosing ROYAL CRICKET!" ."<br/><br/>"."Your details are recorded and we'll get back to you as soon as possible";
	include ("index.html");
		
}else{
	echo"Oops! Somethings gone wrong!"."<br/><br/>"."Please fill out the details again";
}

?>
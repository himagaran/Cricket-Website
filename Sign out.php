<?php
   SESSION_START();
   if(isset($_SESSION['username'])){
   session_destroy();
   }else{
	   echo 'You must login first';
   }
?>
<html>
<head>
	<title>log out</title>
</head>

<body>
	<?php
		if(isset($_SESSION['username'])){
		echo 'Successfully logged out';
		include ("index.html");
		}else{
		include ("index.html");
		}
	?>
</body>

</html>
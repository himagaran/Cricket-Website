

  <?php
   SESSION_START();
   
	if(isset($_SESSION['username'])){
		
	   if(!isset($_SESSION['$cart'])){
		$_SESSION[$_SESSION['username']] = array();
	   }
	
   $totalName = 'total'.$_SESSION['username'];

   if(!isset($_SESSION[$totalName])){
	$_SESSION[$totalName]=0; 
   }

  if(!isset($_SESSION['$products'])){
	$_SESSION['$products'] = array();
   }
   ?>

<!DOCTYPE html>
<html>

<head>

  <title> Recipt </title>

  <link rel="stylesheet" href="./css/style.css">
  
</head>

<body>
	
	<?php
		
			
		$productName = $_POST['product'];
		$quantity = $_POST['quantity'];
		$unitPrice = $_POST['unitPrice'];
		
			array_push($_SESSION['$products'],$productName);
			$_SESSION[$_SESSION['username']][$productName] = array();
			$_SESSION[$_SESSION['username']][$productName]['Quantity'] = $quantity;
			$_SESSION[$_SESSION['username']][$productName]['Unit Price'] = $unitPrice;
			$_SESSION[$_SESSION['username']][$productName]['Price'] = $quantity * $unitPrice;
    		

		echo 'User ID : '.$_SESSION['username'].'<br/>';
        	
		foreach($_SESSION['$products'] as $product){
		echo 'Product Name : '.$product.'<br/>';
		
		$count = 0;
		foreach ($_SESSION[$_SESSION['username']][$productName] as $value){  
	       if($count == 0){
				echo'Quantity : '.$value.'<br/>';
				$count++;
		   }else if($count == 1){
			     echo'Unit price : '.$value.'<br/>';
				 $count++;
		   }else if($count == 2 ){
			     echo'Price : '.$value.'<br/>';
				 $count++;
		   }	
       }
   }

        	foreach ($_SESSION[$_SESSION['username']] as $value){  
				$_SESSION[$totalName] += $_SESSION[$_SESSION['username']][$productName]['Price'];
       		 }
    
		echo 'The Total is : '.$_SESSION[$totalName].'<br/>';


	
		}else{
			echo 'Please login to purchase';
			include("index.html");
			
		}
	?>
	
</body>

</html>
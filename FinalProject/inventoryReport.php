<!DOCTYPE HTML>

<html>  

<head>



 <meta name = "viewport"



  content = "width = device-width, initial-scale=1.0">



  <link rel="stylesheet" href="finalcss.css"/>



</head>

<body>

<div class = "nav">



	  <ul>

	

	    <li><a href="finalhtml.php">Home</a></li>

		

		<li><a href="products.php">Products</a></li>



		<li><a href = "shoppingCart.php">Shopping Cart</a></li>



		<li><a href = "login.php">Log in</a></li>



		<li><a href = "register.php">Create Account</a></li>



		<li><a href = "logout.php">Logout</a></li>

	

	  </ul>



	</div>

<div class = "header1">

	  <h1><i>Handcrafted Tea and Coffee</i></h1>

</div>

<br>

<br>



<?php

	$servername = "localhost";

	$username = "root";

	$password = "";

	$dbname = "beverages";

	$totalCost = 0;

	$id = 0;
	
	$Pname = $Pid = $numItems = "";

	session_start();

	if(isset($_SESSION["id"])){

	$id = (String)$_SESSION["id"];

	}

	else{

	echo "User isn't signed in. Unable to use shoping cart right now.";

	}

	

	if($id !=0){

		// Create connection

		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection

		if ($conn->connect_error) {

			die("Connection failed: " . $conn->connect_error);

		} 



		$sql = "SELECT Pname, Pid, totCost, numItems FROM shoppingcart, inventory WHERE id=$id AND ProdId = Pid";

		$result = $conn->query($sql);



		if ($result->num_rows > 0) {

			echo "<table><tr><th>Item Name</th><th>Cost</th><th>Number of Items</th></tr>";

			// output data of each row

			while($row = $result->fetch_assoc()) {

				echo "<tr>

					<td>&nbsp".$row["Pname"]."</td>

					<td>"."&nbsp&nbsp$".$row["totCost"]."</td>

					<td>"."&nbsp&nbsp".$row["numItems"]."</td>

					</tr>";
					

				$totalCost += $row["totCost"];

			}

			echo "</table>";

		} 

		else {

			echo "&nbsp<a href = 'products.php'>Add items to shopping cart!</a><br><br>";

		}

		
		if(isset($_SESSION["id"])){

			$id = (String)$_SESSION["id"];

		}
		
		if($totalCost != 0){

			echo "&nbspSubtotal: $" . $totalCost;

		}

		$actualTotal = ($totalCost*.07)+$totalCost;

		print "<br>&nbspTotal Cost: $".$actualTotal;
		
		print '<form action="shoppingCart.php" method="post">';
		
		print '<br><br>&nbsp<input type="submit" id= "CheckoutButton" name="CheckoutButton" value="Checkout with Saved Card" /><br><br>';
		
		print '</form>';
		
			// if button pressed, set $thing to 1 and print out contents of div to process inventory. 
		
			$thing = 0;
			
			if (isset($_POST['CheckoutButton'])){ 
				{
					$thing = 1;
				}
			  }
			  
			print '<div id="checkout" class="answer_list" ><br>';
			if($thing == 1) {
				
			print "<p>&nbspPayment of $".$actualTotal." Successful! Thank you for your purchase!</p><br>";
			
			$sql = "SELECT Pname, Pid, totCost, numItems FROM shoppingcart, inventory WHERE id=$id AND ProdId = Pid";

			$result = $conn->query($sql);
			
			
			//will use to update inventory. Also clear shopping cart?
			$sql2 = "";
			$result2 = "";
			$sql3 = "";
			$result3 = "";
			
			
			if ($result->num_rows > 0) {

				// output data of each row

				while($row = $result->fetch_assoc()) {

						
						$Pname = $row["Pname"];
						$Pid = $row["Pid"];
						$numItems = $row["numItems"];
						
						print $Pname . " <br> ".$Pid . " <br> " . $numItems . " <br> ";
						
						$sql2 = "UPDATE beverages.inventory SET stock =  stock - $numItems WHERE inventory.Pid = $Pid";
						
						$result2 = $conn->query($sql2);
						
						$sql3 = "DELETE FROM beverages.shoppingcart WHERE $id = id";
						
						$result3 = $conn->query($sql3);
						
					}
						

			} 

			}
	
		print '</div>';

		
		
	

		$conn->close();
		

	}

?>


	

</body>

</html>

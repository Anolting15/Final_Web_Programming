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


<!--Ordering Form-->
<form onclick="" method="get">
<Table>
	<tr>
		<th><!--Image--></th>
		<th>Product</th>
		<th>Description</th>
		<th>Cost</th>
		<th>Amount</th>
	</tr>

	<tr>
		<td>
			<img src="" alt="">
		</td>
		<td>Dark Roast Coffee</td>
		<td></td>
		<td>$10.00</td>
		<td><Input Type="number" name="darkRoastAmount" min="0" max="100" value="0"></td>
	</tr>
	
	<tr>
		<td>
			<img src="" alt="">
		</td>
		<td>Medium Roast Coffee</td>
		<td></td>
		<td>$10.00</td>
		<td><Input Type="number" name="mediumRoastAmount" min="0" max="100" value="0"></td>
	</tr>
	
	<tr>
		<td>
			<img src="" alt="">
		</td>
		<td>Light Roast Coffee</td>
		<td></td>
		<td>$10.00</td>
		<td><Input Type="number" name="lightRoastAmount" min="0" max="100" value="0"></td>
	</tr>
	
	<tr>
		<td>
			<img src="" alt="">
		</td>
		<td>Specialty Roast Coffee</td>
		<td></td>
		<td>$10.00</td>
		<td><Input Type="number" name="specialtyRoastAmount" min="0" max="100" value="0"></td>
	</tr>
	
	<tr>
		<td>
			<img src="" alt="">
		</td>
		<td>Seasonal Roast Coffee</td>
		<td></td>
		<td>$10.00</td>
		<td><Input Type="number" name="seasonalRoastAmount" min="0" max="100" value="0"></td>
	</tr>
	
	<tr>
		<td>
			<img src="" alt="">
		</td>
		<td>Greeen Tea</td>
		<td></td>
		<td>$10.00</td>
		<td><Input Type="number" name="greenTeaAmount" min="0" max="100" value="0"></td>
	</tr>
	
	<tr>
		<td>
			<img src="" alt="">
		</td>
		<td>Earl Gray Tea</td>
		<td></td>
		<td>$10.00</td>
		<td><Input Type="number" name="earlTeaAmount" min="0" max="100" value="0"></td>
	</tr>
	
	<tr>
		<td>
			<img src="" alt="">
		</td>
		<td>Chai Tea</td>
		<td></td>
		<td>$10.00</td>
		<td><Input Type="number" name="chaiTeaAmount" min="0" max="100" value="0"></td>
	</tr>
	
	<tr>
		<td>
			<img src="" alt="">
		</td>
		<td>Oolong Tea</td>
		<td></td>
		<td>$10.00</td>
		<td><Input Type="number" name="oolongTeaAmount" min="0" max="100" value="0"></td>
	</tr>
	
	<tr>
		<td>
			<img src="" alt="">
		</td>
		<td>Sweet Tea</td>
		<td></td>
		<td>$10.00</td>
		<td><Input Type="number" name="sweetTeaAmount" min="0" max="100" value="0"></td>
	</tr>
</Table>
<input type="submit" name="submit">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beverages";
$id = 1;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

   $darkRoastAmount = $mediumRoastAmount = $lightRoastAmount = $specialtyRoastAmount = $seasonalRoastAmount = $greenTeaAmount = $earlTeaAmount = $chaiTeaAmount = $oolongTeaAmount = $sweetTeaAmount = 0;
	
	if(isset($_GET['darkRoastAmount'])){
		$darkRoastAmount = $_GET["darkRoastAmount"];
	}
	if(isset($_GET['mediumRoastAmount'])){
		$mediumRoastAmount = $_GET["mediumRoastAmount"];
	}
	if(isset($_GET['lightRoastAmount'])){
		$lightRoastAmount = $_GET["lightRoastAmount"];
	}
	if(isset($_GET['specialtyRoastAmount'])){
		$specialtyRoastAmount = $_GET["specialtyRoastAmount"];
	}
	if(isset($_GET['seasonalRoastAmount'])){
		$seasonalRoastAmount = $_GET["seasonalRoastAmount"];
	}
	if(isset($_GET['greenTeaAmount'])){
		$greenTeaAmount = $_GET["greenTeaAmount"];
	}
	if(isset($_GET['earlTeaAmount'])){
		$earlTeaAmount = $_GET["earlTeaAmount"];
	}
	if(isset($_GET['chaiTeaAmount'])){
		$chaiTeaAmount = $_GET["chaiTeaAmount"];
	}
	if(isset($_GET['oolongTeaAmount'])){
		$oolongTeaAmount = $_GET["oolongTeaAmount"];
	}
	if(isset($_GET['sweetTeaAmount'])){
		$sweetTeaAmount = $_GET["sweetTeaAmount"];
	}
	
	echo $darkRoastAmount;
	if($darkRoastAmount != 0){
		$sql = "INSERT INTO shoppingcart (id, ProdId, totCost, numItems)
		VALUES ($id, 1, $darkRoastAmount*10.00, $darkRoastAmount)";
		echo $sql;
		echo "<br>";
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
			echo "<br>";
		} 
		 else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			echo "<br>";
		}
	}
	
	echo $mediumRoastAmount;
	if($mediumRoastAmount != 0){
		$sql = "INSERT INTO shoppingcart (id, ProdId, totCost, numItems)
		VALUES ($id, 2, $mediumRoastAmount*10.00, $mediumRoastAmount)";
		echo $sql;
		echo "<br>";
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
			echo "<br>";
		} 
		 else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			echo "<br>";
		}
	}
	
	echo $lightRoastAmount;
	if($lightRoastAmount != 0){
		$sql = "INSERT INTO shoppingcart (id, ProdId, totCost, numItems)
		VALUES ($id, 3, $lightRoastAmount*10.00, $lightRoastAmount)";
		echo $sql;
		echo "<br>";
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
			echo "<br>";
		} 
		 else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			echo "<br>";
		}
	}

	echo $specialtyRoastAmount;
	if($specialtyRoastAmount != 0){
		$sql = "INSERT INTO shoppingcart (id, ProdId, totCost, numItems)
		VALUES ($id, 4, $specialtyRoastAmount*10.00, $specialtyRoastAmount)";
		echo $sql;
		echo "<br>";
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
			echo "<br>";
		} 
		 else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			echo "<br>";
		}
	}
	
	echo $seasonalRoastAmount;
	if($seasonalRoastAmount != 0){
		$sql = "INSERT INTO shoppingcart (id, ProdId, totCost, numItems)
		VALUES ($id, 5, $seasonalRoastAmount*10.00, $seasonalRoastAmount)";
		echo $sql;
		echo "<br>";
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
			echo "<br>";
		} 
		 else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			echo "<br>";
		}
	}
	
	echo $greenTeaAmount;
	if($greenTeaAmount != 0){
		$sql = "INSERT INTO shoppingcart (id, ProdId, totCost, numItems)
		VALUES ($id, 6, $greenTeaAmount*10.00, $greenTeaAmount)";
		echo $sql;
		echo "<br>";
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
			echo "<br>";
		} 
		 else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			echo "<br>";
		}
	}
	
	echo $earlTeaAmount;
	if($earlTeaAmount != 0){
		$sql = "INSERT INTO shoppingcart (id, ProdId, totCost, numItems)
		VALUES ($id, 7, $earlTeaAmount*10.00, $earlTeaAmount)";
		echo $sql;
		echo "<br>";
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
			echo "<br>";
		} 
		 else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			echo "<br>";
		}
	}
	
	echo $chaiTeaAmount;
	if($chaiTeaAmount != 0){
		$sql = "INSERT INTO shoppingcart (id, ProdId, totCost, numItems)
		VALUES ($id, 8, $chaiTeaAmount*10.00, $chaiTeaAmount)";
		echo $sql;
		echo "<br>";
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
			echo "<br>";
		} 
		 else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			echo "<br>";
		}
	}
	
	echo $oolongTeaAmount;
	if($oolongTeaAmount != 0){
		$sql = "INSERT INTO shoppingcart (id, ProdId, totCost, numItems)
		VALUES ($id, 9, $oolongTeaAmount*10.00, $oolongTeaAmount)";
		echo $sql;
		echo "<br>";
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
			echo "<br>";
		} 
		 else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			echo "<br>";
		}
	}
	
	echo $sweetTeaAmount;
	if($sweetTeaAmount != 0){
		$sql = "INSERT INTO shoppingcart (id, ProdId, totCost, numItems)
		VALUES ($id, 10, $sweetTeaAmount*10.00, $sweetTeaAmount)";
		echo $sql;
		echo "<br>";
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
			echo "<br>";
		} 
		 else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			echo "<br>";
		}
	}
	
	$darkRoastAmount = $mediumRoastAmount = $lightRoastAmount = $specialtyRoastAmount = $seasonalRoastAmount = $greenTeaAmount = $earlTeaAmount = $chaiTeaAmount = $oolongTeaAmount = $sweetTeaAmount = 0;
	
	$conn->close();
?>

</body>
</html>

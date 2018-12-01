<!DOCTYPE HTML>
<html>  
<body>
<!--Ordering Form-->
<form onsubmit="" method="get">
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
<input type="submit">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beverages";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



{
	$darkRoastAmount = $mediumRoastAmount = $lightRoastAmount = $specialtyRoastAmount = $seasonalRoastAmount = $greenTeaAmount = $earlTeaAmount = $chaiTeaAmount = $oolongTeaAmount = $sweetTeaAmount = 0;
	
	$darkRoastAmount = $_GET["darkRoastAmount"];
	$mediumRoastAmount = $_GET["mediumRoastAmount"];
	$lightRoastAmount = $_GET["lightRoastAmount"];
	$specialtyRoastAmount = $_GET["specialtyRoastAmount"];
	$seasonalRoastAmount = $_GET["seasonalRoastAmount"];
	$greenTeaAmount = $_GET["greenTeaAmount"];
	$earlTeaAmount = $_GET["earlTeaAmount"];
	$chaiTeaAmount = $_GET["chaiTeaAmount"];
	$oolongTeaAmount = $_GET["oolongTeaAmount"];
	$sweetTeaAmount = $_GET["sweetTeaAmount"];

	echo $darkRoastAmount;
	if($darkRoastAmount != 0){
		$sql = "INSERT INTO shoppingcart (id, ProdId, totCost, numItems)
		VALUES (1, 1, $darkRoastAmount*10.00, $darkRoastAmount)";
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
}

$conn->close();
?>
</body>
</html>
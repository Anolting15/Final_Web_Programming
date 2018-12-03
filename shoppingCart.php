<!DOCTYPE HTML>
<html>  
<body>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "beverages";
	$totalCost = 0;

	$id = 1;
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT id, ProdID, totCost, numItems FROM shoppingcart WHERE id=$id";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "<table><tr><th>ID</th><th>ProdID</th><th>Cost</th><th>Number of Items</th></tr>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr>
				<td>".$row["id"]."</td>
				<td>".$row["ProdID"]."</td>
				<td>".$row["totCost"]."</td>
				<td>".$row["numItems"]."</td>
				</tr>";
			$totalCost += $row["totCost"];
		}
		echo "</table>";
	} 
	else {
		echo "0 results";
	}
	
	echo $totalCost;
	
	$conn->close();
?>





</body>
</html>

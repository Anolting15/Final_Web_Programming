
<!-- File Name: inventoryReport.php
	 Authors: Austin Nolting, Kevin Thompson, Carmen Ward
	 Date: 12/6/18 
	 
	 Function: allows website admin to update inventory with more products
				and updates to show state of inventory after customer has made a purchase.--->


<!DOCTYPE HTML>

<html>  

<head>



 <meta name = "viewport"



  content = "width = device-width, initial-scale=1.0">



  <link rel="stylesheet" href="finalcss.css"/>



</head>

<body>


<div class = "header1">

	  <h1><i>Inventory Report</i></h1>

</div>

<br>

<br>





<!--Ordering Form-->

<form action="inventoryReport.php" method="post">

<Table>

	<tr>


		<th>Product</th>


		<th>Cost</th>

		<th>Amount</th>

	</tr>



	<tr>



		<td>Dark Roast Coffee</td>


		<td>$10.00</td>

		<td><Input Type="number" name="darkRoastAmount" min="0" max="100" value="0"></td>

	</tr>

	

	<tr>



		<td>Medium Roast Coffee</td>


		<td>$10.00</td>

		<td><Input Type="number" name="mediumRoastAmount" min="0" max="100" value="0"></td>

	</tr>

	

	<tr>



		<td>Light Roast Coffee</td>


		<td>$10.00</td>

		<td><Input Type="number" name="lightRoastAmount" min="0" max="100" value="0"></td>

	</tr>

	

	<tr>


		<td>Specialty Roast Coffee</td>


		<td>$10.00</td>

		<td><Input Type="number" name="specialtyRoastAmount" min="0" max="100" value="0"></td>

	</tr>

	

	<tr>


		<td>Seasonal Roast Coffee</td>


		<td>$10.00</td>

		<td><Input Type="number" name="seasonalRoastAmount" min="0" max="100" value="0"></td>

	</tr>

	

	<tr>



		<td>Green Tea</td>


		<td>$10.00</td>

		<td><Input Type="number" name="greenTeaAmount" min="0" max="100" value="0"></td>

	</tr>

	

	<tr>



		<td>Earl Gray Tea</td>


		<td>$10.00</td>

		<td><Input Type="number" name="earlTeaAmount" min="0" max="100" value="0"></td>

	</tr>

	

	<tr>


		<td>Chai Tea</td>


		<td>$10.00</td>

		<td><Input Type="number" name="chaiTeaAmount" min="0" max="100" value="0"></td>

	</tr>

	

	<tr>


		<td>Oolong Tea</td>


		<td>$10.00</td>

		<td><Input Type="number" name="oolongTeaAmount" min="0" max="100" value="0"></td>

	</tr>

	

	<tr>



		<td>Sweet Tea</td>


		<td>$10.00</td>

		<td><Input Type="number" name="sweetTeaAmount" min="0" max="100" value="0"></td>

	</tr>

</Table>

<input type="submit" name="submit" value = "Submit">

</form>



<?php




if (isset($_POST['submit'])){
	
	run();
	
}






function run() {
	
	$servername = "localhost";

	$username = "root";

	$password = "";

	$dbname = "beverages";


   $darkRoastAmount = $mediumRoastAmount = $lightRoastAmount = $specialtyRoastAmount = $seasonalRoastAmount = $greenTeaAmount = $earlTeaAmount = $chaiTeaAmount = $oolongTeaAmount = $sweetTeaAmount = 0;

	

	if(isset($_POST['darkRoastAmount'])){

		$darkRoastAmount = $_POST["darkRoastAmount"];

	}

	if(isset($_POST['mediumRoastAmount'])){

		$mediumRoastAmount = $_POST["mediumRoastAmount"];

	}

	if(isset($_POST['lightRoastAmount'])){

		$lightRoastAmount = $_POST["lightRoastAmount"];

	}

	if(isset($_POST['specialtyRoastAmount'])){

		$specialtyRoastAmount = $_POST["specialtyRoastAmount"];

	}

	if(isset($_POST['seasonalRoastAmount'])){

		$seasonalRoastAmount = $_POST["seasonalRoastAmount"];

	}

	if(isset($_POST['greenTeaAmount'])){

		$greenTeaAmount = $_POST["greenTeaAmount"];

	}

	if(isset($_POST['earlTeaAmount'])){

		$earlTeaAmount = $_POST["earlTeaAmount"];

	}

	if(isset($_POST['chaiTeaAmount'])){

		$chaiTeaAmount = $_POST["chaiTeaAmount"];

	}

	if(isset($_POST['oolongTeaAmount'])){

		$oolongTeaAmount = $_POST["oolongTeaAmount"];

	}

	if(isset($_POST['sweetTeaAmount'])){

		$sweetTeaAmount = $_POST["sweetTeaAmount"];

	}


	// Create connection

	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection

	if ($conn->connect_error) {

		die("Connection failed: " . $conn->connect_error);

	} 
	


	
	//update inventory upon button press


	
	if($darkRoastAmount != 0){

		$sql = "UPDATE inventory SET stock = stock + $darkRoastAmount WHERE Pid = 1";

		echo "<br>";

		if ($conn->query($sql) === TRUE) {

			echo "New record created successfully";

			echo "<br>";
		}

		 else {

			echo "Error: Unable to process update.";

			echo "<br>";

		}

	}



	if($mediumRoastAmount != 0){

		$sql = "UPDATE inventory SET stock = stock + $mediumRoastAmount WHERE Pid = 2";


		echo "<br>";

		if ($conn->query($sql) === TRUE) {

			echo "New record created successfully";

			echo "<br>";

		} 

		 else {

			echo "Error: Unable to process update.";

			echo "<br>";

		}

	}



	if($lightRoastAmount != 0){

		$sql = "UPDATE inventory SET stock = stock + $lightRoastAmount WHERE Pid = 3";

		echo "<br>";

		if ($conn->query($sql) === TRUE) {

			echo "New record created successfully";

			echo "<br>";

		} 

		 else {

			echo "Error: Unable to process update.";

			echo "<br>";

		}

	}



	if($specialtyRoastAmount != 0){

		$sql = "UPDATE inventory SET stock = stock + $specialtyRoastAmount WHERE Pid = 4";


		echo "<br>";

		if ($conn->query($sql) === TRUE) {

			echo "New record created successfully";

			echo "<br>";

		} 

		 else {

			echo "Error: Unable to process update.";

			echo "<br>";

		}

	}



	if($seasonalRoastAmount != 0){

		$sql = "UPDATE inventory SET stock = stock + $seasonalRoastAmount WHERE Pid = 5";

		echo "<br>";

		if ($conn->query($sql) === TRUE) {

			echo "New record created successfully";

			echo "<br>";

		} 

		 else {

			echo "Error: Unable to process update.";

			echo "<br>";

		}

	}



	if($greenTeaAmount != 0){

		$sql = "UPDATE inventory SET stock = stock + $mediumRoastAmount WHERE Pid = 6";

		echo "<br>";

		if ($conn->query($sql) === TRUE) {

			echo "New record created successfully";

			echo "<br>";

		} 

		 else {

			echo "Error: Unable to process update.";

			echo "<br>";

		}

	}



	if($earlTeaAmount != 0){

		$sql = "UPDATE inventory SET stock = stock + $earlTeaAmount WHERE Pid = 7";


		echo "<br>";

		if ($conn->query($sql) === TRUE) {

			echo "New record created successfully";

			echo "<br>";

		} 

		 else {

			echo "Error: Unable to process update.";

			echo "<br>";

		}

	}



	if($chaiTeaAmount != 0){

		$sql = "UPDATE inventory SET stock = stock + $chaiTeaAmount WHERE Pid = 8";


		echo "<br>";

		if ($conn->query($sql) === TRUE) {

			echo "New record created successfully";

			echo "<br>";

		} 

		 else {

			echo "Error: Unable to process order.";

			echo "<br>";

		}

	}



	if($oolongTeaAmount != 0){

		$sql = "UPDATE inventory SET stock = stock + $oolongTeaAmount WHERE Pid = 9";

		echo "<br>";

		if ($conn->query($sql) === TRUE) {

			echo "New record created successfully";

			echo "<br>";

		} 

		 else {

			echo "Error: Unable to process update.";

			echo "<br>";

		}

	}



	if($sweetTeaAmount != 0){

		$sql = "UPDATE inventory SET stock = stock + $sweetTeaAmount WHERE Pid = 10";

		echo "<br>";

		if ($conn->query($sql) === TRUE) {

			echo "New record created successfully";

			echo "<br>";

		} 

		 else {

			echo "Error: Unable to process order.";

			echo "<br>";

		}

	}

	$conn->close();
	


	
		$conn2 = new mysqli($servername, $username, $password, $dbname);
		// Check connection

		if ($conn2->connect_error) {

			die("Connection failed: " . $conn2->connect_error);

		} 
		
		
	
		$sql2 = "SELECT Pid, Pname, cost, stock FROM inventory";

		$result = $conn2->query($sql2);



		if ($result->num_rows > 0) {

			echo "<table><tr><th>Product ID</th><th>Name</th><th>Cost</th><th>Stock</th></tr>";

			// output data of each row

			while($row = $result->fetch_assoc()) {

				echo "<tr>

					<td>&nbsp".$row["Pid"]."</td>

					<td>"."&nbsp&nbsp".$row["Pname"]."</td>

					<td>"."&nbsp&nbsp$".$row["cost"]."</td>
					
					<td>"."&nbsp&nbsp".$row["stock"]."</td>


					</tr>";
				

			}

			echo "</table>";

		} 

		else {

			echo "0 results";

		}
		$conn2->close();
}

	

?>



</body>

</html>

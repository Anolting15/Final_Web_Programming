

<!DOCTYPE html>

<html>

<head>



</head>

	<body>

		<?php 

		//object oriented MySQLi method

			$servername = "localhost";

			$username = "root";

			$password = "";

			

			/* -------------------------------------------------------------------------------------------------------------------------------------------------------- */

			

			//create connection

			$conn = new mysqli($servername, $username, $password);

			//check connection

			if ($conn->connect_error){

				die("Connection failed: " .$conn->connect_error);

			}

			echo "Connected Successfully<br>";

			

			/* -------------------------------------------------------------------------------------------------------------------------------------------------------- */

			

			//create database

			$sql = "CREATE DATABASE beverages";

			if ($conn->query($sql) === TRUE){

				echo "<br>Database created successfully<br>";

			}

			else {

				echo "<br>Error creating database: <br>" .$conn->error;

			}

			

			/* -------------------------------------------------------------------------------------------------------------------------------------------------------- */

			

			//create table Customer

			$sql = "CREATE TABLE beverages.customer (

			cId INT(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,

			firstname VARCHAR(30) NOT NULL,

			lastname VARCHAR(30) NOT NULL,
			
			username VARCHAR(50) NOT NULL UNIQUE,
			
			password  VARCHAR(255) NOT NULL,

			email VARCHAR(50), 

			created_at DATETIME DEFAULT CURRENT_TIMESTAMP,

			ccInfo VARCHAR(16)

			)";

			//check to see Customer Table Status

			if ($conn->query($sql) === TRUE){

				echo "<br>Table Customer created successfully.<br>";

			}

			else {

				echo "<br>Error creating table: " . $conn->error;

			}

			

			/* -------------------------------------------------------------------------------------------------------------------------------------------------------- */

			

			//create table inventory

			$sql = "CREATE TABLE beverages.inventory (

			Pid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,

			Pname VARCHAR(30) NOT NULL,

			cost DECIMAL(10,2),

			stock INT(6)

			)";

			//check to see Invetory Table Status

			if ($conn->query($sql) === TRUE){

				echo "<br>Table inventory created successfully.<br>";

			}

			else {

				echo "<br>Error creating table: " . $conn->error;

			}

			

			/* -------------------------------------------------------------------------------------------------------------------------------------------------------- */

			

			//create table shopping cart

			$sql = "CREATE TABLE beverages.shoppingCart (

			id INT(6) UNSIGNED NOT NULL,

			ProdId INT(6) UNSIGNED NOT NULL,
			
			totCost DECIMAL(10,2),

			numItems INT(6),

			CONSTRAINT fk

			FOREIGN KEY (id) REFERENCES Customer(cId),

			CONSTRAINT fk2

			FOREIGN KEY (ProdId) REFERENCES inventory (Pid)

			)";

			//check to see Shopping Cart Table Status

			if ($conn->query($sql) === TRUE){

				echo "<br>Table shoppingCart created successfully.<br>";

			}

			else {

				echo "<br>Error creating table: " . $conn->error;

				echo "<br>";

			}

			

			/* -------------------------------------------------------------------------------------------------------------------------------------------------------- */

			

			//Closes the Connection

			$conn->close();			

		?>

		<br>

		<?php

		$servername = "localhost";

		$username = "root";

		$password = "";

		$dbname = "beverages";



		/* -------------------------------------------------------------------------------------------------------------------------------------------------------- */

		

		// Create connection

		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection

		if ($conn->connect_error) {

			die("Connection failed: " . $conn->connect_error);

		} 



		/* -------------------------------------------------------------------------------------------------------------------------------------------------------- */

		

		//Commands to auto fill the Inventory Field

		$sql = "INSERT INTO inventory (Pname, cost, stock)

		VALUES ('Dark Roast Coffee', 10.00, 1000);";

		$sql .= "INSERT INTO inventory (Pname, cost, stock)

		VALUES ('Medium Roast Coffee', 10.00, 1000);";

		$sql .= "INSERT INTO inventory (Pname, cost, stock)

		VALUES ('Light Roast Coffee', 10.00, 800);";

		$sql .= "INSERT INTO inventory (Pname, cost, stock)

		VALUES ('Specialty Roast Coffee', 10.00, 500);";

		$sql .= "INSERT INTO inventory (Pname, cost, stock)

		VALUES ('Seasonal Roast Coffee', 10.00, 1000);";

		$sql .= "INSERT INTO inventory (Pname, cost, stock)

		VALUES ('Green Tea', 10.00, 500);";

		$sql .= "INSERT INTO inventory (Pname, cost, stock)

		VALUES ('Earl Gray Tea', 10.00, 500);";

		$sql .= "INSERT INTO inventory (Pname, cost, stock)

		VALUES ('Chai Tea', 10.00, 300);";

		$sql .= "INSERT INTO inventory (Pname, cost, stock)

		VALUES ('Oolong Tea', 10.00, 100);";

		$sql .= "INSERT INTO inventory (Pname, cost, stock)

		VALUES ('Sweet Tea', 10.00, 150)";



		/* -------------------------------------------------------------------------------------------------------------------------------------------------------- */

		

		//Check to see if the inventory table is populated correctly

		if ($conn->multi_query($sql) === TRUE) {

			echo "Inventory records created successfully";

			echo "<br>";

		} else {

			echo "Error: " . $sql . "<br>" . $conn->error;

			echo "<br>";

		}



		$conn->close();

		?>

		<br>

		<?php

		$servername = "localhost";

		$username = "root";

		$password = "";

		$dbname = "beverages";



		/* -------------------------------------------------------------------------------------------------------------------------------------------------------- */

		

		// Create connection

		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection

		if ($conn->connect_error) {

			die("Connection failed: " . $conn->connect_error);

		} 



		/* -------------------------------------------------------------------------------------------------------------------------------------------------------- */

		

		//Commands to auto fill the cnventory Field

		$sql = "INSERT INTO Customer (firstname, lastname, username, password, email, ccInfo)

		VALUES ('Test', 'Tester',  'test', 'test', 'test@ung.edu', '1111111111111111')";



		/* -------------------------------------------------------------------------------------------------------------------------------------------------------- */

		

		//Check to see if the inventory table is populated correctly

		if ($conn->multi_query($sql) === TRUE) {

			echo "Test Customer record created successfully";

			echo "<br>";

		} else {

			echo "Error: " . $sql . "<br>" . $conn->error;

			echo "<br>";

		}



		$conn->close();

		?>

	</body>

</html>
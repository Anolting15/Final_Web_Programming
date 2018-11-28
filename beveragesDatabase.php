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
			//create connection
			$conn = new mysqli($servername, $username, $password);
			
	
			//check connection
			if ($conn->connect_error){
				die("Connection failed: " .$conn->connect_error);
			}
			echo "Connected Successfully<br>";
			
			
			//create database
			$sql = "CREATE DATABASE beverages";
			if ($conn->query($sql) === TRUE){
				echo "<br>Database created successfully<br>";
			}
			else {
				echo "<br>Error creating database: <br>" .$conn->error;
			}
			
			
			//create table Customer
			$sql = "CREATE TABLE beverages.Customer (
			cId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			firstname VARCHAR(30) NOT NULL,
			lastname VARCHAR(30) NOT NULL,
			email VARCHAR(50), 
			reg_date TIMESTAMP, ccInfo INT(16)
			)";
			
			if ($conn->query($sql) === TRUE){
				echo "<br>Table Customer created successfully.<br>";
			}
			else {
				echo "<br>Error creating table: " . $conn->error;
			}


			
			//create table shopping cart
			$sql = "CREATE TABLE beverages.shoppingCart (
			id INT(6) UNSIGNED NOT NULL,
			ProdId INT(6) UNSIGNED NOT NULL,
			CONSTRAINT fk
			FOREIGN KEY (id) REFERENCES Customer(cId),
			CONSTRAINT fk2
			FOREIGN KEY (ProdId) REFERENCES inventory (Pid)
			)";
			
			if ($conn->query($sql) === TRUE){
				echo "<br>Table shoppingCart created successfully.<br>";
			}
			else {
				echo "<br>Error creating table: " . $conn->error;
			}
			
			
			//create table inventory
			$sql = "CREATE TABLE beverages.inventory (
			Pid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			Pname VARCHAR(30) NOT NULL,
			cost DECIMAL(2,2)
			)";
			
			if ($conn->query($sql) === TRUE){
				echo "<br>Table inventory created successfully.<br>";
			}
			else {
				echo "<br>Error creating table: " . $conn->error;
			}
			$conn->close();
		?>
		
		
	</body>
</html>
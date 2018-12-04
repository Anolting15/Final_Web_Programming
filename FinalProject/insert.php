<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "beverages";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
	die("connection failed: " .$conn->connect_error);
}
echo "Connected Successfully<br>";


//Establish connection to database
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "quiz";


if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$ccinfo = $_POST['ccinfo'];
}


//Insert Query of SQL
// $sql = "INSERT INTO beverages.customer (firstname, lastname, username, password, email, ccinfo) VALUES ('$firstname', '$lastname', '$username', '$password', '$email', '$ccinfo')";
$stmt = $conn->prepare("INSERT INTO beverages.customer(firstname, lastname, username, password, email, ccinfo) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param('ssssss', $firstname, $lastname, $username, $password, $email, $ccinfo);
if ($firstname != null || $lastname != null || $username != null || $password != null || $email != null || $ccinfo != null){
	$stmt->execute();
} else print "You must enter all elements of this form";
$stmt->close();

// $query = mysql_query("insert into customer(firstname, lastname, username, password, email, ccinfo) values ('$firstname', '$lastname', '$username', '$password', '$email', '$ccinfo')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
header("location: login.php");

$conn->close(); // Closing Connection with Server
?>

<!DOCTYPE html>
<html>
<head>
	<style>
		table, th, td {
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<!-- linking to the home page -->
<a href="index.html">Home Page</a>

</body>
</html>
<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "login_db";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, phone, tcz, login FROM login"; $result = $conn->query($sql);
if($result->num_rows > 0) {
	echo "<table><th>ID</th>
		         <th>NAME</th>
		         <th>EMAIL</th>
		         <th>PHONE</th>
		         <th>TCZ</th>
		         <th>LOGIN</th>";

	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "<tr><td>".
			   $row["id"]. "</td>".
			    "<td>".
			   $row["name"]. "</td>".
			   "<td>".
			   $row["email"]. "</td>".
			   "<td>". 
			   $row["phone"]. "</td>".
			   "<td>".
			   $row["tcz"]. "</td>".
			   "<td>".
			   $row["login"]. 
			 "</td></tr>";
	}
	echo "</table>";
} else {
	echo "0 results";
}

$conn->close () ;
?>
<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "cab";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "select * from user"; 
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
		echo "id: ".$row["Code"]. "- username: ".$row["username"]. "- Password: ".$row["pwd"]. "<br>";
	}
}
else echo "no records";

mysqli_close($conn);
?>
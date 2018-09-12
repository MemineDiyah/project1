//<?php
//$servername = "localhost";
//$username = "username";
//$password = "";
//$dbname = "cab";

// Create connection
//$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
//if (!$conn) {
 //   die("Connection failed: " . mysqli_connect_error());
//}

//$sql = "INSERT INTO user (username, pwd) VALUES ('mems', 1234)";
//$sql = "select * from user"; 
//if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully";
//} else {
///    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}

//mysqli_close($conn);
//?>
<?php 
session_start(); 
if(!$_SESSION['logged']){ 
    header("Location: logmp.php"); 
    exit; 
} 
echo 'Welcome, '.$_SESSION['username']; 
?> 
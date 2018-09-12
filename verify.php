<?php 
if(isset($_POST['submit'])){ 
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cab";
     
    $db = mysqli_connect($servername,$username,$password,$dbname)or die("Error connecting to database."); 
    //Connect to the databasse 
    mysqli_select_db($db, $dbname)or die("Couldn't select the database."); 
 
    $usr = mysqli_real_escape_string($db, $_POST['username']); 
    $pas = hash('sha256', mysqli_real_escape_string($db, $_POST['pwd'])); 
    $sql =  "SELECT 'username','pwd' FROM user WHERE username='$usr' AND pwd='$pas' LIMIT 1";
	$result = mysqli_query($db, $sql);
	$row = mysqli_fetch_assoc($result); 
    if($result && mysqli_affected_rows($db) >0){ 
        
        session_start(); 
        $_SESSION['username'] = $row['username']; 
        $_SESSION['pwd'] = $row['pwd']; 
       // $_SESSION['lname'] = $row['last_name']; 
        $_SESSION['logged'] = TRUE; 
        header("Location: insertion.php"); // Modify to go to the page you would like
		echo "good";
        exit; 
    }else{ 
       // header("Location: index.html"); 
		echo "erreur";
       // exit; 
    } 
}else{    //If the form button wasn't submitted go to the index page, or login page 
    header("Location: readdb.php");     
    exit; 
} 
?> 
<?php
$servername = "elephant.ecs.westminster.ac.uk";
$username = "w1423825";
$password = "9fypoTY1kE7M";
$dbname = "w1423825_0";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name_user = $_POST["username"];
$email_user = $_POST["email"];

$sql = "INSERT INTO mue_users (userName, userEmail)
VALUES ('$name_user', '$email_user')";

if (mysqli_query($conn, $sql)) {
   header( 'Location: ../index.php?registered=yes' );
	
} else {
   header( 'Location: ../create_account.php?duplicate=yes' );
	
}

mysqli_close($conn);
?>
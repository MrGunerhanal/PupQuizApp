<?php
session_start();

$con = mysqli_connect("elephant.ecs.westminster.ac.uk","w1423825","9fypoTY1kE7M","w1423825_0");

$email = $_POST['email'];

$sel_user = "select * from mue_users where userEmail='$email'";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

$row = mysqli_fetch_array($run_user,MYSQLI_ASSOC);

if($check_user>0){

$_SESSION["email"] = $email;
$_SESSION["username"] = $row["userName"];
	
}

else {

header( 'Location: ../index.php?registered=no' );

}

if(isset($_SESSION["email"])) {
header("Location:../iphone_main.php");
}

?>
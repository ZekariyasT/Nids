<?php
include 'database_configuration.php';
    $name =  $_POST['fullname'];
	$gender = $_POST['gender'];
	$adress =  $_POST['address'];
	$username =  $_POST['username'];
	$ps =  $_POST['password'];
	$pass =  md5($ps);
    $userid = $_POST['id'];

$sql = "UPDATE users SET fullname ='$name', gender='$gender ', address='$adress', username='$username', password='$pass'  WHERE userid='$userid'";
if ($conn->query($sql) === TRUE) {
header("location:logout.php");
} else {
    echo "Error updating record: " . $con->error;
}

$con->close();
?>

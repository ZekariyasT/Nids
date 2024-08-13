<?php
include 'database_configuration.php';
$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$id= $_POST['id'];
$sql = "UPDATE issuedid SET id ='$id', firstname='$fname', lastname='$lname'
 WHERE uid='$id'";
if ($conn->query($sql) === TRUE) {
header("location:viewids.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
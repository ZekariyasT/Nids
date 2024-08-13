<?php
include 'database_configuration.php';
$id = $_GET['id'];



$sql = "DELETE FROM registration WHERE regstrationid ='$id'";

if ($conn->query($sql) === TRUE) {
 header("location:administrator.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>
<?php
session_start();
$current = $_SESSION['username'];
$id = $_GET['id'];
include 'database_configuration.php';
$query = "UPDATE registration SET status = 'Approved' WHERE regstrationid = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
				alert(\"user request Successfully approved \");
				window.location = (\"kebeleregisteredC.php\")
				</script>";
    }
	?>


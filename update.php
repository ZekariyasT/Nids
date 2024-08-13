<?php

include 'database_configuration.php';

$subject = $_POST['subject'];
$descripton = $_POST['description'];
$id = $_POST['id'];
$sql = "UPDATE announcements SET subject='$subject', description='$descripton' WHERE id ='$id'";

if ($conn->query($sql) === TRUE) {
    echo "<script type = \"text/javascript\">
                alert(\"announcement has been succesfully updated ! \");
                window.location = (\"announcements.php\")
                </script>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

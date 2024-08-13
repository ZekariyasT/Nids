<?php
include 'database_configuration.php';
$id = $_GET['id'];
$sql = "DELETE FROM issuedid WHERE id ='$id'";
if ($conn->query($sql) === TRUE) {
    echo "<script type = \"text/javascript\">
    alert(\"residents id deleted succesfully \");
    window.location = (\"viewids.php\")
    </script>";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();

?>
<?php
include('include.php');
?>
<?php
include 'database_configuration.php';
$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$date = date('Y/m/d');
$expiry_date=date('Y/m/d', strtotime('+1 years'));
$sql = "INSERT INTO issuedid (id,firstname, lastname, issueddate, expirydate) 
VALUES ('$id', '$fname','$lname', '$date', '$expiry_date')";
if ($conn->query($sql) === TRUE) {
    echo   "<script type = \"text/javascript\">
    alert(\"id information succesfully saved \");
    window.location = (\"viewids.php\")
    </script>";
//header("location:explore.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
   <footer class="w3-footer w3-amber">
<p style="text-align:center" Color:red> developed by jack shewa</p>
</footer>

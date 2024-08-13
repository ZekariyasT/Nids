<?php
include('include.php');
?>
<?php
include 'database_configuration.php';
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$address = $_POST['address'];
$id = $_POST['id'];
$email= $_POST['email'];
$dates = date('Y/m/d');
//$sql2 = "SELECT * from registration WHERE regstrationid='$id' ";
//if($conn->query($sql)===TRUE){
$sql = "INSERT INTO renewrequest (firstname,lastname,address,id,email,dates) 
VALUES ('$fname', '$lname', '$address', '$id','$email', '$dates')";
if ($conn->query($sql) === TRUE) {
header("location:residentexplore.php");
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

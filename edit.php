<?php
include('include.php');
?>
<?php
include 'database_configuration.php';
$name = $_POST['name'];
$dateofbirth = $_POST['dateofbirth'];
$address = $_POST['address'];
$bloodgroup = $_POST['bloodgroup'];
$town = $_POST['town'];
$local = $_POST['local'];
$state= $_POST['state'];
$nationality = $_POST['nationality'];
$occupation = $_POST['occupation'];
$gender = $_POST['gender'];
$height= $_POST['height'];
$phone = $_POST['phonenumber'];
$id = $_POST['id'];


$sql = "UPDATE registration SET name='$name', dateofbirth='$dateofbirth', address='$address', bloodgroup='$bloodgroup', , town='$town', local='$local', state='$state', nationality='$nationality', occupation='$occupation', gender='$gender', height='$height', phonenumber='$phone'  WHERE regstrationid = '$id'";

if ($conn->query($sql) === TRUE) {
 header("location:explore.php");
} else {
   echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

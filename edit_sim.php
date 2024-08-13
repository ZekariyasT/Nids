<?php
include('include.php');
?>
<?php

$myid = $_GET['id'];
include 'database_configuration.php';

$sql = "SELECT * FROM registration where regstrationid = '$myid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       $name = $row['name'];
$dateofbirth = $row['dateofbirth'];
$address = $row['address'];
$bloodgroup = $row['bloodgroup'];
$town = $row['town'];
$local = $row['local'];
$state= $row['state'];
$nationality = $row['nationality'];
$occupation = $row['occupation'];
$gender = $row['gender'];
$height= $row['height'];
$phonenumber = $row['phonenumber'];
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<title>SIRES | Edit SIM</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/w3.css">
<link rel="stylesheet" href="style/bootstrap.min.css">
<link rel="icon" href="images/icon.png">
<link rel="stylesheet" href="jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="jquery-1.12.4.js"></script>
  <script src="jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
 
<style>
input[type=text], input[type=password] , input[type=number]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
</style>
<body>
<div class="w3-container w3-red">
  <h1>SIRES</h1>
</div>
  <ul class="w3-navbar w3-light-grey">
    <li><a href="standard_user.php">Register user</a></li>
    <li><a href="viewannouncements.php">Announcements</a></li>
    <li><a href="explore.php">Explore</a></li>
    <li><a href="account.php">Password Update</a></li>
<li class="w3-right"><a class="w3-green" href="logout.php">Logout (<?php echo"$current"; ?>)</a></li>
  </ul>
  <div class="container">
<h2>Edit user data</h2>
<form action="edit.php" method="POST" enctype="multipart/form-data" name="addroom">
 <label><b>name</b></label>
    <input type="text" placeholder="Enter First Name" value="<?php echo"$name"; ?>" name="name" required>

    <label><b>date of birth</b></label>
    <input type="text" placeholder="Enter Middle Name" value="<?php echo"dateofbirth"; ?>" name="dateofbirth" required>

    <label><b>address</b></label>
    <input type="text" placeholder="Enter address" value="<?php echo"$address"; ?>" name="address" required>
     <label><b>blood group/b></label>
    <input type="text" placeholder="Enter Address" value="<?php echo"$bloodgroup"; ?>" name="bloodgroup" required>
     <label><b>town</b></label>
    <input type="text" placeholder="Enter Address" value="<?php echo"$town"; ?>" name="town" required>
     <label><b>local govt</b></label>
    <input type="text" placeholder="Enter Address" value="<?php echo"$local"; ?>" name="local" required>
     <label><b>state</b></label>
    <input type="text" placeholder="Enter Address" value="<?php echo"$state"; ?>" name="state" required>

<label><b>nationality</b></label>
    <input type="text" placeholder="Enter Address"value="<?php echo"$nationality"; ?>" name="nationality" required>

 <label><b>occupation</b></label>
    <input type="text" placeholder="Enter Address"value="<?php echo"$occupation"; ?>" name="occupation" required>


    <label><b>Gender</b></label>
    <select name="gender" required><option>Male</option><option>Female</option></select>

    
<label><b>height</b></label>
<input type="text" id="datepicker" value="<?php echo"$height"; ?>" name="height"required>

    
    <label><b>Phone Number</b></label>
    <input type="number" placeholder="546466464" value="<?php echo"$phonenumber"; ?>" name="phonenumber"required>
    <input type="hidden" name="id" value="<?php echo"$myid"; ?>">
<br>
    <button type="submit" class="w3-btn w3-red">Update data</button>
<br><br>
<?php
  

  

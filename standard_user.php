<?php
include('include.php');
$signature=$current;
?>

<!DOCTYPE html>
<html>
<title> Ethiopian Citizens national id card system</title>
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
  <h1>ETHIOPIAN GOVERNMENT NATIONAL ID CARD SYSTEM</h1>
</div>
<ul class="w3-navbar w3-light-grey">
    <li><a href="standard_user.php">Register citizen</a></li>
     <li><a href="request renewal.php">Request renewal</a></li>
    <li><a href="viewannouncements.php">Announcements</a></li>
    <li><a href="explore.php">Explore</a></li>
    <li><a href="account.php">Password Update</a></li>
 
 
<li class="w3-right"><a class="w3-green" href="logout.php">Logout (<?php echo"$current"; ?>)</a></li>
  </ul>
  <div class="container">
<h2>ENTER YOUR INFORMATION TO REQUEST NATIONAL ID</h2>
<form action="addinfo.php" method="POST" enctype="multipart/form-data" name="residentinfo">
 <label><b>Name</b></label>
    <input type="text" placeholder="Enter First Name" name="name" required>
    <label><b>Age</b></label>
    <input type="number" placeholder="Enter you age" name="age" required>
    <label><b>address</b></label>
    <input type="text" placeholder="Enter address" name="address" required>
     <label><b>blood group</b></label>
    <input type="text" placeholder="Enter blood group" name="bloodgroup" required>
     <label><b>town</b></label>
    <input type="text" placeholder="Entertown" name="town" required>
     <label><b>kebele</b></label>
    <input type="text" placeholder="Enter your kebele" name="kebele" required>
     <label><b>state</b></label>
    <input type="text" placeholder="Enter state" name="state" required>
 <label><b>nationality</b></label>
    <input type="text" placeholder="Enter nationality" name="nationality" required>

 <label><b>occupation</b></label>
    <input type="text" placeholder="Enter occupation" name="occupation" required>


    <label><b>Gender</b></label>
    <select name="gender" required><option>Male</option><option>Female</option></select>

    
<label><b>height</b></label>
<input type="text" id="datepicker" name="height" required>

    <label><b>Phone Number</b></label>
    <input type="number" placeholder="+251" name="phonenumber" required>


    <label><b>Image</b></label>
   <input type="file" accept=".jpg,.png,.jpeg, gif" name="image" required>
<br>
    <button type="submit" class="w3-btn w3-red">SUBMIT</button>
<br><br>
<?php
  
?>
  
   <footer class="w3-footer w3-amber">
<p style="text-align:center" Color:red> developed by yakobe shewa</p>
</footer> 

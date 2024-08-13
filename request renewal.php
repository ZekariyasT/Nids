

<?php
include('include.php');
?>
<?php
if (empty($_SESSION['username'])) {
  $_SESSION['message'] = 'You Need to Login First';
  $_SESSION['type'] = 'error';
  header("location:index.php");
  exit(0);
}
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
input[type=text], input[type=password] , input[type=number],input[type=email]{
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
<ul class="w3-navbar w3-light-grey">
<li class="w3-right"><a class="w3-green" href="logout.php">Logout (<?php echo"$current"; ?>)</a></li>
  </ul>
  <div class="container">
<h2>ENTER YOUR DATA TO RENEW YOUR ID </h2>
<form action="renewform.php" method="POST" enctype="multipart/form-data" name="addroom">
 <label><b>First name</b></label>
    <input type="text" placeholder="Enter First Name" name="firstname" required>

    <label><b>Last name</b></label>
    <input type="text" placeholder="Enter your last name" name="lastname" required>
      
    <label><b>ID</b></label>
     <input type="text" placeholder="Enter your ID" name="id" required>
     <label><b>Email</b></label>
     <input type="email" placeholder="Enter your email" name="email" required>
    <label><b>Adress</b></label>  
    <input type="text" placeholder="Enter your address" name="address" required>
    <button type="submit" class="w3-btn w3-red">SUBMIT</button>
<br><br>
   <footer class="w3-footer w3-amber">
<p style="text-align:center" Color:red> developed by yakobe shewa</p>
</footer> 

<?php
include('include.php');
?>
<?php

$id = $_GET['id'];
include 'database_configuration.php';

$sql = "SELECT * FROM registration where regstrationid = '$id'";
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
$photo = $row['photo'];
       $date = $row['date'];
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<!DOCTYPE html>
<html><HTML>
<HEAD>
<META NAME="Generator" CONTENT="TextPad 4.4">
<LINK href="general.css" rel="stylesheet" type="text/css">
<script language="JavaScript">
<script language="JavaScript">
<!-- Begin
decodeString();
// End -->
</script>

<script>
function printWindow() {
bV = parseInt(navigator.appVersion);
if (bV >= 1) window.print();
}
//  End -->
</script>

<title> | View data</title>
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
table{
background-color:#f1f1c1;
 font-family:palatino;
}
select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
#tink{
border-bottom-style: solid;
border-bottom-width: 7px;
border-bottom-color:red}
#yes{
border-bottom-style: solid;
border-bottom-width: 7px;
border-bottom-color:red;

}

</style>
<body>
<div class="w3-container w3-red">
  <h1>ONLINE IDENTITTY CARD SYSTEM</h1>
</div>
  <ul class="w3-navbar w3-light-grey">
    <li><a href="standard_user.php">Register data</a></li>
    <li><a href="viewannouncements.php">Announcements</a></li>
    <li><a href="explore.php">Explore</a></li>
    <li><a href="account.php">Password Update</a></li>
 
<li class="w3-right"><a class="w3-green" href="logout.php">Logout (<?php echo"$current"; ?>)</a></li>
  </ul>
     
    
<table valign='top' align="center" style=" color:green; border:1px solid red;border-radius:15px;box-shadow:1px 10px 10px gray">
<tr>
<tr style="color:red"><td>ID</td><td><?php echo"$id"; ?><?php echo"$town"; ?></td></tr>
<tr><td>NAME:</td><td><h3 style="font-family:Courier New;"><?php echo"$name"; ?></h3></td></tr>
<tr><td>SEX:</td><td><?php echo"$gender"; ?></td></tr>
<tr><td>L.G.A:</td><td><?php echo"$local"; ?></td></tr>
<tr><td>STATE:</td><td><?php echo"$state"; ?></td></tr>
<tr id="yes" ><td>OCCUP:</td><td ><?php echo"$occupation"; ?></td></tr>
<tr id="tink"><td>PHOTO:</td><td><img src="<?php echo "$photo"?>" width="150px" height="130px"  ></td></tr>

<tr><td>NUMB:</td><td><?php echo"$phonenumber"; ?></td></tr>

<tr><td>COUNTRY:</td><td><h3 style="font-family:Courier New;"><?php echo"$nationality"; ?></td></tr>

</table>
</center>
<center><BR><BR><h1 style="color:red">CLICK TO PRINT</h1><BR>
<a href="javascript:printWindow()"style="text-decoration:none">THIS CARD</a>

</center>

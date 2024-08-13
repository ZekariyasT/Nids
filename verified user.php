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
       $signature = $row['signature'];
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<title> | View data</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/w3.css">
<link rel="stylesheet" href="style/bootstrap.min.css">
<link rel="icon" href="images/icon.png">
<script>
function printWindow() {
bV = parseInt(navigator.appVersion);
if (bV >= 1) window.print();
}
//  End -->
</script>
<style>
input[type=text], input[type=password] {
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
  <h1>ONLINE IDENTITY CARD SYSTEM</h1>
</div>
  <ul class="w3-navbar w3-light-grey">
    <li><a href="administrator.php">Registerd citizens</a></li>
    <li><a href="newuser.php">Register User</a></li>
    <li><a href="announcements.php">Announcements</a></li>
    <li><a href="myaccount.php">Account Update</a></li>
    <li><a href="users.php">Customize Users</a></li>
<li class="w3-right"><a class="w3-green" href="logout.php">Logout (<?php echo"$current"; ?>)</a></li>
  </ul>
  <form>
type<input type="text" name="searchbox" placeholder="inser id" >
<button name="search">Search</button>

</form>
  <div class="container">
<h2>View registered citizens</h2>
<h3 style="font-family:Courier New;"><?php echo"$id"; ?></h3>
   <ul class="w3-ul w3-card-4">
    <li class="w3-padding-16">
      <img src="<?php echo"$photo"; ?>" class="w3-left  w3-margin-right" style="width:150px">
      <span class="w3-large"><?php echo"$name |$bloodgroup| $height"; ?></span><br>
      <span>Address: <?php echo"$address"; ?></span><br>
<span>Phone Number: <?php echo"$phonenumber"; ?></span><br>
<span>date of birth: <?php echo"$dateofbirth"; ?></span><br>
<span>Gender: <?php echo"$gender"; ?></span><br>
<span>town: <?php echo"$town"; ?></span><br>
<span>L.G.A: <?php echo"$local"; ?></span><br>
<span>state: <?php echo"$state"; ?></span><br>
<span>country: <?php echo"$nationality"; ?></span><br>
<span>phone number: <?php echo"$phonenumber"; ?></span><br>
<span>blood group: <?php echo"$bloodgroup"; ?></span><br>
<span>occupation: <?php echo"$occupation"; ?></span><br>
<span>height: <?php echo"$height"; ?></span><br>
<span>Registration Date: <?php $date=date('d/m/y'); echo"$date"; ?>, <?php echo"$signature"; ?></span><br><br>
<span><BR><BR><h1 style="color:red">CLICK TO PRINT</h1><BR>
<a href="javascript:printWindow()"style="text-decoration:none">THIS CARD</a>

</span>
    </li>
    
   <footer class="w3-footer w3-amber">
<p style="text-align:center" Color:red> developed by Adun Endurance</p>
</footer>

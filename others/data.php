<?php
session_start();
$current = $_SESSION['username'];
$id = $_GET['id'];
include 'database_configuration.php';
$sql = "SELECT * FROM registration where regstrationid = '$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
$name = $row['name'];
$address = $row['address'];
$bloodgroup = $row['bloodgroup'];
$town = $row['town'];
$local = $row['kebele'];
$state= $row['state'];
$nationality = $row['nationality'];
$occupation = $row['occupation'];
$gender = $row['gender'];
$phonenumber = $row['phonenumber'];
$photo = $row['photo'];
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
  <div class="container">
  <ul class="w3-navbar w3-light-grey">
<li class="w3-right"><a class="w3-green" href="logout.php">Logout (<?php echo"$current"; ?>)</a></li>
  </ul>
<h2>EFDRE ETHIOPIA</h2>
<h3 style="font-family:Courier New;"><?php echo"$id"; ?></h3>
   <ul class="w3-ul w3-card-4">
    <li class="w3-padding-16">
      <img src="<?php echo"$photo"; ?>" class="w3-left  w3-margin-right" style="height:120px ">
<span>Name: <?php echo"$name"; ?></span><br>
<span>Bloodgroup: <?php echo"$bloodgroup"; ?></span><br>
<span>Address: <?php echo"$address"; ?></span><br>
<span>Phone Number: <?php echo"$phonenumber"; ?></span><br>
<span>Gender: <?php echo"$gender"; ?></span><br>
<span>town: <?php echo"$town"; ?></span><br>
<span>kebele: <?php echo"$local"; ?></span><br>
<span>woreda: <?php echo"$state"; ?></span><br>
<span>country: <?php echo"$nationality"; ?></span><br>
<span>occupation: <?php echo"$occupation"; ?></span><br>
<span>Registration Date: <?php $date=date('d/m/y'); echo"$date"; ?>, <?php echo"$signature"; ?></span><br><br>
<span><BR><BR><h3 style="color:red">CLICK TO PRINT</h3><BR>
<a href="javascript:printWindow()"style="text-decoration:none">THIS CARD</a>
</span>
    </li>
   <footer class="w3-footer w3-amber">
<p style="text-align:center" Color:red> developed by yakobe shewa</p>
</footer>

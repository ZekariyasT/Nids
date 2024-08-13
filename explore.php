<?php
include('include.php');
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<title> Registered citizens</title>
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
<h2>THIS IS INFORMATION THAT YOU HAVE SENT </h2>
<table class="w3-table-all">
    <tr>
    <th><u>No<u/></th>
      <th>USER NAME</th>
      <th>NAME</th>
      <th>ADDRESS</th>
      <th>BLOOD GROUP</th>
      <th>TOWN</th>
      <th>kebele</th>
      <th>STATE</th>
      <th>OCCUPATION</th>
      <th>PHONE NUMBER</th>
      <th>DELETE</th>
    </tr>
<?php
  include 'database_configuration.php';

$sql = "SELECT * from registration  where signature = '$current' ORDER BY dates";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $no=1;
  
    while($row = $result->fetch_assoc()) {
         echo
        "<tr><td>".$no."</td>
         <td>".$current."</td>
         <td>" . $row["name"]. "</td>
         <td>" . $row["address"]. "</td>
         <td>" . $row["bloodgroup"]. "</td>
         <td>" .  $row["town"]. "</td>
         <td>" . $row["kebele"]. "</td>
         <td>" . $row["state"]. "</td>
         <td>" . $row["occupation"]. "</td>
         <td>" .$row["phonenumber"];

       echo '</td><td><a style="font-size:12px;" class="w3-btn w3-red" href="delete_sim.php?id='.$row['regstrationid'].'">Delete</a>';
    }
} else {
    print '
</table><div class="w3-panel w3-leftbar w3-light-grey">
  <p class="w3-xlarge w3-serif">
  <i><b>0</b> Record(s) found on DataBase</i></p>
</div>';
}
$conn->close();
?>
  
  </table>
   <footer class="w3-footer w3-amber">
<p style="text-align:center" Color:red> developed by yakobe shewa</p>
</footer> 

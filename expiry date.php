<html lang="en" >
 <head>
<meta charset="UTF-8">
<title>Technopoints | Expiration</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/index.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300'>
<style>
body {
    background: url("bgimg.jpeg");
	background-size:100%;
	background-repeat: no-repeat;
	position: relative;
	background-attachment: fixed;
	}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
<body>
  <div id="registration-form">
	<div class='fieldset'>
    <legend>Technopoints</legend>
		<form action="" method="post" data-validate="parsley">
			<div class='row'>
			<!--	<label for='firstname'>First Name</label> -->
				<input type="text" placeholder="First Name" name='firstname' id='firstname' data-required="true" data-error-message="Your First Name is required" required>
			</div>
			<div class='row'>
			<!--	<label for="lastname">Last Name</label> -->
				<input type="text" placeholder="Last Name"  name='lastname' data-required="true" data-type="email" data-error-message="Your Last Name is required" required>
			</div>
			<div class='row'>
			<!--	<label for="email">Confirm your E-mail</label> -->
				<input type="text" placeholder="E-mail" name='email' data-required="true" data-error-message="Your E-mail must correspond" required>
			</div>
			<input type="submit" value="Register" name="register">
		</form>
	</div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/parsley.js/1.2.2/parsley.min.js'></script>
 
<?php   // this code is use to insert the form details and register and expiration date
include 'dbconfig.php';
if(isset($_POST['register'])){
$firstname = $_POST['firstname'];
$lastname  = $_POST['lastname'];
$email 	   = $_POST['email'];
$date      = date('Y/m/d');
$expdate   = date('Y/m/d', strtotime('+1 years'));
$fetch = "INSERT INTO `expiration`(`firstname`, `lastname`, `mail`, `registerdate`, `expirationdate`) VALUES ('$firstname','$lastname','$email','$date','$expdate')";
$fire = mysqli_query($con,$fetch);
}
?>
 
<div class="container">
  <h2>Previous Entries</h2>
  <p>You can see registration date and expiration date of each user below:</p>            
  <table class="table table-hover">
    <thead>
      <tr class="info">
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
		<th>Registration Date</th>
        <th>Expiration Date</th>
		<th>Status</th>
      </tr>
    </thead>
    <tbody>
<?php
$fetchqry = "SELECT * FROM `expiration`";
$result=mysqli_query($con,$fetchqry);
$num=mysqli_num_rows($result);
$status="";
 if(strtotime(date("Y/m/d")) < strtotime($date2)) {
 $status="Active";
 }
 	else 
 		{ 
 	$status="Expired";
}

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
	   <tr>
        <td><?php echo $row['firstname'];?></td>
        <td><?php echo $row['lastname'];?></td>
		<td><?php echo $row['mail'];?></td>
        <td><?php echo $date1 = $row['registerdate'];?></td>
		<td><?php echo $date2 = $row['expirationdate'];?></td>
		<td><?php if(strtotime(date("Y/m/d")) < strtotime($date2)) echo "Active"; else { echo "Expired";} ?></td>
      </tr>											<?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>
<style>
body{
  background:#b4b4b4;
}
 
#registration-form {
  font-family:'Open Sans Condensed', sans-serif;
	width: 400px;
  min-width:250px;
	margin: 20px auto;
	position: relative;
}
 
#registration-form .fieldset {
	background-color:#d5d5d5;
 
	border-radius: 3px;
  
}
 
 #registration-form legend {
	text-align: center;
	background: #364351;
	width: 100%;
	padding: 30px 0;
	border-radius: 3px 3px 0 0;
	color: white;
font-size:2em;
}
 
.fieldset form{
  border:1px solid #2f2f2f;
  margin:0 auto;
  display:block;
  width:100%;
  padding:30px 20px;
  box-sizing:border-box;
  border-radius:0 0 3px 3px;
}
.placeholder #registration-form label {
	display: none;
}
 .no-placeholder #registration-form label{
margin-left:5px;
  position:relative;
  display:block;
  color:grey;
  text-shadow:0 1px white;
  font-weight:bold;
}
/* all */
::-webkit-input-placeholder { text-shadow:1px 1px 1px white; font-weight:bold; }
::-moz-placeholder { text-shadow:0 1px 1px white; font-weight:bold; } /* firefox 19+ */
:-ms-input-placeholder { text-shadow:0 1px 1px white; font-weight:bold; } /* ie */
#registration-form input[type=text] {
	padding: 15px 20px;
	border-radius: 1px;
  margin:5px auto;
  background-color:#f7f7f7;
	border: 1px solid silver;
 
	-webkit-box-shadow: inset 0 1px 5px rgba(0,0,0,0.2);
	box-shadow: inset 0 1px 5px rgba(0,0,0,0.2), 0 1px rgba(255,255,255,.8);
	width: 100%;
 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
  -webkit-transition:background-color .5s ease;
-moz-transition:background-color .5s ease;
-o-transition:background-color .5s ease;
-ms-transition:background-color .5s ease;
transition:background-color .5s ease;
}
.no-placeholder #registration-form input[type=text] {
	padding: 10px 20px;
}
 
#registration-form input[type=text]:active, .placeholder #registration-form input[type=text]:focus {
	outline: none;
	border-color: silver;
  background-color:white;
}
 
#registration-form input[type=submit] {
  font-family:'Open Sans Condensed', sans-serif;
  text-transform:uppercase;
  outline:none;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	width: 100%;
	background-color: #5C8CA7;
	padding: 10px;
	color: white;
	border: 1px solid #3498db;
	border-radius: 3px;
	font-size: 1.5em;
	font-weight: bold;
	margin-top: 5px;
	cursor: pointer;
  position:relative;
  top:0;
}
 
#registration-form input[type=submit]:hover {
	background-color: #2980b9;
}
 
#registration-form input[type=submit]:active {
background:#5C8CA7;
}
 
 
.parsley-error-list{
background-color:#C34343;
padding: 5px 11px;
margin: 0;
list-style: none;
border-radius: 0 0 3px 3px;
margin-top:-5px;
  margin-bottom:5px;
  color:white;
  border:1px solid #870d0d;
  border-top:none;
    -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  position:relative;
  top:-1px;
  text-shadow:0px 1px 1px #460909;
    font-weight:700;
  font-size:12px;
}
.parsley-error{
	border-color:#870d0d!important;
  border-bottom:none;
}
#registration-form select{
	width:100%;
	padding:5px;
}
::-moz-focus-inner {
  border: 0;
}
</style>
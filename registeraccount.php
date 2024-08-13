
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Ethiopian National Citizen Identification System</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/logok.PNG">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="assets/css/style.css"> </head>
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">


	<link rel="stylesheet" href="style/w3.css">
	<link rel="stylesheet" href="style/bootstrap.min.css">
	<link rel="icon" href="images/icon.png">

<body>
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left" ><img class="img-fluid" float="left" left="10px" width="50%" height="70%" ;
							 src="assets/img/logok.PNG" alt="Logo">
							
						<div class="large-6 medium-6 columns">
							
							
							<h2 class="color-white heading" style=" padding-left: 70px; color: #fff; font-family: 'Open Sans', 'sans-serif';">NIDSEC | National ID System For Ethiopian Citizen</h2>
							<hr>
							<h4 class="color-white " style=" padding-left: 20px; line-height: 37px; color: rgb(10, 0, 0); font-family: 'Open Sans', 'sans-serif';"> The National ID System For Ethiopian Citizen, called NIDSEC, is a unique, reliable and secure way of verifying an individual's identity. It will establish a reliable database of all Ethiopian citizens and will involve the issuance of a unique lifelong National Identification Number to every person.
							</h4>
						</div>
					</div>
					<div class="login-right">
						<div class="login-right-wrap">

                        <h1>Register As Resident</h1>
							<p class="account-subtitle">Only Resident Account Is Created Here</p>
							
						<div class="row">
					<div class="col-lg-12">
						<?php
						if(isset($_POST['send'])) {
						$fullname = $_POST['fullname'];
						$gender = $_POST['gender'];
						$address = $_POST['address'];
						$myusername = $_POST['username'];
						$role = $_POST['role'];
						$ps=$_POST['password'];
						$pass=md5($ps);
						$email=$_POST['email'];
						//$pass=md5($pass); // Encrypted Password
						include 'database_configuration.php';
						
						$sql = "INSERT INTO users (fullname, gender, address,email, username,password, role)
						VALUES ('$fullname', '$gender', '$address','$email', '$myusername','$pass', '$role')";
						if ($conn->query($sql) === TRUE) {
						 print '
						  <div class="w3-panel w3-green">
							<h3>Success!</h3>
							<p>you have succesfully registered your account.</p>
						  </div>
						';
						} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
						}
						
						$conn->close();
						}
						?>
						<form action="registeraccount.php" method="POST">
						<br>
						  <p>
						  <label>Full Name</label>
						  <input  class="form-control" name="fullname" type="text"  placeholder="Enter Full Name" required></p>
						
						  <p>
						  <label>Gender</label>
						  <select  class="form-control" id="sel1" name="gender"  required><option>Male</option><option>Female</option></select></p>
						 
						<label>Address</label>
						  <input  class="form-control" name="address" type="text" name="address" placeholder="Enter Address" required></p>
						  <label>Email</label>
						  <input  type="text" class="form-control" name="email" type="email"  placeholder="Enter email" required></p>
						 
						<label>Username</label>
						  <input  class="form-control" name="username" type="text"  placeholder="Enter Username" required></p>
						  <label>password</label>
						  <input  class="form-control" name="password" type="password"  placeholder="Enter password" required></p>
						 <p>
						  <label>Role</label>
						  <select class="form-control" id="sel1" name="role"  required><option>resident user</option></select></p>
						<button type="submit" name="send" class="w3-btn w3-red">Register User</button>
					</div>
                    </form>
                    
							
					<div class="text-center dont-have">Sign in <a href="index.php">Log in</a></div>

				</div>
			</div>
		</div>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/script.js"></script>

</body>

</html>

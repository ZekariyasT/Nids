
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
							<h1>LOGIN</h1>
							<p class="account-subtitle">TO NIDSEC</p>
							
                             <form action="index.php" method="POST">

								<div class="form-group">
									<input type="text" placeholder="Enter Username" name="username" class="form-control" required> </div>
								<div class="form-group">
									<input type="password" placeholder="Enter Password" name="password" class="form-control" required> </div>
								<div class="form-group">
                                 <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
								</div>
							</form>

							<div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a> </div>
							
							<div class="text-center dont-have">Don’t have an account? <a href="registeraccount.php">Register</a></div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/script.js"></script>
	<?php
  error_reporting(E_ALL ^ E_DEPRECATED);
if(isset($_POST['submit'])) {
include 'database_configuration.php';

$myuser = $_POST['username'];
$mypass = $_POST['password'];
$ps=md5($mypass);
//$mypass = crypt($mypass);
$sql = "SELECT * FROM users where username='$myuser' and password='$ps'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $role = $row['role'];
if ($role == "Admin") {
session_start();
$_SESSION['username'] = $myuser;
header("location:dashboard.php?user=$myuser");
}
else if ($role == "kebele officer") {
session_start();
$_SESSION['username'] = $myuser;
header("location:dashboardk.php?user=$myuser");
}
else if ($role == "resident user") {
session_start();
$_SESSION['username'] = $myuser;
header("location:dashboardr.php?user=$myuser");
} 
else  {
session_start();
$_SESSION['username'] = $myuser;
header("location:dashboardv.php?user=$myuser");
}
    }}
    else {
      echo "<script type = \"text/javascript\">
      alert(\"your username or password is incorrect \");
      window.location = (\"index.php\")
      </script>";
}
$conn->close();

}
?>
</body>

</html>

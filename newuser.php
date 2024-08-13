<?php
include('include.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Ethiopian National Citizen Identification System</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/logok.PNG">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="assets/css/style.css"> 
	<link rel="stylesheet" href="style/w3.css">
	<link rel="stylesheet" href="style/bootstrap.min.css">
	<link rel="icon" href="images/icon.png">
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
</head>

<body>
	<div class="main-wrapper">
		<div class="header">
			<div class="header-left">
				<a href="dashboard.php" class="logo"> <img src="assets/img/logok.PNG" width="50" height="70" alt="logo"> <span class="logoclass">NIDSEC</span> </a>
				<a href="dashboard.php" class="logo logo-small"> <img src="assets/img/logok.PNG" alt="Logo" width="30" height="30"> </a>
			</div>
			<a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
			<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
      <div class="top-nav-search">
				<form>	
				</form>
			</div>
			<ul class="nav user-menu">
				
				<li class="nav-item dropdown has-arrow">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img class="rounded-circle" src="assets/img/logok.PNG" width="31" alt="Soeng Souy"></span> </a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm"> <img src="assets/img/logok.PNG" alt="User Image" class="avatar-img rounded-circle"> </div>
							<div class="user-text">
								<h6>(<?php echo"$current"; ?>)</h6>
							
							</div>

						</div> <a class="dropdown-item" href="profile.php">My Profile</a> <a class="dropdown-item" href="logout.php">Logout(<?php echo"$current"; ?>)</a> </div>
				</li>
			</ul>
			<div class="top-nav-search">
				<form>
					<input type="text" class="form-control" placeholder="Search here">
					<button class="btn" type="submit"><i class="fas fa-search"></i></button>
				</form>
			</div>
		</div>
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li> <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
						<li class="list-divider"></li>
						<li> <a href="administrator.php"><i class="fas fa-registered"></i> <span> Registerd citizens </span></a>
							
						</li>
						<li class="active"> <a href="newuser.php"><i class="far fa-registered"></i> <span> Register User </span></a>
							
						</li>
						<li> <a href="announcements.php"><i class="fas fa-bullhorn"></i> <span> Announcements </span></a>
							
						</li>
						<li> <a href="viewrenewal.php"><i class="fas fa-redo"></i> <span> Renewal request </span></a>
							
						</li>
						<li> <a href="myaccount.php"><i class="far fa-user-circle"></i> <span>Account Update</span></a> </li>
						<li> <a href="issuedid.php"><i class="fas fa-id-card"></i><span>Register Issued id </span></a>
							
						</li>
						<li> <a href="viewids.php"><i class="fas fa-id-card"></i><span>View Issued Id </span></a>
							
						</li>
						<li> <a href="users.php"><i class="fas fa-user-edit"></i> <span> Customize Users </span></a>
							
						</li>
						
					
						
					</ul>
				</div>
			</div>
		</div>
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title mt-5">Register new user</h3> </div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<?php
						if(isset($_POST['submit'])) {
						$fullname = $_POST['fullname'];
						$gender = $_POST['gender'];
						$address = $_POST['address'];
						$myusername = $_POST['username'];
						$role = $_POST['role'];
						$pass=$_POST['password'];
						$ps=md5($pass);
						$email=$_POST['email'];
						//$pass=md5($pass); // Encrypted Password
						include 'database_configuration.php';
						
						$sql = "INSERT INTO users (fullname, gender, address,email, username,password, role)
						VALUES ('$fullname', '$gender', '$address','$email', '$myusername','$ps', '$role')";
						if ($conn->query($sql) === TRUE) {
						 print '
						  <div class="w3-panel w3-green">
							<h3>Success!</h3>
							<p>New user has been registered.</p>
						  </div>
						';
						} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
						}
						
						$conn->close();
						}
						?>
						<form action="newuser.php" method="POST">
						<br>
						  <p>
						  <label>Full Name</label>
						  <input  name="fullname" type="text"  placeholder="Enter Full Name" required></p>
						
						  <p>
						  <label>Gender</label>
						  <select  class="form-control" id="sel1" name="gender"  required><option>Male</option><option>Female</option></select></p>
						 
						<label>Address</label>
						  <input  name="address" type="text" name="address" placeholder="Enter Address" required></p>
						  <label>Email</label>
						  <input  type="text" class="form-control" name="email" type="email"  placeholder="Enter email" required></p>
						 
						<label>Username</label>
						  <input  name="username" type="text"  placeholder="Enter Username" required></p>
						  <label>password</label>
						  <input  name="password" type="password"  placeholder="Enter password" required></p>
						 <p>
						  <label>Role</label>
						  <select class="form-control" id="sel1" name="role"  required><option>Admin</option><option>resident user</option><option>kebele officer</option>
						  <option>verified user</option></select></p>
						<button type="submit" name="submit" class="w3-btn w3-red">Register User</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/raphael/raphael.min.js"></script>
	<script src="assets/plugins/morris/morris.min.js"></script>
	<script src="assets/js/chart.morris.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>
<?php
include('include.php');
?>
<?php
$id = $_GET['id'];
$da=$_GET['search'];
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
	echo "<script type = \"text/javascript\">
	alert(\"No results found for your id search please enter another id number or your data may be empty \");
	window.location = (\"verifycitizen.php\")
	</script>";
}

$conn->close();
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
</head>

<body>
	<div class="main-wrapper">
		<div class="header">
			<div class="header-left">
				<a href="dashboardv.php" class="logo"> <img src="assets/img/logok.PNG" width="50" height="70" alt="logo"> <span class="logoclass">NIDSEC</span> </a>
				<a href="dashboardv.php" class="logo logo-small"> <img src="assets/img/logok.PNG" alt="Logo" width="30" height="30"> </a>
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
			<ul class="nav user-menu">
			<li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span> </a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header"> <span class="notification-title">Notifications</span> <a href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/logok.PNG">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
								
								
							</ul>
						</div>
						<div class="topnav-dropdown-footer"> <a href="#">View all Notifications</a> </div>
					</div>
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
						<li> <a href="dashboardv.php"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
						<li class="list-divider"></li>
						
						<li> <a href="verifycitizen.php"><i class="fab fa-searchengin"></i> <span> Find Citizen </span></a>
							
						
					</ul>
				</div>
			</div>
		</div>
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					
				<div class="row">
					<div class="col-md-12 d-flex">
						<div class="card card-table flex-fill">
							<div class="card-header">
                            <h3>EFDRE ETHIOPIA</h3>
								
							</div>
							<div class="card-body">
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
							</div>
						</div>
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
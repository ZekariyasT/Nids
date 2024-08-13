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
    <script src="jquery-1.12.4.js"></script>
  <script src="jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
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
				<a href="dashboardr.php" class="logo"> <img src="assets/img/logok.PNG" width="50" height="70" alt="logo"> <span class="logoclass">NIDSEC</span> </a>
				<a href="dashboardr.php" class="logo logo-small"> <img src="assets/img/logok.PNG" alt="Logo" width="30" height="30"> </a>
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
						<li> <a href="dashboardr.php"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
						<li class="list-divider"></li>
						
						<li> <a href="residentrequest.php"><i class="far fa-registered"></i> <span> Register Citizen </span></a>
							
						</li>
                        <li> <a href="residentrenewal.php"><i class="fas fa-registered"></i> <span> Request Renewal</span></a>
							
						</li>
                        <li class="active"> <a href="residentview.php"><i class="fas fa-bullhorn"></i> <span> Announcements </span></a>
							
						</li>
                        <li> <a href="residentexplore.php"><i class="fas fa-list"></i> <span> Explore </span></a>
							
						</li>
						
						<li> <a href="residentpwd_upd.php"><i class="far fa-user-circle"></i> <span>Password Update</span></a> </li>

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
                            <h2>Announcements</h2>
								
							</div>
							<div class="card-body">
                           
                            <table class="w3-table-all w3-large">
                                <tr>
                                   <th>Subject</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                </tr>
                            <?php
                                include 'database_configuration.php';

                                $sql = "SELECT * FROM announcements";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                 while($row = $result->fetch_assoc()) {
                                 echo "<tr><td>". $row["subject"]. "</td><td>" . $row["description"]. "</td><td>" . $row["date"];
                                }
                                 } else {
                                  print '
                                </table><div class="w3-panel w3-leftbar w3-light-grey">
                                     <p class="w3-xlarge w3-serif">
                                <i><b>0</b> Announcement(s) found on DataBase</i></p>
                            </div>';
                            }
                             $conn->close();
                               ?>
                            </table>
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
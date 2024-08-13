
<?php
include("database_configuration.php");  
 session_start();
if(isset($_SESSION['username']))
 {
	$current = $_SESSION['username'];
 } else {
 ?>

<script>
  alert('You are not logged In !! Please Login to access this page');
  alert(window.location='index.php');
 </script>
 <?php
 }
 ?>				  

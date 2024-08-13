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
$date=$row['dates'];
 echo "<div class='w3-container'>
            
   
   <span>Name: <p align='justify'>$name </p></span><br>
   <span>Bloodgroup: <p align='justify'>$bloodgroup </p></span><br>
   <span>Address: <p align='justify'>$address </p> </span><br>
  <span>Phone Number: <p align='justify'>$phonenumber </p></span><br>
  <span>Gender: <p align='justify'>$gender </p></span><br>
  <span>town: <p align='justify'>$town </p></span><br>
  <span>kebele: <p align='justify'>$local </p></span><br>
  <span>woreda: <p align='justify'>$state </p></span><br>
  <span>country: <p align='justify'>$nationality </p></span><br>
  <span>occupation: <p align='justify'>$occupation </p></span><br>
  <span>Registration Date: <p align='justify'>$date </p></span><br>
            </div>";
            }  
        }
        else {
            echo "<script type = \"text/javascript\">
                alert(\"No results found for your id search please enter another id number \");
                window.location = (\"verifycitizen.php\")
                </script>";
    }

    ?>












    

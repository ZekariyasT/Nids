<?php
include('include.php');
?>
<?php

include 'database_configuration.php';
$code = "ET/";
$prefix="ID:";
$dt=date('y');
$slash="/";
$r=rand(100000000,900000000);
$id = "$code$r$slash$dt";
$statu = "pending";
$file=$_FILES['image']['tmp_name'];
$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_name= addslashes($_FILES['image']['name']);			
move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);	
$photo ="photos/" . $_FILES["image"]["name"];
$name = $_POST['name'];
$address = $_POST['address'];
$bloodgroup = $_POST['bloodgroup'];
$town = $_POST['town'];
$local = $_POST['kebele'];
$state= $_POST['state'];
$nationality = $_POST['nationality'];
$occupation = $_POST['occupation'];
$gender = $_POST['gender'];
$phone = $_POST['phonenumber'];
$age = $_POST['age'];
$date = date('Y/m/d');
$signature=$current;
$expiry_date=date('Y/m/d', strtotime('+1 years'));
if($age>18){
    $sql = "INSERT INTO registration (regstrationid,dates,age,expiry_date, name,address, bloodgroup, town,kebele, state,nationality,occupation,gender, phonenumber, photo,status,signature)
    VALUES ('$id', '$date','$age', '$expiry_date', '$name','$address', '$bloodgroup', '$town','$local','$state','$nationality','$occupation','$gender','$phone','$photo','$statu','$signature')";
    
    if ($conn->query($sql) === TRUE) {
        echo   "<script type = \"text/javascript\">
        alert(\"user request Successfully sent \");
        window.location = (\"residentexplore.php\")
        </script>";
    //header("location:explore.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }}
    else {
        echo   "<script type = \"text/javascript\">
        alert(\"age must be greater than 18 \");
        window.location = (\"residentrequest.php\")
        </script>";
    
    }
    
    $conn->close();
    ?>

   <footer class="w3-footer w3-amber">
<p style="text-align:center" Color:red> developed by jack shewa</p>
</footer>

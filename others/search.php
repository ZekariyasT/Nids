 
<?php

session_start();
$current = $_SESSION['username'];
?>
 
 <!DOCTYPE html>
<html>
<head>
<!DOCTYPE html>
<html>
<title> | View data</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/w3.css">
<link rel="stylesheet" href="style/bootstrap.min.css">
<link rel="icon" href="images/icon.png">
    <meta charset="utf-8">
    <title>Searching</title>
    <style type="text/css">
        * {
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 20%;
  background: #f1f1f1;
  margin-top: 5%;
  margin-left: 5%;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 10%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
   margin-top: 5%;
   
}
p{
    margin-top: 400px;
    margin-left: 10px;
    margin-right: 600px;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}
    </style>
</head>
<body>
<div class="container">
<div class="w3-green">
<ul class="w3-navbar w3-light-grey">
<li class="w3-right"><a class="w3-green" href="logout.php">Logout (<?php echo"$current"; ?>)</a></li>
<li><h2 class ="w3-green">WELLCOME TO CITIZENS IDENTITY VERIFICATION PAGE</h2></li>
  </ul>
  </div>
<form class="example" method="GET" action="data.php" >

  <input type="text" placeholder="Search.." name="id">
  <button type="submit" name="search">Search </button>
</form>
</body>
<footer class="w3-footer w3-amber">
<p style="text-align:center" Color:red>© Copyright2021:NATIONAL ID  SYSTEM</p>
</footer>
</div>

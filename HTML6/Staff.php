<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- css to display navigation bar -->

<style>
* {box-sizing: border-box;}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
  margin: 0;  
}


.topnav {
  overflow: hidden;
  background-color: #e9e9e9;}
  
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;}

.topnav a:hover {
  background-color: #ddd;
  color: black;}

.topnav a.active {
  background-color: #2196F3;
  color: white;}

.topnav input[type=text] {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;}

div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
* {box-sizing: border-box;}

.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {background-color: #4CAF50;}

@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;}
  
  .topnav input[type=text] {
    border: 1px solid #ccc;}}
   {


</style>
</head>
<!-- this displays navigation bar -->

<div class="topnav">
  <a href="home.php">Patient Details</a>
  <a class="active" href="Staff.php">Staff</a>
  <a href="Appointment.php">Appointments</a>
  <a href="Treatments.php">Treatments</a>
  <a href="index.html">Log Out</a>
</div>
  
<div style="padding-left:16px"></div>
  
<!-- start of page display -->

<center><h1>Staff Database</h1> 

<button onclick="dFunction()" class="button button1">Add Dentist</button>
<button onclick="adminFunction()" class="button button1">Dentist Admin</button>

<style>
table, th, td {
  border: 1px solid black;
}
</style>

<!-- form foor selecting patients -->

<body>

<div id="container">
<div id="content">
<?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "form_db";
 
        //create connection
        $con = mysqli_connect($host, $username, $password, $dbname, 8096);
        //check connection if it is working or not
        //$host = "localhost";
        //$username = "formdb_user";
        //$password = "abc123";
        //$dbname = "form_db";
 
        //create connection
        //$con = mysqli_connect($host, $username, $password, $dbname);
	
	$sql="SELECT * FROM Dentist_entries";
	$result=mysqli_query($con, $sql);
	
	echo"<table>";
	echo"<tr>
      <th>Dentist No.</th>
      <th>Dentist</th>
      <th>Experience</th>
	   <th>Profession</th>
	   <th>Date added</th>
	         
      </tr>";
    while($row=mysqli_fetch_array($result))
    {
	    $id=$row["dentistnum"];
	    $dentistnum=$row["dentistnum"];
	    $dentistn=$row["dentistn"];
	    $YOE=$row["YOE"];
	    $dentistp=$row["dentistp"];
	    $date=$row["date"];
    echo"<tr>
	    <td>$dentistnum</td>
	    <td>$dentistn</td>
	    <td>$YOE</td>
	    <td>$dentistp</td>
	    <td>$date</td>
	    </tr>";
    }
    echo"</table>";

mysqli_close($con);
?>

</div>
</div>
</center>

<script>
function dFunction() {
  window.open("Dentist.html");
  window.close();
}
function adminFunction() {
  window.open("dentistlogin.html");
  window.close();
}


</script>
</body>
</html>
  
  
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script> 


<!-- Script to read data from firebase, sort and display on the HTML page -->
<script src="patientrecieve.js"></script>

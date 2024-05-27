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
  <a href="Staff.php">Staff</a>
  <a class="active" href="Appointment.php">Appointments</a>
  <a href="Treatments.php">Treatments</a>
  <a href="Payments.html">Payments</a>
  <a href="index.html">Log Out</a>
  
</div>
  
<div style="padding-left:16px"></div>
  
<!-- start of page display -->


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
// $host = "localhost";
       // $username = "root";
        //$password = "";
       // $dbname = "form_db";
 
        //create connection
       // $con = mysqli_connect($host, $username, $password, $dbname, 8096);
          //check connection if it is working or not
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "form_db"; 
 
        //create connection
        $con = mysqli_connect($host, $username, $password, $dbname, 8096);
	
	$id =$_GET["id"];
	
	$sql="SELECT * FROM appointment_entries WHERE app_id =$id";
	
	$result=mysqli_query($con, $sql);
	$row=mysqli_fetch_array($result);
	
	$id =$row["app_id"];
	$patientn=$row["patientn_fld"];
	$dentistnum=$row["dentistnum"];
	$date =$row["date"];
	$time=$row["time"];
	$treatmentn=$row["treatmentn"];
	$checkin=$row["checkin"];
?>

<form method="post" action="processbookAppointment.php">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<center>
<table>


<tr>
<td>Appointment Number:</td><td><input type="text" name="app_id" value="<?php echo $id;?>"/></td>
</tr>

<tr>
<td>Patient Name:</td><td><input type="text" name="patientn_fld" value="<?php echo $patientn;?>"/></td>
</tr>

<tr>
<td>Dentist Name:</td><td><input type="text" name="dentistnum" value="<?php echo $dentistnum;?>"/></td>
</tr>

<tr>
<td>Date:</td><td><input type="text" name="date" value="<?php echo $date;?>"/></td>
</tr>

<tr>
<td>Time:</td><td><input type="text" name="time" value="<?php echo $time;?>"/></td>
</tr>


<tr>
<td><input type="submit" name="submit" value="Book Appointment"/></td>
</tr>

</table>
</center>

<center><img src="HSE.jpg" alt="HSE" width="450" height="275"></center>

</form>

<?php mysqli_close($con);?>

</div>
</div></center>
</body>
</html>
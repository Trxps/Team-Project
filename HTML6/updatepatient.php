<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- css to display navigation bar -->

<style>
* {box-sizing: border-box;}

body {
  font-family: Arial;
  background-color: white;  
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
input{
  position: absolute;
  left: 100px;
  top: 150px;
}
</style>
</head>
<!-- this displays navigation bar -->

<div class="topnav">
  <a class="active" href="home.php">Patient Details</a>
  <a href="Npatient.html">Patient</a>
  <a href="Dentist.html">Staff</a>
  <a href="Appointment.html">Appointments</a>
  <a href="Treatments.html">Treatments</a>
  <a href="index.html">Log Out</a>
  
</div>
  
<div style="padding-left:16px"></div>
  
<!-- start of page display -->

<center><h1>Update Patient</h1></center>
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
	
	$sql="SELECT * FROM patient_entries WHERE patientn_fld =$id";
	
	$result=mysqli_query($con, $sql);
	$row=mysqli_fetch_array($result);
	
	    $id=$row["patientn_fld"];
	    $patientn=$row["patientn_fld"];
	    $fname=$row["FirstName_fld"];
	    $lname=$row["surname_fld"];
	    $dob=$row["bday_fld"];
	    $address=$row["Address_fld"];
	    $contact=$row["contactinfo_fld"];
	    $nok=$row["nok_fld"];
	    $bloodtype=$row["bloodtype_fld"];
	    $patientnotes=$row["Patientnotes_fld"];
?>
<form method="post" action="processupdate.php">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>


<center>
<table>


<tr>
<td>Patient Number:</td><td><input type="text" name="patientn_fld" value="<?php echo $patientn;?>"/></td>
</tr>

<tr>
<td>First Name:</td><td><input type="text" name="FirstName_fld" value="<?php echo $fname;?>"/></td>
</tr>

<tr>
<td>Last Name:</td><td><input type="text" name="surname_fld" value="<?php echo $lname;?>"/></td>
</tr>

<tr>
<td>Date of Birth:</td><td><input type="date" name="bday_fld" value="<?php echo $dob;?>"/></td>
</tr>

<tr>
<td>Address:</td><td><input type="text" name="Address_fld" value="<?php echo $address;?>"/></td>
</tr>

<tr>
<td>Contact:</td><td><input type="text" name="contactinfo_fld" value="<?php echo $contact;?>"/></td>
</tr>

<tr>
<td>Next of Kin:</td><td><input type="text" name="nok_fld" value="<?php echo $nok;?>"/></td>
</tr>

<tr>
<td>Blood Type:</td><td><input type="text" name="bloodtype_fld" value="<?php echo $bloodtype;?>"/></td>
</tr>

<tr>
<td>Patient Notes:</td><td><textarea name="Patientnotes_fld" rows="6" cols="35"><?php echo $patientnotes;?></textarea></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="Update Patient"/></td>
</tr>


</table>
</center>

<center><img src="HSE.jpg" alt="HSE" width="450" height="275"></center>

</form>

<?php mysqli_close($con);?>

</div>
</div>
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
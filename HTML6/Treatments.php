<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
background-color: white;  }

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


</style>
<style>
table, th, td {
  border: 1px solid black;
  background-color: white;
}
</style>
</head>
<body>
  <div class="topnav">
  <a href="home.php">Patient Details</a>
  <a href="Staff.php">Staff</a>
  <a href="Appointment.php">Appointments</a>
  <a class="active" href="Treatments.php">Treatments</a>
  <a href="index.html">Log Out</a>
</div>

<h1>New Treatments</h1><br>
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
  
  $sql="SELECT * FROM treatments_entries";
  $result=mysqli_query($con, $sql);
  
  echo"<table>";
  echo"<tr>
      <th>Treatment No.</th>
      <th>Treatment</th>
      <th>Description</th>
      <th>Cost</th>
      </tr>";
      
    while($row=mysqli_fetch_array($result))
    {
      $id=$row["treatmentn"];
      $treatmentn=$row["treatmentn"];
      $treatmentt=$row["treatmentt"];
      $DOT=$row["DOT"];
      $COT=$row["COT"];
    echo"<tr>
      <td>$treatmentn</td>
      <td>$treatmentt</td>
      <td>$DOT</td>
      <td>$COT</td>
      </tr>";
    }
    echo"</table>";
    mysqli_close($con);
    ?>
</div>
</div>
</div>
<div style="padding-left:16px">
</div>
</body>
</html>

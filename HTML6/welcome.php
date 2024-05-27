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


.title {
 padding: 3px;
 font-size:75px;
 color:#2196F3;
}

.menu {
 padding-left: 10px;
 font-size:25px;
 color:#2196F3;
}
.menu a{
  background-color: #e9e9e9;
  
  color: black;
  
  
  text-decoration: none;
  font-size: 25px;
}

.menu a:hover {
  background-color: #ddd;
  color: black;}


.footer{
  width: 100%;
  background-color: #ddd;
  bottom:0;
  position:fixed;
  padding:6px;
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
  <a href="Appointment.php">Appointments</a>
  <a href="Treatments.php">Treatments</a>
  <a href="index.html">Log Out</a>
</div>
  
<div style="padding-left:16px"></div>
  
<!-- start of page display -->

<body>

<div class="title">
<a>Welcome Back Dr.XXXXX</a>
</div>

<div class="menu">
<p>Here are your appointments for the day</p><br>
<a href="home.php">Patient Details</a><br>
<a href="Appointment.php">Appointments</a><br>
<a href="Treatments.php">Treatments</a><br>
<a href="https://www.webmd.com/">Web MD</a><br><br><br>

<a href="index.html">Log Out</a><br>

</div>

<h3> Administrator Area</h3>
<?php
session_start();
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Hi " . $username . "!" . "
";
echo "Choose one of the menu options to Manage Comments, Products or Vendors. &nbsp;
&nbsp;";
echo "<a href='logout.php'>Logout</a>";
echo "<p><a href='managecomments.php'>Manage Comments</a>
<p><a href='manageproducts.php'>Manage Products</a>
<p><a href='managevendorss.php'>Manage Vendors</a>";
}

<div class="footer">
<p><strong>Copyright &copy; 2023 HSE. All Rights Reserved. </strong>
 <br>
 <a href="FooterPages/about.html">About</a> -
 <a href="FooterPages/services.html">References</a> -
 <a href="FooterPages/contactus.html">Contact Us</a> -
 <a href="FooterPages/terms.html">Terms of Trade</a>
</div><!-- end of footer -->

















<script>
function myFunction() {
  window.open("Npatient.html");
  window.close();
}
</script>
</body>
</html>

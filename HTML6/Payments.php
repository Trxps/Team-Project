<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
  font-family: Arial;
  background-color: white;  
}

input[type=text], select {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=button] {
  width: 25%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=button]:hover {
  background-color: #45a049;
}

div.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196f3;
  color: white;
}

.topnav input[type=text] {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}

@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

table, th, td {
  border: 1px solid black;
}
</style>
</head>

<body>

<!-- displays navgation bar   -->
<div class="topnav">
   <a href="home.php">Patient Details</a>
   <a href="Staff.php">Staff</a>
   <a href="Appointment.php">Appointments</a>
   <a href="Treatments.php">Treatments</a>
   <a href="index.html">Log Out</a>
</div>

<div style="padding-left:16px">
</div>
<?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "form_db";
 
        //create connection
        $con = mysqli_connect($host, $username, $password, $dbname, 8096);
        $con2 = mysqli_connect($host, $username, $password, $dbname, 8096);
        //check connection if it is working or not
        //$host = "localhost";
        //$username = "formdb_user";
        //$password = "abc123";
        //$dbname = "form_db";
 
        //create connection
        //$con = mysqli_connect($host, $username, $password, $dbname);
	
   $id = $_GET['id'];
	$sql="SELECT * FROM `appointment_entries` WHERE app_id = '$id';";
	$result=mysqli_query($con, $sql);
   
	echo"<center><h1>Appointment Details</h1></center>";
	echo"<center><table>";
	echo"<tr>
    <th>Appointment ID</th>
    <th>Patient Name</th>
    <th>Dentist</th>
	<th>Date</th>
	<th>Time</th>
	<th>Treatment</th>
	<th>Attended</th>
   </style></center> </tr>";


    while($row=mysqli_fetch_array($result))
    {
	    $id=$row["app_id"];
	    $patientn=$row["patientn_fld"];
	    $dentistnum=$row["dentistnum"];
	    $date=$row["date"];
	    $time=$row["time"];
	    $treatmentn=$row["treatmentn"];
	    $checkin=$row["checkin"];
	    
    echo"<tr>
	    <td>$id</td>
	    <td>$patientn</td>
	    <td>$dentistnum</td>
	    <td>$date</td>
	    <td>$time</td>
	    <td>$treatmentn</td>
	    <td>$checkin</td>
	    </tr>";
    }
    echo"</table>";
    mysqli_close($con);
   
   echo"<br><br><br>";
   $sql2="SELECT COT FROM `treatments_entries` WHERE treatmentn = '$treatmentn';";
	$result2=mysqli_query($con2, $sql2);
   echo"<center><table>";
	echo"<tr>
    <th>Appointment Cost</th>
    </style></center></tr>";
    while($row=mysqli_fetch_array($result2))
    {
    if($checkin=='true') {
	    $COT=$row["COT"];
       echo"<tr>
	    <td>$COT</td>
	    </tr>";}
    else{
       echo"Appointment not attended, no-show fee added!";
       echo"<tr>
	    <td>20</td>
	    </tr>";}
    }
    echo"</table>";
    mysqli_close($con2); 

	

?>
</div>
</div></center>

<!-- form for entering clients info  -->
<form name="frmNpatient" class="needs-validation " method="post" action="Payments.php">
<center>
<div class="col-50">
            <h1>Payment Details</h1>
            <label for="cname">Name on Card</label>
            <input type="text" id="" name="cardname" placeholder="John More Doe">

            <label for="ccnum">Card number</label>
		<input type="text" name="cardnum" id="" placeholder="0000 0000 0000 0000">      

            <label for="expmonth">Exp Date</label>
            <input type="text" id="" name="cardexp" placeholder="00/00">
		
		<div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="" name="CVV" placeholder="000">
				
		</div>
	</div>
<input type="submit" name="submit" value="Submit"> <!--onclick="sendnewpatient()">-->
</center>


<?php
if(isset($_POST['submit']))
    {
        $cardname = $_POST['cardname'];
        $cardnumber = $_POST['cardnum'];
        $cardexpirary = $_POST['cardexp'];
	     $CVV = $_POST['CVV'];
        $payment = $_POST['payment'];
        
        //database details. You have created these details in the third step. Use your own.
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "form_db";
 
        //create connection
        $con = mysqli_connect($host, $username, $password, $dbname, 3306);
        //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        //This below line is a code to Send form entries to database
        $sql = "INSERT INTO payment_entries ( cardname, cardnumber, cardexpirary, CVV, payment) VALUES ( '$cardname', '$cardnumber', '$cardexpirary', '$CVV', '$payment')";
      //fire query to save entries and check it with if statement
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            header("Location: http://localhost/HTML/Appointment.php");
            exit;
        }
      	else{
         	echo "Error, Message didn't send! Something's Wrong."; 
        }
      //connection closed.
        mysqli_close($con);
		
		
    }
?>

<center><img src="images/WeAccept.png" alt="We Accept Visa" width="350" height="250">
        <img src="images/verified.jpeg" alt="Verified Payment" width="350" height="250"></center>
<center><img src="images/HSE.jpg" alt="HSE" width="450" height="275"></center>
</body>
</html>

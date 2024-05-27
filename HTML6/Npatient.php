<?php
if(isset($_POST['submit']))
    {
        $patientn = $_POST['patientn'];
        $fname = $_POST['FirstName'];
	  $sname = $_POST['surname'];
        $dob = $_POST['bday'];
        $address = $_POST['Address'];
        $contact = $_POST['contactinfo'];
        $nok = $_POST['nok'];
        $blood = $_POST['bloodtype'];
        $notes = $_POST['Patientnotes'];
 
        //database details. You have created these details in the third step. Use your own.
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "form_db";
 
        //create connection
        $con = mysqli_connect($host, $username, $password, $dbname, 8096);
        //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        //This below line is a code to Send form entries to database
        $sql = "INSERT INTO patient_entries ( patientn_fld, FirstName_fld, surname_fld, bday_fld, Address_fld, contactinfo_fld, nok_fld, bloodtype_fld, Patientnotes_fld) VALUES ( '$patientn', '$fname', '$sname', '$dob', '$address', '$contact', '$nok', '$blood', '$notes')";
      //fire query to save entries and check it with if statement
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo "Message has been sent successfully!";
	    header("Location: http://localhost/HTML/home.php");
			exit;
        }
      	else{
         	echo "Error, Message didn't send! Something's Wrong."; 
        }
      //connection closed.
        mysqli_close($con);
    }
?>
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
	
	if(isset($_POST['submit']))
	{
		$id =$_POST['patientn_fld'];
		$fname=mysqli_real_escape_string($con, $_POST['FirstName_fld']);
		$lname=mysqli_real_escape_string($con, $_POST['surname_fld']);
		$dob=$_POST["bday_fld"];
		$address=mysqli_real_escape_string($con, $_POST['Address_fld']);
		$contact=mysqli_real_escape_string($con, $_POST['contactinfo_fld']);
		$nok=mysqli_real_escape_string($con, $_POST['nok_fld']);
		$bloodtype=mysqli_real_escape_string($con, $_POST['bloodtype_fld']);
		$patientnotes=mysqli_real_escape_string($con, $_POST['Patientnotes_fld']);
		
		
		$sql= "UPDATE patient_entries SET FirstName_fld='$fname', surname_fld='$lname', bday_fld='$dob', Address_fld='$address', 
		          contactinfo_fld='$contact', nok_fld='$nok', bloodtype_fld='$bloodtype', Patientnotes_fld='$patientnotes' WHERE patientn_fld='$id'";
		
		if(mysqli_query($con, $sql))
		{
			header("Location: http://localhost/HTML/home.php");
			exit;
		}
		else
		{
			echo("The record could not be updated");
		}
	}
		mysqli_close($con);
	
?>
		
		
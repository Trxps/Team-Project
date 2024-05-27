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
	
	$id=$_GET["id"];
	$sql="UPDATE appointment_entries SET patientn_fld =' ', dentistnum=' ' ,treatmentn=' ',checkin=' ' WHERE app_id =$id";

	if (mysqli_query($con, $sql))
	{
			header("Location: http://localhost/HTML/Appointment.php");
			exit;
	}
	else
	{
		echo("The record could not be deleted");
	}
	
	mysqli_close($con);
	
	?>
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
	$sql="DELETE FROM patient_entries WHERE patientn_fld =$id";
	
	if (mysqli_query($con, $sql))
	{
			header("Location: http://localhost/HTML/home.php");
			exit;
	}
	else
	{
		echo("The record could not be deleted");
	}
	
	mysqli_close($con);
	
	?>
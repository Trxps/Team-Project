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
		$id =$_POST['app_id'];
		$patientn=mysqli_real_escape_string($con, $_POST['patientn_fld']);
		$dentistnum=mysqli_real_escape_string($con, $_POST['dentistnum']);
		$date =$_POST['date'];
		$time=$_POST['time'];
		$treatmentn=mysqli_real_escape_string($con, $_POST['treatmentn']);
		$checkin=mysqli_real_escape_string($con, $_POST['checkin']);

		
		
		$sql= "UPDATE appointment_entries SET patientn_fld='$patientn', dentistnum='$dentistnum', treatmentn='$treatmentn', checkin='$checkin' WHERE app_id='$id'";
		
		if(mysqli_query($con, $sql))
		{
			header("Location: http://localhost/HTML/appointment.php");
			exit;
		}
		else
		{
			echo("The record could not be updated");
		}
	}
		mysqli_close($con);
	
?>
		
		
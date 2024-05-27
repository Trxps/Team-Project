<?php
if(isset($_POST['submit']))
    {
        $dentistnum = $_POST['dentistnum'];
        $dentistn = $_POST['dentistn'];
        $YOE = $_POST['YOE'];
	    $dentistp = $_POST['dentistp'];
        $Date = $_POST['date'];
 
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
        $sql = "INSERT INTO dentist_entries (dentistnum, dentistn, YOE, dentistp, date) VALUES ('$dentistnum', '$dentistn', '$YOE', '$dentistp', '$Date')";
      //fire query to save entries and check it with if statement
        $rs = mysqli_query($con, $sql);
        if($rs)
        header("Location: http://localhost/HTML/staff.php");
            exit;
      //connection closed.
        mysqli_close($con);
    }
?>
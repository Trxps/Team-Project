
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
        //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
	
	$sql = "select * from  patient_entries";
	$result = ($con->query($sql));
	$row = [];
	if($result->num_rows >0);
	{
		$row = $result->fetch_all(MYSQLI_ASSOC);
	}

	
?>

<!DOCTYPE html>
<html>
<style>
    td,th {
        border: 1px solid black;
        padding: 10px;
        margin: 5px;
        text-align: center;
    }
</style>
  
<body>
    <table>
        <thead>
            <tr>
                <th>Patient Number</th>
                <th>First Name</th>
                <th>Last Name</th>
	       <th>Date of Birth</th>
	       <th>Address</th>
	       <th>Contact Info</th>
	       <th>Next of Kin</th>
	       <th>Blood Type</th>
	       <th>Patient Notes</th>
            </tr>
        </thead>
        <tbody>
            <?php
               if(!empty($row))
	       foreach($row as $rows)
              { 
            ?>
            <tr>
  
                <td><?php echo $rows['patientn_fld']; ?></td>
                <td><?php echo $rows['FirstName_fld']; ?></td>
                <td><?php echo $rows['surname_fld']; ?></td>
	       <td><?php echo $rows['bday_fld']; ?></td>
	       <td><?php echo $rows['Address_fld']; ?></td>
	       <td><?php echo $rows['contactinfo_fld']; ?></td>
	       <td><?php echo $rows['nok_fld']; ?></td>
	       <td><?php echo $rows['bloodtype_fld']; ?></td>
	       <td><?php echo $rows['Patientnotes_fld']; ?></td>
  
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
  
<?php   
    mysqli_close($con);
?>
	       
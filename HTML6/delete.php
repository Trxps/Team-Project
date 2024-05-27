<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Employee Details</h2>

<table border="8">
  <tr>
    <td>Sr.No.</td>
    <td>Full Name</td>
    <td>Age</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php

include "Npatient.php"; // Using database connection file here

$records = mysqli_query($dbname,"select * from form_db"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['patientt']; ?></td>
    <td><?php echo $data['patientn']; ?></td>
    <td><?php echo $data['mcard']; ?></td>    
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>
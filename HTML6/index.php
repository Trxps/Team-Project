<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
body {
  font-family: Arial;
  background-color: white;  
}

button {   
       background-color: black;   
       width: 100%;  
        color: white;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: lightgrey;  
    }   
</style>   
</head>    
<body>  
<?php
if (empty($_SESSION))
session_start();
if (isset($_SESSION['errors'])) {
echo "<div class='form-errors'>";
foreach($_SESSION['errors'] as $error)
{
echo "<p>";
echo $error;
echo "</p>";
}
echo "</div>";
}
unset($_SESSION['errors']);
?>

    <center> <h1> Staff Login Page </h1> </center>   
    <form action="login_action.php" method="POST"> 
		<center>
        <div class="container">   
            <label>Username(dentist/receptionist number) : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button value="Login" type="submit">Login</button>   
        </div> 
		<center><img src="images/HSE.jpg" alt="HSE" width="450" height="275"></center>
	</center>		
    </form>   
</body>     
</html> 
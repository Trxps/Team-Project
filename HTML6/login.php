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
<h3> Login </h3>
<form action="login_action.php" method="POST">
<p>
<label>Email: </label><input type="username" name="Username" placeholder="Enter username" >
</p><p>
<label>Password: </label><input type="password" name="password" placeholder="Enter
password">
</p><p>
<input type="submit" value="Login">
</p>
</form>
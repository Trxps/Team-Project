<?php
session_start();
ob_start();

$host = "localhost";
$username = "root";
$password = "";
$dbname = "form_db";

$con = mysqli_connect($host, $username, $password, $dbname, 8096);

if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

    if (empty($username)) {
        $_SESSION['errors'] = array('User name is required');  
        header('Location: http://localhost/html6/welcome.php', true, 302);
        exit();
    } else if (empty($password)) {
        $_SESSION['errors'] = array('Password is required');
        header('Location: http://localhost/html6/welcome.php', true, 302);
        exit();
    } else {
        $query = "SELECT * FROM login_entries WHERE Username=? and Password=?";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['Username'] = $row['Username'];
            header('Location: http://localhost/html6/welcome.php', true, 302);
            exit();
        } else {
            $_SESSION['errors'] = array('Your username or password was incorrect');
            header('Location: http://localhost/html6/welcome.php', true, 302);
            exit();
        }
    }

mysqli_close($con);
ob_end_flush();
?>

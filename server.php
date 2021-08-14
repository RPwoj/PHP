<?php

$dbus = "root";
$pas = "";
$host ="localhost";
$nam = "usersdb";
$arr = [];
$conn = mysqli_connect($host, $dbus, $pas, $nam);


if(isset($_POST['send']))
{
    $username = $_POST['name'];
    $pass = $_POST['passw'];
    $sql = "SELECT * FROM users WHERE name = '$username'AND pass = '$pass'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    if ($user) 
    { // if user exists
        if ($user['name'] === $username and $user['pass'] === $pass) 
        {
            session_start();
            $_SESSION['user'] = $username;
    
            header ("Location: bubi.php");
        }
    }
    else
        {
            echo "błędny login lub hasło";
        }
    


}
?>
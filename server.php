<?php

$dbus = "root";
$pas = "";
$host ="localhost";
$nam = "usersdb";
$arr = [];
$conn = mysqli_connect($host, $dbus, $pas, $nam);


if(isset($_POST['name']))
{
    
    $username = $_POST['name'];
    
    
    
    
$sql = "SELECT * FROM users WHERE name = '$username'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
if ($user) { // if user exists
    if ($user['name'] === $username) 
    {
        session_start();
        $_SESSION['user'] = $username;
    
      header ("Location: bubi.php");
    }
}
else
{
    echo "ok";
}
    


}
?>
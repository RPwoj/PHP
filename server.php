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
if (isset($_POST['reg_but']))
{
    $newname = $_POST['reg_name'];
    $newpass = $_POST['reg_pass'];
    $sql_reg_check = "SELECT * FROM users WHERE name = '$newname'";
    $result_reg = mysqli_query($conn, $sql_reg_check);
    $isuser = mysqli_fetch_assoc($result_reg);

    if(!empty($_POST['reg_name']) and  !empty($_POST['reg_pass']))
    {
        if ($isuser)
        {
        if($isuser['name'] === $newname)
            {
                echo "Nick zajęty";
            }
          
        }
        else 
        {
            echo "nick wolny";
        }
    }
    else 
    {
        echo " należy wypełnić wszytskie pola";
    }

    
    
}



?>


<?php
session_start();
if(isset($_SESSION['user']))
{
    header('Location:bubi.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type= "text/css" href="main.css">
</head>
<body>

    <main>
        <?php
    include_once("server.php");
    ?>
    <div class="login">
        <form action="" method="post">
        <h3> ZALOGUJ SIĘ </h3>
        <input type="text" name="name" id="" placeholder="login"><br>
        <input type="password" name="passw" id="" placeholder ="hasło"><br>
        <button type="submit" name="send">zaloguj</button>
    </form>
</div>
<div class="signup">
    
    <form action="index.php" method="post">
<h3>ZAREJESTRUJ SIĘ</h3>
<input type="text" name="reg_name" id="" placeholder="podaj login"><br>
<input type="password" name="reg_pass" id="" placeholder="podaj hasło"><br>
<button type="submit" name="reg_but">Zarejestruj</button>


    </form>
    </div>
</main>
</body>
</html>
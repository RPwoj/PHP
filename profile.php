<?php
session_start();



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

<div class="content">
    <?php
include_once("header.php");
?>
    <main>

    <div class="cont">
        <div>
    <?php
    include_once("server.php");
    echo " witaj ";
        echo $_SESSION['user'];
        echo "<br>";
        echo '<br>'. '            <a href="logout.php"> wyloguj</a>';
    ?>
</div>
</div>
 
</main>
</div>
<script src="script.js"></script>
</body>
</html>
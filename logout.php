<?php
session_start();


session_destroy();

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
    echo "Wylogowano: ";
    echo $_SESSION['user'];
    echo '<br><a href="index.php"> powrot do stronu glownej </a>';
    ?>
</div>
</div>
 
</main>
</div>
<script src="script.js"></script>
</body>
</html>
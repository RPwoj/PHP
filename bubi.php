<?php
session_start();


echo " witaj ";
echo $_SESSION['user'];
echo '<br><a href="logout.php"> wyloguj</a>';
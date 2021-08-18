<?php
session_start();
include_once("header.php");

echo " witaj ";
echo $_SESSION['user'];
echo '<br><a href="logout.php"> wyloguj</a>';
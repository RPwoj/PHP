<?php
session_start();
include_once("header.php");
echo "Wylogowano: ";
echo $_SESSION['user'];
session_destroy();

echo '<a href="index.php"> powrot do stronu glownej </a>';
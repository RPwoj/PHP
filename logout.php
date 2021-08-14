<?php
session_start();
echo "Wylogowano: ";
echo $_SESSION['user'];
session_destroy();

echo '<a href="index.php"> powrot do stronu glownej </a>';
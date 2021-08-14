<?php
session_start();
echo $_SESSION['user'];
echo "witaj";

echo '<a href="logout.php"> wyloguj</a>';
<?php
session_start();

if (isset($_SESSION['username'])) {
    echo "Welcome, " . htmlspecialchars($_SESSION['username']) . "!";
    echo "<br><a href='logout.php'>Logout</a>";
    echo "<br><a href='preferences.php'>choose language</a>";
} else {
    header("Location: login.php");
    exit();
}
?>


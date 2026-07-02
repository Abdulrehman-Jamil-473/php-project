<!DOCTYPE html>
<html>
<head>
    <title>My PHP Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Welcome to My PHP Website</h1>

    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<div class="container">

<h2>Home Page</h2>

<?php
echo "<p>Hello! This website is built using PHP.</p>";

date_default_timezone_set("Asia/Karachi");
echo "<h3>Today's Date:</h3>";
echo date("d-m-Y");
?>

</div>

<footer>
    Copyright © 2026
</footer>

</body>
</html>
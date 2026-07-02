<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>

<h1>Contact Us</h1>

<nav>
<a href="index.php">Home</a>
<a href="about.php">About</a>
<a href="contact.php">Contact</a>
</nav>

</header>

<div class="container">

<form method="POST">

<label>Name</label>

<input type="text" name="name">

<label>Email</label>

<input type="email" name="email">

<label>Message</label>

<textarea name="message"></textarea>

<br><br>

<input type="submit" value="Send">

</form>

<?php

if(isset($_POST['name'])){

$name=$_POST['name'];

echo "<h3>Thanks $name! We received your message.</h3>";

}

?>

</div>

<footer>
Copyright © 2026
</footer>

</body>
</html>
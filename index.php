<?php
session_start();

echo"<!DOCTYPE html>

<html lang='en'>

<head>

<link rel='stylesheet' href='styles.css'>
<title> Watkin's ToDo List website</title>

</head>

<body>

<div id='container'>

<div id='title'>

<h3 id='banner'>Watkin's ToDo List</h3>

</div>

<div id='navbar'>

<ul id='menu'>

<a href='index.php'><li> Home </li></a>"

if (empty($_SESSION["ssnlogin"])) {
    echo "<a href='login.php'><li> Login </li></a> 
          <a href='register.php'><li> Register </li></a>";
}

elseif ($_SESSION["ssnlogin"]) {
    echo "<a href='profile.php' <li> Profile </li></a>
        <a href='list.php'><li> Lists </li></a>
        <a href='logout.php'<li> Logout </li></a>";
}

echo "</ul>

</div>

<div id='content'>

<p>Welcome to the Watkin's ToDo list website. Here you can sign up to create and manage all of your to do lists in one easy place</p>

<p>You will need to register first to be able to make use of the system, but after that its all free to use.</p>

</div>

</div>

</body>

</html>";

?>
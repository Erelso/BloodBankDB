<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
       echo 'Please Login to view this page';
	header('Location: index.html');
	exit;
}
?>





<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/css-db.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800|Zilla+Slab:400,700&display=swap" rel="stylesheet"> </head>

<body>
   
   

    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="welcome.php">Blood Bank Manager </a></h1> </div>
            <div id="menu">
                <ul>
                    <li><a href="manage.php">Manage</a></li>
                    <li class="active"><a href="register.php">Register</a></li>
                    <li><a href="donate.php">Donate</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="page-wrapper">
        <div id="page" class="container">
            <div id="content">
                <header>Register New Donor</header>
                <div id="two-column">
                    <form action="insert.php" method="POST">
                        <input name="name" type="text" class="feedback-input" placeholder="Name" />
                        <input name="age" type="text" class="feedback-input" placeholder="Age" />
                        <input name="sex" type="text" class="feedback-input" placeholder="Sex" />
                        <input name="phone" type="text" class="feedback-input" placeholder="Phone" />
                        <input name="address" type="text" class="feedback-input" placeholder="Address" />
                        <input name="email" type="text" class="feedback-input" placeholder="Email" />
                        <input type="submit" value="SUBMIT" /> 
                        </form>
                </div>
            </div>
        </div>
    </div>
    <div id="copyright" class="container">
        <p>Database Design and Implementation - Oakland University 2020</p>
        <p>A Project by Erich Elshoff and Jacob Stade</p>
    </div>
</body>

</html>
<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Blood Bank</title>
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
                    <li><a href="register.php">Register</a></li>
                    <li><a href="donate.php">Donate</a></li>

                </ul>
            </div>
        </div>
    </div>
    <div id="page-wrapper">
        <div id="page" class="container">
            <div id="content">
                <header><?php echo 'Welcome ' . $_SESSION['name'] . '!'; ?></header>
                <div id="two-column"> </div>
                    
            </div>
        </div>
    </div>
    <div id="copyright" class="container">
        <p>Database Design and Implementation - Oakland University 2020</p>
        <p>A Project by Erich Elshoff and Jacob Stade</p>
    </div>
</body>

</html>
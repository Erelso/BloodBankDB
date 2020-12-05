<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if ( !isset( $_SESSION['loggedin'] ) ) {
    header( 'Location: index.html' );
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
                    <h1><a href = "welcome.php">Blood Bank Manager </a></h1> </div>
                <div id="menu">
                    <ul>
                        <li class="active"><a href="manage.php">Manage</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="donate.php">Donate</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="page-wrapper">
            <div id="page" class="container">
                <div id="content">
                    <header>Manage Donor Table</header>
                    <div class=donortable>
                    
                                <?php
                        


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mydb";
                        
                        
// Create connection
$conn = new mysqli ( $host, $dbusername, $dbpassword, $dbname );
if ( mysqli_connect_error() ) {
    die( 'Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error() );
} else {
    $sql = "SELECT `DONOR_ID`, `DONOR_NAME`, `DONOR_AGE`, `DONOR_SEX`, `DONOR_PHONE`, `DONOR_ADDRESS`, `DONOR_EMAIL` FROM `donor`";
}

$result = $conn->query($sql );

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th><th>AGE</th><th>SEX</th><th>PHONE</th><th>ADDRESS</th><th>EMAIL</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row["DONOR_ID"]."</td>";
    echo "<td>".$row["DONOR_NAME"]."</td>";
    echo "<td>".$row["DONOR_AGE"]."</td>";
    echo "<td>".$row["DONOR_SEX"]."</td>";
    echo "<td>".$row["DONOR_PHONE"]."</td>";
    echo "<td>".$row["DONOR_ADDRESS"]."</td>";
    echo "<td>".$row["DONOR_EMAIL"]."</td>";
    echo "<td style='float: right;'><a href='edit.php?id=".$row['DONOR_ID']."'>Edit</a></td>";
    echo "<td style='float: right;'><a href='delete.php?id=".$row['DONOR_ID']."'>Delete</a></td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();

?>
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
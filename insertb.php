<?php
$donorid = filter_input( INPUT_POST, 'donorid' );
$type = filter_input( INPUT_POST, 'type' );
$quantity = filter_input( INPUT_POST, 'quantity' );
$bankid = filter_input( INPUT_POST, 'bankid' );


if ( !empty( $donorid ) ) {
    if ( !empty( $type ) ) {
        if ( !empty( $quantity) ) {
    if ( !empty( $bankid ) ) {


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
            $sql = "INSERT INTO blood (`DONOR_ID`, `BLOOD_TYPE`, `BLOODquantity`, `BANK_ID`, `ORDER_ID`)
            VALUES ('$donorid', '$type', '$quantity', '$bankid', '1')";
            
            if ( $conn->query( $sql ) ) {
                echo "New record is inserted sucessfully";
            } else {
                echo "Error: ". $sql ."". $conn->error;
            }
            $conn->close();
        }
   
} else {
    echo "Bank ID should not be empty";
    die();
}
} else {
    echo "Blood Quantity should not be empty";
    die();
}
} else {
    echo "Blood Type should not be empty";
    die();
}
    } else {
    echo "Donor ID should not be empty";
    die();
}


?>



<html>
    <head>
        <title>Index</title>
    <link rel="stylesheet" type="text/css" href="css/css-db.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800|Zilla+Slab:400,700&display=swap" rel="stylesheet"> 

    </head>
    
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
                <header></header>
                <div id="two-column">
                
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
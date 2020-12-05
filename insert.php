<?php
$name = filter_input( INPUT_POST, 'name' );
$age = filter_input( INPUT_POST, 'age' );
$sex = filter_input( INPUT_POST, 'sex' );
$phone = filter_input( INPUT_POST, 'phone' );
$address = filter_input( INPUT_POST, 'address' );
$email = filter_input( INPUT_POST, 'email' );

if ( !empty( $name ) ) {
    if ( !empty( $age ) ) {
        if ( !empty( $sex ) ) {
    if ( !empty( $phone ) ) {
        if ( !empty( $address ) ) {
    if ( !empty( $email) ) {

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
            $sql = "INSERT INTO donor (`DONOR_NAME`, `DONOR_AGE`, `DONOR_SEX`, `DONOR_PHONE`, `DONOR_ADDRESS`, `DONOR_EMAIL`, `EMPLOYEE_ID`)
            VALUES ('$name', '$age', '$sex', '$phone', '$address', '$email', '1')";
            
            if ( $conn->query( $sql ) ) {
                echo "New record is inserted sucessfully";
            } else {
                echo "Error: ". $sql ."". $conn->error;
            }
            $conn->close();
        }
    } else {
        echo "Email should not be empty";
        die();
    }
} else {
    echo "Address should not be empty";
    die();
}
} else {
    echo "Phone should not be empty";
    die();
}
} else {
    echo "Sex should not be empty";
    die();
}
} else {
    echo "Age should not be empty";
    die();
}
    } else {
    echo "Name should not be empty";
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
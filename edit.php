<?php



$id = $_GET['id'];

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mydb";
                        
                        
// Create connection
$conn = new mysqli ( $host, $dbusername, $dbpassword, $dbname );
if ( mysqli_connect_error() ) {
    die( 'Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error() );
}

$id=$_REQUEST['id'];
$sql = "SELECT * from DONOR where DONOR_ID='$id'"; 

$result = $conn->query($sql);

if ($result->num_rows > 0){

$row = $result->fetch_assoc();

$name = $row["DONOR_NAME"];
$age = $row["DONOR_AGE"];
$sex = $row["DONOR_SEX"];
$phone = $row["DONOR_PHONE"];
$address = $row["DONOR_ADDRESS"];
$email = $row["DONOR_EMAIL"];
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
                <header>Edit Record</header>
                

               
               
                <div id="two-column">
                   
                   <?php 
    
 
                echo    "<form action='update.php' method='POST'>
                       <input type='hidden' name='id' value='$id'>
                        <input name='name' type='text' class='feedback-input' placeholder='Name' value='$name' />
                        <input name='age' type='text' class='feedback-input' placeholder='Age' value='$age'/>
                        <input name='sex' type='text' class='feedback-input' placeholder='Sex' value='$sex'/>
                        <input name='phone' type='text' class='feedback-input' placeholder='Phone'  value='$phone'/>
                        <input name='address' type='text' class='feedback-input' placeholder='Address'  value='$address'/>
                        <input name='email' type='text' class='feedback-input' placeholder='Email'  value='$email'/>
                        <input type='submit' value='SUBMIT' /> 
                        </form>";
        
        } else {
	echo "Not Found";
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
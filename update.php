<?php

$id = $_POST["id"];
$name = $_POST["name"];
$age = $_POST["age"];
$sex = $_POST["sex"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$email = $_POST["email"];


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mydb";
                        


$conn = new mysqli ( $host, $dbusername, $dbpassword, $dbname );
if ( mysqli_connect_error() ) {
    die( 'Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error() );
}

$sql = "update DONOR set DONOR_NAME='$name', DONOR_AGE='$age', DONOR_SEX='$sex', DONOR_PHONE='$phone', DONOR_ADDRESS='$address', DONOR_EMAIL='$email' where DONOR_ID='$id'";

if ($conn->query($sql) === TRUE) {
echo "Records updated: ".$id."-".$name."-".$age."-".$sex;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

header('Location: manage.php');

$conn->close();

?>
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
// sql to delete a record
$sql = "DELETE FROM DONOR WHERE DONOR_ID = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: manage.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wetu";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO admin(item, picture, price,Amount,branch)
        VALUES ('".$_POST["item"]."','".$_POST["pic"]."','".$_POST["price"]."','".$_POST["amount"]."','".$_POST["branch"]."')";

if (mysqli_query($conn, $sql)) {
    echo "connection successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?><br><br>

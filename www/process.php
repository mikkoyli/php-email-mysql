<?php

// Require mysql config
require("dbconfig.php");

$conn = new mysqli($server, $db_user, $db_pwd, $database);


// Die in case connection fails
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// This is for security (escape variables)
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);

// Validate email address
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email is not a valid email address");
  } else {

$sql = "INSERT INTO emails (email) VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you! New email ".$email. " was added to database.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

$conn->close();
?>
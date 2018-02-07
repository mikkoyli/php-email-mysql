<?php

// Require mysql config
require("dbconfig.php");

$conn = new mysqli($server, $db_user, $db_pwd, $database);


// Die in case connection fails
if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
    die("Connection failed.");
}

// This is for security (escape variables)
$email = mysqli_real_escape_string($conn, $_POST['email']);
//prevent xss
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

// Validate email address
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Not a valid email address!");
} else {
    
    $sql = "INSERT INTO emails (email) VALUES ('$email')";

    $stmt = $conn->prepare('INSERT INTO emails (email) VALUES (?)');
    $stmt->bind_param('s', $email); // 's' specifies the variable type => 'string'

    if ($stmt->execute() == true) {
        echo "Thank you! New email " . $email . " was added to database.";
    }
    else {
        echo "Error adding email to database.";
    }
    
}

$conn->close();
?>
<?php
session_start();
include "db.php";

if (!isset($_SESSION['loggedin'])) {
    header("location: login1.php");
}

$doc2 = $_POST['doc2'];
$num2 = $_POST['num2'];
$did = $_POST['did'];

// Sanitize user input to prevent SQL injection
$doc2 = mysqli_real_escape_string($conn, $doc2);
$num2 = mysqli_real_escape_string($conn, $num2);

// Construct the SQL UPDATE query
$sql = "UPDATE data_master SET document = '$doc2', number = '$num2' WHERE did = $did";

// Execute the query
if ($conn->query($sql) === TRUE) {
    // Redirect back to the main page or display a success message
    header("Location: list1.php");
} else {
    echo "Error updating document: " . $conn->error;
}

mysqli_close($conn);
?>

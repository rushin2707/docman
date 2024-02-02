<?php

    session_start();
    include "db.php";

    $did = isset($_GET['id']) ? $_GET['id'] : null;
    echo "ID from URL: " . $did;

    // $sql1 = "DELETE FROM data_master WHERE did='$did'"

    $sql = "DELETE FROM data_master WHERE did = $did";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Redirect back to the main page or display a success message
        header("Location: list1.php");
    } else {
        echo "Error updating document: " . $conn->error;
    }

    mysqli_close($conn);

?>
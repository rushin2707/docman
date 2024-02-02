<?php

    session_start();
    include "db.php";

    $doc2 = $_POST['doc2'];
    $num2 = $_POST['num2'];

    // echo $doc2;
    // echo $num2;

    $stmt = $conn->prepare("Insert into data_master(uid, document, number) values(?, ?, ?)");
    $stmt->bind_param("iss", $_SESSION['uid'], $doc2, $num2);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    header("Location: list1.php");
?>
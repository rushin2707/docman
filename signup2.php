<?php

    include "db.php";

    $uname = $_POST['uname'];
    $uemail = $_POST['uemail'];
    $upassword = $_POST['upassword'];

    // echo $uname ."<br";
    // echo $uemail ."<br";
    // echo $upassword ."<br";

    if($uname == "" || $uemail == "" || $upassword == ""){
        echo "<script>alert('Please do not leave any field empty.');</script>";
        echo "<script>window.location.href = 'signup1.php';</script>";
    }

    $stmt = $conn->prepare("Insert into user_master(uname, uemail, upassword) value(?, ?, ?)");
    $stmt->bind_param("sss", $uname, $uemail, $upassword);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    echo "<script>alert('Your account has been created successfully. Please use these credentials to sign in.');</script>";
    echo "<script>window.location.href = 'landing.php';</script>";

?>
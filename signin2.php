<?php

    session_start();

    include "db.php";

    $uname1 = $_POST['uname1'];
    $upassword1 = $_POST['upassword1'];

    // echo $uname1 ."<br>";
    // echo $upassword1."<br>";

    if($uname1 == "" || $upassword1 == ""){
        echo "<script>alert('Please do not leave any field empty.');</script>";
        echo "<script>window.location.href = 'signin1.php';</script>";
    }

    $sql1 = "SELECT * FROM user_master WHERE uname='$uname1'";
    $result1 = $conn->query($sql1);

    if($result1->num_rows > 0){

        while($row = $result1->fetch_assoc()){

            $pass = $row['upassword'];

            if($pass == $upassword1){

                $_SESSION['uname1'] = $uname1;
                $_SESSION['upassword1'] = $upassword1;
                $_SESSION['uemail'] = $row['uemail'];
                $_SESSION['uid'] = $row['uid'];
                $_SESSION['loggedin'] = true;

                header("Location: home.php");
            }

            else{
                echo "<script>alert('Incorrect Password!!');</script>";
                echo "<script>window.location.href = 'signin1.php';</script>";
            }

        }

    }
    
    else{
        echo "<script>alert('This account does not exist!!');</script>";
        echo "<script>window.location.href = 'signin1.php';</script>";
    }

?>
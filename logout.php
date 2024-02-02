<?php

    session_start();

    unset($_SESSION['uname1']);
    unset($_SESSION['upassword1']);
    unset($_SESSION['uemail']);
    unset($_SESSION['uid']);
    unset($_SESSION['loggedin']);

    header("location: landing.php");

?>
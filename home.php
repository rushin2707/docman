<?php

    session_start();
    include "db.php";

    if(!isset($_SESSION['loggedin'])){
        header("location:landing.php");
      }


?>

<html>

    <head>
        <title>Homepage</title>
        <link rel="stylesheet" type="text/css" href="home.css">

    </head>

    <body>

        <h1>The Document Lister</h1>
        <h3>Your very own storage</h3><hr><br>

        <h2>Welcome, <?php echo $_SESSION['uname1'] ?></h2>

        <a href="list1.php"> Go to the list </a><br>

        <a href="logout.php"> Logout </a>

    </body>

</html>
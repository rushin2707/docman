<?php

    session_start();
    include "db.php";

?>

<html>

    <head>
        <title>Add a new Document</title>
        <link rel="stylesheet" type="text/css" href="add1.css">

    </head>

    <body>

        <form action="add2.php" method="POST">

            <label>Enter Document Name: </label>
            <input type="text" name="doc2"><br><br>

            <label>Enter Document Number: </label>
            <input type="text" name="num2"><br><br>

            <button type="submit"> Add Document </button>

        </form>

    </body>

</html>
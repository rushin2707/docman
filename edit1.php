<?php

    session_start();
    include "db.php";

    $did = isset($_GET['id']) ? $_GET['id'] : null;
    // echo "ID from URL: " . $id;

?>

<html> 

    <head>
        <title>Edit a Document</title>
        <link rel="stylesheet" type="text/css" href="edit1.css">
    </head>

    <body>

        <form action="edit2.php" method="POST">

            <label>Enter new Document Name: </label>
            <input type="text" name="doc2"><br><br>

            <label>Enter new Document Number: </label>
            <input type="text" name="num2"><br><br>

            <input type="hidden" name="did" value="<?php echo $did; ?>">

            <button type="submit"> Edit Document </button>

        </form>

    </body>

</html>
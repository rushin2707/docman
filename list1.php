<?php
session_start();
?>

<html>
    <head>
        <title>List of documents</title>
        <link rel="stylesheet" type="text/css" href="list1.css">
    </head>

    <h1>This is the list of your documents along with their numbers.</h1>
    <h3>You can manipulate this data as per your convenience.</h3><br>

    <a href="add1.php">Add a new document</a>

    <table>
        <thead>
            <tr>
                <th>Document Name, </th>
                <th>Document Number</th>
            </tr>
        </thead><br>

        <?php
        include "db.php";

        $sql1 = "SELECT * FROM data_master WHERE uid='" . $_SESSION['uid'] . "'";
        $result1 = $conn->query($sql1);

        while ($row = mysqli_fetch_assoc($result1)){
            echo '<tr>';
            echo '<td>'.$row['document'].' </td>';
            echo '<td>'.$row['number'].' </td>';
            echo '<td>';
            echo '<a href="edit1.php?id='.$row['did'].'">Edit </a> ';
            echo '<a href="delete.php?id='.$row['did'].'">Delete</a> ';
            echo '</td>';
            echo '</tr>' ."<br>";
        }

        mysqli_close($conn);

        ?>

        <br><br>
        
    </table>
    <a href="home.php"> Go back to the home page -> </a>
</html>

<?php

require_once '../connection/connection.php';

if (isset($_POST['submit'])) {
    // set parameters and execute
    $title = $_POST['title'];
    $bigtitle = $_POST['bigtitle'];
    $description = $_POST['description'];
    $keyword = $_POST['keyword'];

    if ($cnn->connect_error) {
        die("Connection failed: " . $cnn->connect_error);
    }

    $sql = "UPDATE aboutus SET title=" . "'" . $title . "', " . "bigtitle" . "'" . $bigtitle .  "', " . "description=" . "'" . $description . "', " . "keyword=" . "'" . $keyword . "'" . " WHERE id=1";
    //echo $sql;
    if ($cnn->query($sql) === TRUE) {
        header("Location:../about.php?update=successful");
        //echo "Record updated successfully";
    } else {
        header("Location:../about.php?update=not-successful");
        echo "Error updating record: " . $cnn->error;
    }

    $cnn->close();
}

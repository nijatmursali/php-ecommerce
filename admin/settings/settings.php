<?php

require_once '../connection/connection.php';

if (isset($_POST['submit'])) {
    // set parameters and execute
    $title = $_POST['title'];
    $description = $_POST['description'];
    $keyword = $_POST['keyword'];

    if ($cnn->connect_error) {
        die("Connection failed: " . $cnn->connect_error);
    }

    $sql = "UPDATE settings SET title=" . "'" . $title . "'" . " WHERE id=1";
    //echo $sql;
    if ($cnn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $cnn->error;
    }

    $cnn->close();
}

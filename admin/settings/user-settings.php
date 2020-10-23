<?php

require_once '../connection/connection.php';

if (isset($_POST['submit'])) {
    // set parameters and execute
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    if ($cnn->connect_error) {
        die("Connection failed: " . $cnn->connect_error);
    }

    $sql = "UPDATE settings SET username=" . "'" . $username . "', " . "password=" . "'" . $password . "', " . "phone=" . "'"  . $phone . "', " . "email=" . "'" . $email . "'" . " WHERE id=1";
    //echo $sql;
    if ($cnn->query($sql) === TRUE) {
        header("Location:../user-settings.php?update=successful");
        //echo "Record updated successfully";
    } else {
        header("Location:../user-settings.php?update=not-successful");
        echo "Error updating record: " . $cnn->error;
    }

    $cnn->close();
}

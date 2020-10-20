<?php

require_once '../connection/connection.php';

if (isset($_POST['submit'])) {
    $submit = $cnn->prepare("UPDATE settings SET
    
    title=:title,
    description=:description,
    keyword=:keyword
    
    WHERE id=1
    
    ");

    //echo $submit;

    $update = $submit->execute(array(
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'keyword' => $_POST['keyword']
    ));

    // if ($update) {
    //     echo "Successfully edited!";
    // } else {
    //     echo "Cannot edit!";
    // }
}

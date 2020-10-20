<?php


try {
    $cnn = mysqli_connect('localhost', 'root', '', 'e-commerce');
} catch (\Throwable $e) {
    echo $e->getMessage();
}

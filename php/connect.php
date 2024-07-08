<?php
    $connect = mysqli_connect('localhost', 'root', '', 'vr_club');

    if (!$connect) {
        die('Error connect to DataBase');
    }

?>
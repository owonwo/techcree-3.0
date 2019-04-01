<?php

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'chat';

    $chat_conn = mysqli_connect($host, $username, $password, $db_name);

    if ($conn) {
        echo 'Connection successful';
    } else {
        echo mysqli_error($conn);
    }
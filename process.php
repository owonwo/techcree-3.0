<?php
    session_start();

    @include('inc/connection.php');
    @include('inc/functions.php');

    die();
    
    //retrieve username and password from $_POST array;
    $username = $_POST['username'];
    $password = $_POST['password']; 

    $usernames = [
        'James', 'Kali', 'Magnus', 'Rico',
        'Stephen', 'Stefan', 'Chioma', 'Shammah',
    ];
    $passwords = [
        'Tomy', 'asder', 'abe', 'Tree', 'Stone', 'Blood',
        'assurance', 'ka',
    ];


    foreach($usernames as $index => $user)  {
        $user_password = $passwords[$index];

        //validate the email and password
        if ($username === $user) {
            if ($password === $user_password) {
                store_user_info($username);
                header('Location: dashboard.php');
            } else {
                header('Location: index.php?auth=invalid');
            }

            exit();
        }
    }

    header('Location: index.php?auth=no-account')
?>
<?php

function store_user_info($username) {
    $_SESSION['username'] = $username;
}

function remove_user_info() {
    unset($_SESSION['username']);
}


function isLoggedIn() {
    return isset($_SESSION['username']);
}

function validateUser() {
    if ( !isLoggedIn() ) {
        header('Location: index.php');
    }
}
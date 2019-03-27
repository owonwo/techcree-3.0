<?php
    session_start();
    @include('inc/functions.php');


    remove_user_info();
    header('Location: index.php');
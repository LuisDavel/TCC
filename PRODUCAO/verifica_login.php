<?php
    session_start();
    if(!$_SESSION['id']){
        header('Location: views/login.php');
    exit();
}
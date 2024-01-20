<?php

if(isset($POST['submit'])){

    $Email = $_POST['uname'];
    $Password = $_POST['Password'];

    require_once 'conn.inc.php';
    require_once 'functions.inc.php';

    if(emptyLoginInputs( $Email, $Password) !== false){
        header("location: login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $Email, $Password);

} else{
    header("location: login.php");
    exit();
}
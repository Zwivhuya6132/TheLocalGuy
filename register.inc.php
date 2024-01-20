<?php

if(isset($_POST['submit'])){

    $Fname = $_POST['fname'];
    $Lname = $_POST['lname'];
    $Dbirth = $_POST['date'];
    $Gender = $_POST['gender'];
    $Address = $_POST['address'];
    $Phone = $_POST['phone'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $Cpassword = $_POST['cpassword'];
    

    require_once 'conn.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputs($Fname, $Lname, $Dbirth, $Gender, $Address, $Phone, $Email, $Password, $Cpassword) !== false){
        header("location: registration.php?error=emptyinput");
        exit();
    }
    
    if(invalidFname($Fname) !== false){
        header("location: registration.php?error=invalidfname");
        exit();
    }

    if(invalidLname($Lname) !== false){
        header("location: registration.php?error=invalidlname");
        exit();
    }

    if(invalidPhone($Phone) !== false){
        header("location: registration.php?error=invalidphone");
        exit();
    }

    if(invalidEmail($Email) !== false){
        header("location: registration.php?error=invalidemail");
        exit();
    }

    if(passworddMatch($Password, $Cpassword) !== false){
        header("location: registration.php?error=passdontmatch");
        exit();
    }

    if(userExist($conn, $Email) !== false){
        header("location: registration.php?error=alreadyExist");
        exit();
    }

    createUser($conn, $Fname, $Lname, $Dbirth, $Gender, $Address, $Phone, $Email, $Password);

}else{
    header("location: registration.php");

}
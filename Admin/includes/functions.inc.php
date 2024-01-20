<?php

function emptyInputs($Fname, $Lname, $Dbirth, $Gender, $Address, $Phone, $Email, $Password, $Cpassword) {
    $result = "";

    if(empty($Fname) || empty($Lname) || empty($Dbirth) || empty($Gender) || empty($Address) ||
     empty($Phone) || empty($Password) || empty($Cpassword)){

        $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function invalidFname($Fname){
    $result = "";

    if(!preg_match("/^[a-zA-z]*$/",$Fname)){
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function invalidLname($Lname){
    $result = "";

    if(!preg_match("/^[a-zA-z]*$/",$Lname)){
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function invalidPhone($Phone){
    $result = "";

    if(!preg_match("/^[0-9]*$/",$Phone)){
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function invalidEmail($Email){
    $result = "";

    if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function passworddMatch($Password, $Cpassword){
    $result = "";

    if($Password !== $Cpassword){
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function userExist($conn, $Email){
    $sql = "SELECT * FROM regform WHERE Email =?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: registration.php?eror=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $Email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result =false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser ( $conn, $Fname, $Lname, $Dbirth, $Gender, $Address, $Phone, $Email, $Password){
    $sql = "INSERT INTO regform  (Fname, Lname, Dbirth, Gender, Address, Contact, Email, Password) VALUES (?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: registration.php?eror=stmtfailed");
        exit();
    }

    $PassHashed = password_hash($Password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssssssss", $Fname, $Lname, $Dbirth, $Gender, $Address, $Phone, $Email, $PassHashed);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    header("location: ../add user.php");
    exit();
}

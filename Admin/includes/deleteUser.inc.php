<?php

include_once 'conn.inc.php';

if(isset($_POST['delete'])){

    $user_id = $_POST['delete'];

    $query = "DELETE FROM `regform` WHERE id= '$user_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        header("location: ../manage user.php");
 
    }
}
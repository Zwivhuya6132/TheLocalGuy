<?php

include_once 'conn.inc.php';

if(isset($_POST['add_prod'])){

    $Pname = $_POST['pname'];
    $Bname = $_POST['bname'];
    $Pprice = $_POST['pprice'];
    $Pimg = $_FILES['pimg'] ?? null;
    $Pcat = $_POST['pcat'];
    $Descr = $_POST['descr'];

    // echo '<small>';
    // echo   var_dump($Descr);
    // echo '</small>';
    // exit();

    function addImage($Pimg){

        $imagePath = "";

        if($Pimg && $Pimg['tmp_name']){
            $imagePath = 'images/'.$Pimg['name'];
            mkdir(dirname($imagePath));
            move_uploaded_file($Pimg["tmp_name"], $imagePath);
        }

        return $imagePath;
    }


    function addProduct ( $conn, $Pname, $Bname, $Pprice, $imagePath, $Pcat, $Descr){
        $sql = "INSERT INTO product_table  (product_name, brand_name, product_price, product_img, category, product_desc) VALUES (?,?,?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);
    
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: registration.php?eror=stmtfailed");
            exit();
        }
    
        mysqli_stmt_bind_param($stmt, "ssssss", $Pname, $Bname, $Pprice, $imagePath, $Pcat, $Descr);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        
        header("location: ../add product.php");
        exit();
    }

    addProduct($conn, $Pname, $Bname, $Pprice, addImage($Pimg), $Pcat, $Descr);


}
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="../css/all.css">
        <title>TheJustifiedCrew</title>
        <?php
            // include_once '../styles.php';
            include_once 'styles.php';
        ?>
    </head>

    <body>
      
        <header class="header">
            <!-- Logo container/Left Section -->
            <div class="logo-container">
                <img class="logo" src="../images/The-happy-store.jpg" alt="logo">
                <h1 class="name">The Justified Crew</h1>
            </div>

            <!-- Search-bar container/Middle section -->
            <form method="POST" action="" enctype="multipart/form-data" class="searchbar-container">
                <input class="search-bar" type="text" name="search" placeholder="Search Product or Brands">

                <small class="search"> <!--Parent container for the search Icon-->
                    <!-- creating a search Icon using fontawesome -->
                    <i class="fa-solid fa-magnifying-glass search-icon"></i>
                </small>

            </form>


            <div class="menu-section">

                <span class="menu-button open-menu">
                    <i class="fa-solid fa-bars"></i>
                </span>

                <!-- My Account -->
                <span class="my-account open-btn" id="open-Btn"> <!--Parent container for the "My Account button"-->
                    <!-- creating a profile Icon using fontawesome -->
                    <i class="fa-solid fa-user account" ></i>
                    <p class="account-name">
                        <?php
                            if(isset($_SESSION["id"])){

                                echo'<p>'.$_SESSION["Fname"].'</p>';
                            }else{
                                echo '<p>My Account</p>';
                            }
                        ?>
                    </p>
                    <!-- creating a drop-down Icon using fontawesome -->
                    <i class="fa-solid fa-caret-down down"></i>
                </span>

                <!-- Dropdown Content -->
                <div class="offcanvas-account" id="offcanvasMenu">

                    <a class="close-btn" href="#">
                        <i class="fa-solid fa-xmark"></i>
                    </a>

                    <?php
                            if(isset($_SESSION["id"])){

                                echo'<div class="welcome">
                                <h2>My Account</h2>
                                <p>Welcome ' .$_SESSION["Fname"].' '.$_SESSION["Lname"]. '</p>
                                </div> 
                                <ul class="account-nav">

                                <a href="">
                                    <li><i class="fa-solid fa-user"></i> My Account</li>
                                </a>

                                <a href="">
                                    <li><i class="fa-solid fa-table-list"></i> My Orders</li>
                                </a>

                                <a href="">
                                    <li><i class="fa-solid fa-heart"></i> My Wish List</li>
                                </a>
                                
                                <hr>

                                <a href="">
                                    <li><i class="fa-solid fa-address-card"></i> Address Book</li>
                                </a>

                                <a href="">
                                    <li><i class="fa-solid fa-circle-info"></i> Account Information</li>
                                </a>

                                <a href="">
                                    <li><i class="fa-solid fa-gift"></i> Gift Card</li>
                                </a>

                                </ul>

                                <a href="includes/logout.inc.php" class="sign-up ">
                                    <input type="button" name="logout" value="Sign In" class="sign-in log-out">
                                </a>
                                ';

                            }else{
                                echo '<div class="welcome">
                                <h2>My Account</h2>
                                <p>Welcome to The Justified Crew</p>
                                </div>
            
                                <div class="have">
                                    <h4>I have an account</h4>
                                    <p>Fill in your username and password to access your account.</p>
                                </div>
            
                                <a href="login.php" class="sign-up">
                                    <input type="button" value="Sign In" class="sign-in">
                                </a>
            
                                <div class="sec-divider"></div>
            
                                <div class="have">
                                    <h4>I am a new customer</h4>
                                    <p>By creating an account with our store, you will be able to:</p>
                                    <ul>
                                        <li>Move through the checkout process faster!</li>
                                        <li>Store multiple delivery addresses.</li>
                                        <li>View and track your orders.</li>
                                    </ul>
                                </div>
            
                                <a href="registration.php" class="reg">
                                    <input type="button" value="Create an account" class="register">
                                </a>';
                            }
                    ?>
                </div>

        </header> 

        <nav class="side-nav">
            <ul class="side-list">
                
                <li class="side-list-cont ">
                    <a class="<?php if($page == 'home'){echo 'active';}?>" href="index.php" >
                        <i class="fa-solid fa-gauge-high ss"></i> DASHBOARD <small id="scam">www</small> 
                    </a>
                </li>
                
                <li class="side-list-cont">
                    <a href="add user.php" class="<?php if($page == 'add user'){echo 'active';}?>">
                        <i class="fa-solid fa-user-plus ss"></i> ADD USER <small id="scam">wwww</small> 
                    </a>
                </li>

                <li class="side-list-cont">
                    <a href="products list.php" class="<?php if($page == 'product list'){echo 'active';}?>">
                        <i class="fa-solid fa-list ss"></i> PRODUCTS LIST <small id="scam">w</small> 
                    </a>
                </li>

                <li class="side-list-cont">
                    <a href="orders.php" class="<?php if($page == 'orders'){echo 'active';}?>">
                        <i class="fa-solid fa-receipt ss"></i> ORDERS <small id="scam">wwwwww</small> 
                    </a>
                </li>

                <li class="side-list-cont">
                    <a href="add product.php" class="<?php if($page == 'add product'){echo 'active';}?>">
                        <i class="fa-solid fa-plus ss"></i>ADD PRODUCT <small id="scam">ww</small> 
                    </a>
                </li>

                <li class="side-list-cont">
                    <a href="manage user.php" class="<?php if($page == 'manage user'){echo 'active';}?>">
                        <i class="fa-solid fa-pen-to-square ss"></i> MANAGE USER <small id="scam">w</small> 
                    </a>
                </li>

                <li class="side-list-cont">
                    <a href="../includes/logout.inc.php" class="<?php if($page == 'log out'){echo 'active';}?>">
                        <i class="fa-solid fa-right-from-bracket ss"></i> LOG OUT <small id="scam">wwwww</small>
                    </a>
                </li>
            </ul>
        </nav>


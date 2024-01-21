<header class="header">
            <!-- Logo container/Left Section -->
            <div class="logo-container">
                <img class="logo" src="images/The-happy-store.jpg" alt="logo">
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


                <!-- Whishlist -->
                <span class="whish">
                    <div class="whish-list"> <!--Parent container for the heart Icon-->
                        <!-- creating a heart Icon using fontawesome -->
                        <i class="fa-regular fa-heart whish-heart"></i>
        
                    </div>
                    <p class="whishlist">Wishlist</p>
                </span>

                <!-- My Account -->
                <span class="my-account open-btn" id="open-Btn"> <!--Parent container for the "My Account button"-->
                    <!-- creating a profile Icon using fontawesome -->
                    <i class="fa-solid fa-user account" ></i>
                    <p class="account-name">
                        <?php
                            if(isset($_SESSION["id"])){

                                echo'<p>'.$_SESSION["Fname"][0].' '. $_SESSION["Lname"].'</p>';
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

                                <a href="my_account.php">
                                    <li><i class="fa-solid fa-user"></i> My Account</li>
                                </a>

                                <a href="my_orders.php">
                                    <li><i class="fa-solid fa-table-list"></i> My Orders</li>
                                </a>

                                <a href="my_wishlist.php">
                                    <li><i class="fa-solid fa-heart"></i> My Wish List</li>
                                </a>
                                
                                <hr>

                                <a href="">
                                    <li><i class="fa-solid fa-address-card"></i> Address Book</li>
                                </a>

                                <a href="account_info.php">
                                    <li><i class="fa-solid fa-circle-info"></i> Account Information</li>
                                </a>

                                <a href="gift_card.php">
                                    <li><i class="fa-solid fa-gift"></i> Gift Card</li>
                                </a>

                                </ul>

                                <a href="includes/logout.inc.php" class="sign-up ">
                                    <input type="button" name="logout" value="LOG OUT" class="sign-in log-out">
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

                <!-- Cart -->
                <span class="Cart-button open-cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <p class="cart-count">0</p>
                </span>
            <!-- Cart Content -->
            <div class="offcanvas-cart" id="cart-offcanvas">

                <a class="close-cart" href="#">
                    <i class="fa-solid fa-xmark"></i>
                </a>

                <div class="Cart-header">
                    <h2> My Cart</h2>
                </div>

                <!-- thiss div is where the iteam added to cart will be contained -->
                <div class="cart-content">
                    
                </div>

                <div class="total">
                    <div class="total-tittle">Total</div>
                    <div class="total-price">R0</div>
                </div>

                <div style="display: flex;">
                    <button type="button" class="btn-buy">Continue Shopping</button>
                    <button type="button" class="btn-buy">go to checkout</button>
                </div>
                <!-- <i class="fa-solid fa-xmark"></i> -->

            </div>



        </header> 
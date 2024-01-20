<?php 

    $page = 'my account';
    require_once 'header.php';
    
?>

<body >

    <div class="my-account-pages">

        <div class="account-side-nav">

            <ul class="account-side-nav-ul">

                <a class="side-nav-anch " href="my_account.php">
                    <li class="<?php if($page == 'my account'){echo 'actives home';}?>"><i class="fa-solid fa-user"></i> My Account</li>
                </a>

                <a href="my_orders.php" class="side-nav-anch">
                    <li class="<?php if($page == 'my orders'){echo 'actives';}?>"><i class="fa-solid fa-table-list"></i> My Orders</li>
                </a>

                <a href="my_wishlist.php" class="side-nav-anch">
                    <li class="<?php if($page == 'my whishlist'){echo 'actives';}?>"><i class="fa-solid fa-heart"></i> My Wish List</li>
                </a>

                <hr class="ss">

                <a href="" class="side-nav-anch">
                    <li class="<?php if($page == 'address book'){echo 'actives';}?>"><i class="fa-solid fa-address-card"></i> Address Book</li>
                </a>

                <a href="account_info.php" class="side-nav-anch">
                    <li class="<?php if($page == 'account info'){echo 'actives';}?>"><i class="fa-solid fa-circle-info"></i> Account Information</li>
                </a>

                <a href="gift_card.php" class="side-nav-anch">
                    <li class="<?php if($page == 'gift card'){echo 'actives';}?>"><i class="fa-solid fa-gift"></i> Gift Card</li>
                </a>

                <hr class="ss">

                <a href="includes/logout.inc.php" class="side-nav-anch">
                    <li><i class="fa-solid fa-right-from-bracket"></i> Sign Out</li>
                </a>

            </ul>
        </div>


        <div class="account-body">
            <h1 class="my-account-h1">
                My Account
            </h1>

            <div class="personal-info">

                <h3>Presonal Details</h3><br>
                <p>Name: <?php if(isset($_SESSION["id"])){echo $_SESSION["Fname"];} ?> </p>
                <p>Surname: <?php if(isset($_SESSION["id"])){echo $_SESSION["Lname"];} ?></p>
                <p>Date Of Birth: <?php if(isset($_SESSION["id"])){echo $_SESSION["Dbirth"];} ?></p>
                <p>Gender: <?php if(isset($_SESSION["id"])){echo $_SESSION["Gender"];} ?></p><br>

                <h3>Contact Details</h3><br>
                <p>Contact Number: <?php if(isset($_SESSION["id"])){echo $_SESSION["Contact"];} ?></p>
                <p>Email Address: <?php if(isset($_SESSION["id"])){echo $_SESSION["Email"];} ?></p><br>

                <div class="z">
                    <a href="account_info.php">
                        <h6 class="edit">Edit <i class="fa-solid fa-pen"></i></h6>
                    </a>

                    <a href="">
                        <h6 class="edit">Change Password <i class="fa-solid fa-pen"></i></h6>
                    </a>

                </div>



            </div>

        </div>

    </div>

</body>

<?php
    require_once 'footer.php';
?>
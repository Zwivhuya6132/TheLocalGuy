<?php 

    $page = 'gift card';
    require_once 'header.php';
    
?>

<body >

    <div class="my-account-pages">

        <div class="account-side-nav">

            <ul class="account-side-nav-ul">

                <a class="side-nav-anch " href="my_account.php">
                    <li class="<?php if($page == 'my account'){echo 'actives home';}?>"><i class="fa-solid fa-user"></i> My Account</li>
                </a>

                <a href="" class="side-nav-anch">
                    <li class="<?php if($page == 'my orders'){echo 'actives';}?>"><i class="fa-solid fa-table-list"></i> My Orders</li>
                </a>

                <a href="" class="side-nav-anch">
                    <li class="<?php if($page == 'my whishlist'){echo 'actives';}?>"><i class="fa-solid fa-heart"></i> My Wish List</li>
                </a>

                <hr class="ss">

                <a href="" class="side-nav-anch">
                    <li class="<?php if($page == 'address book'){echo 'actives';}?>"><i class="fa-solid fa-address-card"></i> Address Book</li>
                </a>

                <a href="account_info.php" class="side-nav-anch">
                    <li class="<?php if($page == 'account info'){echo 'actives';}?>"><i class="fa-solid fa-circle-info"></i> Account Information</li>
                </a>

                <a href="" class="side-nav-anch">
                    <li class="<?php if($page == 'gift card'){echo 'actives';}?>"><i class="fa-solid fa-gift"></i> Gift Card</li>
                </a>

                <hr class="ss">

                <a href="includes/logout.inc.php" class="side-nav-anch">
                    <li><i class="fa-solid fa-right-from-bracket"></i> Sign Out</li>
                </a>

            </ul>
        </div>


        <div class="account-body">
        <h1 class="gift-card-title">Gift Cards</h1>

            <div class="gift-card-container">
                <form class="gift-card-form" action="#" method="post">
                    <label for="gift-card-code" class="gift-card-label">Gift Card Code:</label>
                    <input type="text" id="gift-card-code" name="gift-card-code" class="gift-card-input" required>
                    <label for="scratch-code" class="gift-card-label">Scratch Code:</label>
                    <input type="text" id="scratch-code" name="scratch-code" class="gift-card-input" required>
                    <input type="submit" value="Redeem Now" class="gift-card-submit">
                </form>
            </div>

        </div>

    </div>

</body>

<?php
    require_once 'footer.php';
?>
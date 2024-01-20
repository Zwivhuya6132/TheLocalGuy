<?php 

    $page = 'my whishlist';
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
            <h1>My Wishlist</h1>
            <div class="wishlist-container">
                <div class="wishlist-item">
                    <img src="https://via.placeholder.com/100x100" alt="Product Image">
                    <div class="wishlist-item-details">
                    <div class="wishlist-item-name">Product Name</div>
                    <div class="wishlist-item-price">R19.99</div>
                    <button class="wishlist-item-remove">Remove</button>
                    <button class="wishlist-item-add-to-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="wishlist-item">
                    <img src="https://via.placeholder.com/100x100" alt="Product Image">
                    <div class="wishlist-item-details">
                    <div class="wishlist-item-name">Product Name</div>
                    <div class="wishlist-item-price">R29.99</div>
                    <button class="wishlist-item-remove">Remove</button>
                    <button class="wishlist-item-add-to-cart">Add to Cart</button>
                    </div>
                </div>
                <div class="wishlist-item">
                    <img src="https://via.placeholder.com/100x100" alt="Product Image">
                    <div class="wishlist-item-details">
                    <div class="wishlist-item-name">Product Name</div>
                    <div class="wishlist-item-price">R39.99</div>
                    <button class="wishlist-item-remove">Remove</button>
                    <button class="wishlist-item-add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>

<?php
    require_once 'footer.php';
?>
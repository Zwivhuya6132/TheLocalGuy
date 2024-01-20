<?php 

    $page = 'my orders';
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

            <h1 class="order-tittle">Order History</h1>
            <table class="order-history">
                <thead>
                    <tr>
                    <th>Date</th>
                    <th>Order Number</th>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td class="date">Jan 1, 2023</td>
                    <td class="order-number">123456</td>
                    <td>Widget</td>
                    <td>R10.00</td>
                    <td>2</td>
                    <td class="total">R20.00</td>
                    </tr>
                    <tr>
                    <td class="date">Jan 3, 2023</td>
                    <td class="order-number">789012</td>
                    <td>Gizmo</td>
                    <td>R15.00</td>
                    <td>1</td>
                    <td class="total">R15.00</td>
                    </tr>
                    <tr>
                    <td class="date">Jan 5, 2023</td>
                    <td class="order-number">345678</td>
                    <td>Thingamajig</td>
                    <td>20.00</td>
                    <td>3</td>
                    <td class="total">R60.00</td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>

</body>

<?php
    require_once 'footer.php';
?>
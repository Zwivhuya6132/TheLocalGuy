<?php
    $page = "electronics";
    require_once 'header.php';
    require_once 'slideshow.php';
?>

 <!--------------------------------------------------------------------------- Main body  ------------------------------------------------------>

    <section class="shop-by-brands" id="shop-by-brands1">
        <div class="cate-tittle"> 
            Cell Phones
        </div>

        <div class="cellular-grid">

            <?php
                include_once 'includes/conn.inc.php';
                $sql= "SELECT * FROM product_table WHERE category = 'Cell Phone'";
                $all_product = $conn->query($sql);
                while($row = mysqli_fetch_assoc($all_product)){  
            ?>

            <div class="shop-item">

                <div class="product-container">
                    <img src="<?php echo $row['product_img'];?>" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle"><?php echo $row['product_name'];?></div>
                    <p class="shop-item-price">R<?php echo $row['product_price'];?></p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <?php

                }
            ?>

        </div>

    </section>

    <section class="shop-by-brands">
        <div class="cate-tittle"> 
            Laptops
        </div>

        <div class="cellular-grid">
            <?php
                    include_once 'includes/conn.inc.php';
                    $sql= "SELECT * FROM product_table WHERE category = 'Laptop'";
                    $all_product = $conn->query($sql);
                    while($row = mysqli_fetch_assoc($all_product)){  
                ?>

                <div class="shop-item">

                    <div class="product-container">
                        <img src="<?php echo $row['product_img'];?>" alt="" class="shop-item-image">
                    </div>

                    <div class="product-details">
                        <div class="shop-item-tittle"><?php echo $row['product_name'];?></div>
                        <p class="shop-item-price">R<?php echo $row['product_price'];?></p>
                    </div>
            
                    <div class="shop-items"> 

                        <div class="buttons-auto">
                            <button class="add-to-cart shop-item-button">Add to Cart</button>
                            <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                        </div>

                    </div>
                </div>

                <?php

                    }
                ?>

        </div>


    </section>

    <section class="shop-by-brands">
        <div class="cate-tittle"> 
            Accessories
        </div>

        <div class="cellular-grid">
            <?php
                    include_once 'includes/conn.inc.php';
                    $sql= "SELECT * FROM product_table WHERE category = 'Accessories' ";
                    $all_product = $conn->query($sql);
                    while($row = mysqli_fetch_assoc($all_product)){  
                ?>

                <div class="shop-item">

                    <div class="product-container">
                        <img src="<?php echo $row['product_img'];?>" alt="" class="shop-item-image">
                    </div>

                    <div class="product-details">
                        <div class="shop-item-tittle"><?php echo $row['product_name'];?></div>
                        <p class="shop-item-price">R<?php echo $row['product_price'];?></p>
                    </div>
             
                    <div class="shop-items"> 

                        <div class="buttons-auto">
                            <button class="add-to-cart shop-item-button">Add to Cart</button>
                            <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                        </div>

                    </div>
                </div>

                <?php

                    }
                ?>

        </div>
    </section>

    <section class="shop-by-brands">
        <div class="cate-tittle"> 
             Appliances
        </div>

        <div class="cellular-grid">
            <?php
                    include_once 'includes/conn.inc.php';
                    $sql= "SELECT * FROM product_table WHERE category = 'Appliances'";
                    $all_product = $conn->query($sql);
                    while($row = mysqli_fetch_assoc($all_product)){  
                ?>

                <div class="shop-item">

                    <div class="product-container">
                        <img src="<?php echo $row['product_img'];?>" alt="" class="shop-item-image">
                    </div>

                    <div class="product-details">
                        <div class="shop-item-tittle"><?php echo $row['product_name'];?></div>
                        <p class="shop-item-price">R<?php echo $row['product_price'];?></p>
                    </div>
            
                    <div class="shop-items"> 

                        <div class="buttons-auto">
                            <button class="add-to-cart shop-item-button">Add to Cart</button>
                            <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                        </div>

                    </div>
                </div>

                <?php

                    }
                ?>

        </div>
    </section>

    <!-----------------------------------The following containers are for the Our Subscription------------------------------------>


    <section class="subscription">

        <div>
            <p class="hook-up">
                Hook me up with latest Stock
            </p>
        </div>

        <div class="hook">
            <input type="text" placeholder="Email Address" class="hook-inp">
            <button class="hook-but">Subscribe</button>
        </div>

    </section>


    <footer>

        <div class="footer">
            <div class="sec-one">
                <h1 class="follow">The Justified Crew</h1>
                <p>We the best people because God said so</p>
            </div>
            <div class="sec-two">
                <h1 class="follow">Subscribe to our newsletter</h1>
                <input type="text" placeholder="Enter Your email" name="subscribe" class="footer-email" >
                <button class="subscribe-button">Subscribe</button>
            </div>
            <div class="sec-three">
                <h1 class="follow">Follow Us:</h1>
                <span class="social-media">
                    <i class="fa-brands fa-square-facebook social"></i>
                    <i class="fa-brands fa-square-instagram social"></i>
                    <i class="fa-brands fa-square-twitter social"></i>
                </span>

            </div>
            <div class="sec-four">
                <h1 class="follow">Contact Us on:</h1>
                <p>078 568 3557</p>
                <p>zwivhuyadavhana6132@gmail.com</p>
            </div> 
        </div>

    </footer>

</body>

<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/all.js"></script>
<script type="text/javascript" src="js/cart.js"></script>

</html>
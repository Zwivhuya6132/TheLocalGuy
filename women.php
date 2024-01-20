<?php
    $page = "ladies";
    require_once 'header.php';
    require_once 'slideshow.php';
?>

 <!--------------------------------------------------------------------------- Main body  ------------------------------------------------------>

    <section class="shop-by-brands" id="shop-by-brands1">
        <div class="cate-tittle"> 
            Dresses
        </div>

        <div class="cellular-grid">
            <?php
                    include_once 'includes/conn.inc.php';
                    $sql= "SELECT * FROM product_table WHERE category = 'Dress'";
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
            UNDERWEARS
        </div>

        <div class="cellular-grid">

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/women/download (7).jpg" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Pink Davhana Headset</div>
                    <p class="shop-item-price">R788.99</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/women/download (8).jpg" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Table Fan USB Port</div>
                    <p class="shop-item-price">R350.00</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/women/download (9).jpg" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Davhana Airpods</div>
                    <p class="shop-item-price">R485.00</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/women/images (23).jpg" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">3 in 1 USB Cable</div>
                    <p class="shop-item-price">R130.00</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/women/images (17).jpg" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Samsung USB 32GB</div>
                    <p class="shop-item-price">R249.98</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/women/images (18).jpg" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">MIVI Type C USB Adoptor</div>
                    <p class="shop-item-price">R129.99</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/images (22).jpg" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Wireless White Keyboard and Mouse</div>
                    <p class="shop-item-price">R312.99</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/women/images (19).jpg" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Davhana Wireless Gaming Set</div>
                    <p class="shop-item-price">R1200.00</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>
        </div>


    </section>

    <section class="shop-by-brands">
        <div class="cate-tittle"> 
            JERSEYS
        </div>

        <div class="cellular-grid">

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/premium_photo-1670274609267-202ec99f8620.avif" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Mashudu Tambani</div>
                    <p class="shop-item-price">R12.99</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/photo-1504707748692-419802cf939d.avif" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Mashudu Tambani</div>
                    <p class="shop-item-price">R12.99</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/photo-1526657782461-9fe13402a841.avif" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Mashudu Tambani</div>
                    <p class="shop-item-price">R12.99</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/photo-1543652437-15ae836b33e3.avif" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Mashudu Tambani</div>
                    <p class="shop-item-price">R12.99</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/photo-1559163499-413811fb2344.avif" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Mashudu Tambani</div>
                    <p class="shop-item-price">R12.99</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/photo-1575024357670-2b5164f470c3.avif" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Mashudu Tambani</div>
                    <p class="shop-item-price">R12.99</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/photo-1587614382346-4ec70e388b28.avif" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Mashudu Tambani</div>
                    <p class="shop-item-price">R12.99</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/photo-1593642702821-c8da6771f0c6.avif" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Mashudu Tambani</div>
                    <p class="shop-item-price">R12.99</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>
        </div>


    </section>

    <section class="shop-by-brands">
        <div class="cate-tittle"> 
            FORMAL
        </div>

        <div class="cellular-grid">

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/photos-1540544093-b0880061e1a5.avif" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Mashudu Tambani</div>
                    <p class="shop-item-price">R12.99</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/photos-1522338140262-f46f5913618a.avif" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Mashudu Tambani</div>
                    <p class="shop-item-price">R12.99</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/photos-1544233726-9f1d2b27be8b.avif" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Mashudu Tambani</div>
                    <p class="shop-item-price">R12.99</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/photos-1585237672814-8f85a8118bf6.avif" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Mashudu Tambani</div>
                    <p class="shop-item-price">R12.99</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/photos-1624209190904-aca680ededc1.avif" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Mashudu Tambani</div>
                    <p class="shop-item-price">R12.99</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/photos-1589986005992-68bc7aa343c2.avif" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Mashudu Tambani</div>
                    <p class="shop-item-price">R12.99</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/photos-1621605810052-80936545a850.avif" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Mashudu Tambani</div>
                    <p class="shop-item-price">R12.99</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>

            <div class="shop-item">

                <div class="product-container">
                    <img src="images/photos-1570222094114-d054a817e56b.avif" alt="" class="shop-item-image">
                </div>

                <div class="product-details">
                    <div class="shop-item-tittle">Mashudu Tambani</div>
                    <p class="shop-item-price">R12.99</p>
                </div>
        
                <div class="shop-items"> 

                    <div class="buttons-auto">
                        <button class="add-to-cart shop-item-button">Add to Cart</button>
                        <button class="add-to-cart shop-item-button">Add to Wishlist</button>
                    </div>

                </div>
            </div>
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
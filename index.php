<?php

    $page = "home";
    require_once 'header.php';
    require_once 'slideshow.php';
    
?>

<!-----------------------------------The following containers are for the Category box------------------------------------>
    <div class="cate-tittle"> 
        Shop By Category
    </div>

    <section class="categories">

        <div class="cat-1">
            <img src="images/download (1).jpg" alt="" class="cat-img">
            <p >Phones</p>
            
        </div>

        <div class="cat-1">
            <img src="images/download.jfif" alt="" class="cat-img">
            <p >Laptops</p>
        </div>

        <div class="cat-1">
            <img src="images/download (1).jfif" alt="" class="cat-img">
            <p >Appliances</p>
        </div>

        <div class="cat-1">
            <img src="images/images.jfif" alt="" class="cat-img">
            <p >Women</p>
            
        </div>

        <div class="cat-1">
            <img src="images/images (1).jfif" alt="" class="cat-img">
            <p >Men</p>
            
        </div>

        <div class="cat-1">
            <img src="images/images (2).jfif" alt="" class="cat-img">
            <p >Kids</p>
            
        </div>

        <div class="cat-1">
            <img src="images/images (3).jfif" alt="" class="cat-img">
            <p >Hoodies</p>
            
        </div>

        <div class="cat-1">
            <img src="images/images (4).jfif" alt="" class="cat-img">
            <p >Loungewear</p>
            
        </div>
         
    </section>

<!-----------------------------------The following containers are for the Category box------------------------------------>
    <div class="cate-tittle"> 
        Top Products
    </div>

    <section class="top-slider-con">
        <?php
            include_once 'includes/conn.inc.php';
            $sql= "SELECT * FROM product_table WHERE category = 'Top'";
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

    </section>

<!-----------------------------------The following containers are for the Our Services box------------------------------------>


    <section class="our-service">

        <h1 class="we-beleave">
            We believe fashion is for everyone, which is why we offer the latest looks sealed with outstanding value!
        </h1>

        <h5 class="whether">
            Whether you're after that need-it-now trend or an everyday essential, you'll be sure to find it at </br>The Justified Crew - along with sleepwear, shoes and accessories for the whole family.
        </h5>

        <div class="container-one">
            <div class="container-two">
        
              <div class="img-cover">
                <img src="icons/Group.png" class="icons-one">
              </div>
            
              <div class="img-cover">
                <img src="icons/subway_location-3.png" class="icons-one">
              </div>
          
              <div class="img-cover">
                <img src="icons/carbon_delivery-truck.png" class="icons-one">
              </div>
          
              <div class="img-cover">
                <img src="icons/map_location-arrow.png" class="icons-one">
              </div>
          
              <div class="img-cover">
                <img src="icons/ant-design_field-time-outlined.png" class="icons-one">
              </div>
          
            </div>

          </div>

          <div class="done">
            <p class="davhana">FAQ's</p>
            <p class="davhana1">DELIVERY & RETURNS</p>
            <p class="davhana2">TRACK MY ORDER</p>
            <p class="davhana3">STORE LOCATOR</p>
            <p class="davhana4">DELIVERY PERIOD</p>
          </div>

    </section>

<!-----------------------------------The following containers are for the Our Services box------------------------------------>

    <div class="cate-tittle"> 
        Most Popular
    </div>

    <section class="top-slider-con">
        <?php
            include_once 'includes/conn.inc.php';
            $sql= "SELECT * FROM product_table WHERE category = 'Most'";
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

    </section>


    <?php 
    
        include_once 'subscription.php';
        include_once 'footer.php';

    ?>
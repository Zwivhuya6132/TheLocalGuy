<?php

function component($ProductName, $productPrice, $productImg){
    $element = "
    
        <form class=\"shop-item\">

            <div class=\"product-container\">
                <img src=\"$productImg\" alt=\"\" class=\"shop-item-image\">
            </div>

            <div class=\"product-details\">
                <div class=\"shop-item-tittle\">$ProductName</div>
                <p class=\"shop-item-price\">R$productPrice</p>
            </div>

            <div class=\"shop-items\"> 

                <div class=\"buttons-auto\">
                    <button class=\"add-to-cart shop-item-button\">Add to Cart</button>
                    <button class=\"add-to-cart shop-item-button\">Add to Wishlist</button>
                </div>

            </div>
        </form>

    ";

    echo $element;
}
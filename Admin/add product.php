<?php 
    $page = 'add product';
    require_once 'header.php';
?>

<div class="body">

    <form method="POST" name="regForm" action="includes/add product.inc.php" enctype="multipart/form-data" class="add-user-form">
        <div class="user-list-tittle"> 
            <h1>Add Product</h1>  
        </div>

        <div class="add-error">
            <?php
            if(isset($_GET["error"])){
                if ($_GET["error"]=="emptyinput"){
                    echo "<p>All fields are reqiured</p>";
                }

                if ($_GET["error"]=="invalidfname"){
                    echo "<p>Invalid Name</p>";
                }

                if ($_GET["error"]=="invalidphone"){
                    echo "<p>Invalid Phone Number</p>";
                }

                if ($_GET["error"]=="invalidemail"){
                    echo "<p>Invalid Email address</p>";
                }

                if ($_GET["error"]=="passdontmatch"){
                    echo "<p>Passwords do not match</p>";
                }

                if ($_GET["error"]=="alreadyExist"){
                    echo "<p>Email already exist</p>";
                }

            }
            
            ?>
        </div>

        <div class="add-names add-addr ">
            <div>
                <label for="pname">Product Name:</label>
                <input type="text" name="pname" placeholder="Enter Full Product Name" id="pname" class="add-address">
            </div>
        </div>

        <div class="add-names">
            <div>
                <label for="bname">Brand Name:</label>
                <input type="text" name="bname" placeholder="e.g Huawei Nova 8i" id="bname" class="add-fname">
            </div>

            <div>
                <label for="pprice">Product Price:</label>
                <input type="number" name="pprice" value="0.00" id="pprice" class="add-lname">
            </div>

        </div>

        <div class="add-names">

            <div>
                <label for="pimg">Product Image:</label>
                <input type="file" name="pimg" id="pimg" class="add-date">
            </div>

            <div>
                <label for="pcat">Product Category:</label>
                <input type="text" name="pcat" placeholder="E.g Cell Phone" id="pcat" class="add-fname">

            </div>

        </div>

        <div class="add-names add-addr ">
            
            <div>
                <label for="descr" style="display: block;">Description:</label>
                <textarea name="descr" id="descr" class="descr" cols="74" rows="6" placeholder="Enter text here..."></textarea>
            </div>
        </div>


        <div class="add-butt">
            <input type="submit" name="add_prod" value="Add Product" class="Add-user">
        </div>

    </form>
</div>

<script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/all.js"></script>
    <script type="text/javascript" src="../js/cart.js"></script>  
</body>

</html>
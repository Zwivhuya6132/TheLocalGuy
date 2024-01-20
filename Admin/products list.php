<?php
    $page = 'product list';
    require_once 'header.php';
?>

<div class="body">

    <section class="dash-users-con">

        <div class="user-list-tittle"> 
            <h1>Available Products</h1>  
        </div>

        <table class="prod-table">
            <tr>
                <th class="pro-col1">ID</th>
                <th class="pro-col2">Image</th>
                <th class="pro-col3">Product Name</th>
                <th class="pro-col4">Price</th>
                <th class="pro-col5">
                    <a href="add product.php">
                            <input type="submit" value="Add Product" class="del-pro-button">
                    </a>
                </th>
            </tr>

            <?php
                include_once '../includes/conn.inc.php';
                $sql= "SELECT * FROM product_table";
                $all_users = $conn->query($sql);
                while($row = mysqli_fetch_assoc($all_users)){  
            ?>

            <tr>
                <td><?php echo $row['id'];?></td>
                <td> <img src="../<?php echo $row['product_img'];?>" class="avail-product"></td>
                <td><?php echo $row['product_name'];?></td>
                <td>R<?php echo $row['product_price'];?></td>
                <td>
                    <form action="includes/delete.inc.php" method="POST">
                        <button type="submit" name="delete" value="<?php echo $row['id'];?>" class="del-pro-button">Delete Product</button>
                    </form>
                </td>

            </tr>

            <?php
                }
            ?>
        </table>

    </section>
</div>


<script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/all.js"></script>
    <script type="text/javascript" src="../js/cart.js"></script>  
</body>
</html>
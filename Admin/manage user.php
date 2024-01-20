<?php
    $page = 'manage user';
    require_once 'header.php';
?>

<div class="body">

    <section class="dash-users-con">

        <div class="user-list-tittle"> 
            <h1>Users</h1>  
        </div>

        <table class="prod-table">
            <tr>
                <th class="pro-col1">ID</th>
                <th class="pro-col2">First Name</th>
                <th class="pro-col3">Last Name</th>
                <th class="pro-col4">Date Of Birth</th>
                <!-- <th class="pro-col">Email Adress</th> -->
                <th class="pro-col5">
                    <a href="add user.php">
                            <input type="submit" value="Add User" class="del-pro-button">
                    </a>
                </th>
            </tr>

            <?php
                include_once '../includes/conn.inc.php';
                $sql= "SELECT * FROM regform";
                $all_users = $conn->query($sql);
                while($row = mysqli_fetch_assoc($all_users)){  
            ?>

            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['Fname'];?></td>
                <td><?php echo $row['Lname'];?></td>
                <td><?php echo $row['Email'];?></td>
                <td class="edit-remove">
                    <form action="includes/deleteUser.inc.php" method="POST">
                        <button type="submit" name="edit" value="<?php echo $row['id'];?>" class="del-pro-button edit-remove">Edit</button>
                        <button type="submit" name="delete" value="<?php echo $row['id'];?>" class="del-pro-button">Remove</button>
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
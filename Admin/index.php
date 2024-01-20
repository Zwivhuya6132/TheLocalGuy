<?php 
    $page = 'home';
    require_once 'header.php';
?>

    <div class="body">

        <section class="dash-users-con">
            <div class="user-list-tittle"> 
                <h1>User List</h1>  
            </div>
            <table class="dash-users-table">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Email</th>
                </tr>

                <?php
                    include_once '../includes/conn.inc.php';
                    $sql= "SELECT * FROM regform WHERE UserType ='User'";
                    $all_users = $conn->query($sql);
                    while($row = mysqli_fetch_assoc($all_users)){  
                ?>

                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['Fname'];?></td>
                    <td><?php echo $row['Lname'];?></td>
                    <td><?php echo $row['Dbirth'];?></td>
                    <td><?php echo $row['Gender'];?></td>
                    <td><?php echo $row['Address'];?></td>
                    <td><?php echo $row['Contact'];?></td>
                    <td><?php echo $row['Email'];?></td>
                </tr>

                <?php
                    }
                ?>
            </table>

        </section>

        <section class="cat-brands">

            <div class="dash-cat-con">

                <div class="user-list-tittle"> 
                <h1>Categories List</h1>  
                </div>
                <table>
                    <tr>
                        <th>ID</th>
                        <th class="cat-name">Categories</th>
                        <th class="count-col">Count</th>

                    </tr>

                    <?php
                        include_once '../includes/conn.inc.php';
                        $sql= "SELECT * FROM category";
                        $all_users = $conn->query($sql);
                        while($row = mysqli_fetch_assoc($all_users)){  
                    ?>

                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['category'];?></td>
                        <td><?php echo $row['count'];?></td>
                    </tr>

                    <?php
                        }
                    ?>
                </table>

            </div>

            <div class="dash-cat-con">

                <div class="user-list-tittle"> 
                <h1>Brands List</h1>  
                </div>
                <table>
                    <tr>
                        <th>ID</th>
                        <th class="cat-name">Brand Names</th>
                        <th class="count-col">Count</th>

                    </tr>

                    <?php
                        include_once '../includes/conn.inc.php';
                        $sql= "SELECT * FROM brand_names";
                        $all_users = $conn->query($sql);
                        while($row = mysqli_fetch_assoc($all_users)){  
                    ?>

                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['brand_name'];?></td>
                        <td><?php echo $row['count'];?></td>
                    </tr>

                    <?php
                        }
                    ?>
                </table>

            </div>

            <div class="dash-cat-con">

                <div class="user-list-tittle"> 
                <h1>Subscribers List</h1>  
                </div>
                <table>
                    <tr>
                        <th>ID</th>
                        <th class="cat-name"> Email Address</th>

                    </tr>

                    <?php
                        include_once '../includes/conn.inc.php';
                        $sql= "SELECT * FROM subscribers";
                        $all_users = $conn->query($sql);
                        while($row = mysqli_fetch_assoc($all_users)){  
                    ?>

                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['email'];?></td>
                    </tr>

                    <?php
                        }
                    ?>
                </table>

            </div>

        </section>


    </div>

    <?php
        include_once 'footer.php'
    ?>
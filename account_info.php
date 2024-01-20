<?php 

    $page = 'account info';
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
            <h1 class="my-account-h1">
                Edit Page
            </h1>

                <form method="POST" name="regForm" action="" enctype="multipart/form-data" class="personal-info">


                    <div class="reg-form-con">

                        <div class="reg-form">


                            <div class="reg-error">
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

                            <div  class="names-con">
                            
                                <div class="first-n">
                                    <label for="fname">First Name:</label>
                                    <input type="text" name="fname" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['Fname'];} ?>" id="fname" class="fname names">
                                </div>
                        
                                <div class="last-n">
                                    <label for="lname">Last Name:</label>
                                    <input type="text" name="lname" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['Lname'];} ?>"  id="lname" class="lname names">
                                </div>
                            </div>

                            <div  class="date-gen">
                            
                                <div class="dob">
                                    <label for="date">Date of Birth:</label>
                                    <input type="date" name="date" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['Dbirth'];} ?>"  id="date" class="date">
                                </div>
                        
                                <div class="gender-con">
                                    <label for="gender">Gender:</label>
                                    <select name="gender" id="gender" class="gender">
                                        <option value="">----Please Select----</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="N/A">Prefer not to say</option>
                                    </select>
                                </div>
                            </div>

                            <div  class="home-adress">
                            
                                <div class="adress-con">
                                    <label for="address">Home Address:</label>
                                    <input type="text" name="address" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['Address'];} ?>"  id="address" class="adress">
                                </div>
                        
                            </div>

                            <div  class="contacts-con">
                            
                                <div class="phone-n">
                                    <label for="phone">Contact Number:</label>
                                    <input type="text" name="phone" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['Contact'];} ?>"  id="phone" class="phone">
                                </div>
                        
                                <div class="email-add">
                                    <label for="email">Email Address:</label>
                                    <input type="text" name="email" value="<?php if(isset($_SESSION['id'])){echo $_SESSION['Email'];} ?>"  id="email" class="email">
                                </div>
                            </div>

                            <div  class="password-con">
                            
                                <div class="password-cre">
                                    <label for="password">Password:</label>
                                    <input type="password" name="password" id="password" class="password">
                                </div>
                        
                                <div class="email-add">
                                    <label for="cpassword">Confirm Password:</label>
                                    <input type="password" name="cpassword" id="cpassword" class="email">
                                </div>
                            </div>

                            <div class="submit-butt">
                                <input type="submit" name="submit" value="Update" class="submit">

                            </div>

                        </div>
                    </div>

                </form>




        </div>

    </div>

</body>

<?php
    require_once 'footer.php';
?>
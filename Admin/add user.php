<?php 
    $page = 'add user';
    require_once 'header.php';
?>

<div class="body">

    <form method="POST" name="regForm" action="includes/register.inc.php" enctype="multipart/form-data" class="add-user-form">
        <div class="user-list-tittle"> 
            <h1>Add User</h1>  
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

        <div class="add-names">
            <div>
                <label for="fname">First Name:</label>
                <input type="text" name="fname" placeholder="e.g Zwivhuya" id="fname" class="add-fname">
            </div>

            <div>
                <label for="lname">Last Name:</label>
                <input type="text" name="lname" placeholder="e.g Davhana" id="lname" class="add-lname">
            </div>
        </div>

        <div class="add-names">
            <div>
                <label for="date">Date of Birth:</label>
                <input type="date" name="date" id="date" class="add-date">
            </div>

            <div>
                <label for="gender">Gender:</label>
                <select name="gender" id="gender" class="add-gender">
                    <option value="">----Please Select----</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="N/A">Prefer not to say</option>
                </select>
            </div>
        </div>

        <div class="add-names add-addr ">
            <div>
                <label for="address">Home Address:</label>
                <input type="text" name="address" placeholder="Enter your Full home address" id="address" class="add-address">
            </div>
        </div>

        <div class="add-names">
            <div>
                <label for="phone">Phone Number:</label>
                <input type="text" name="phone" placeholder="e.g No space or country code" id="phone" class="add-phone">
            </div>

            <div>
                <label for="email">Email Address:</label>
                <input type="email" name="email" placeholder="e.g zwivdav@gmail.com" id="email" class="add-email">
            </div>
        </div>

        <div class="add-names">
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Create Password" id="password" class="add-password">
            </div>

            <div>
                <label for="cpassword">Confirm Password:</label>
                <input type="password" name="cpassword" placeholder="Re enter your password" id="cpassword" class="add-cpassword">
            </div>
        </div>

        <div class="add-butt">
            <input type="submit" name="add" value="Add-user" class="Add-user">
        </div>

    </form>

</div>

<script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/all.js"></script>
    <script type="text/javascript" src="../js/cart.js"></script>  
</body>
</html>
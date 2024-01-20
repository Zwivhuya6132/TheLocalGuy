<?php
    require_once 'header.php';
    require_once 'slideshow.php';
?>

<!-----------------------------------The following container is where the registration form starts------------------------------------>


    <form method="POST" name="regForm" action="includes/register.inc.php" enctype="multipart/form-data" class="reg">


        <div class="reg-tittle">
            Registration
        </div>


        <div class="reg-form-con">

            <div class="reg-img-con">
                <img src="images/The-happy-store.jpg" alt="" class="reg-form-img">
    
            </div>
    
            <div class="reg-form">


                <div class="reg-error">
                    <?php
                    if(isset($_GET["error"])){
                        if ($_GET["error"]=="emptyinput"){
                            echo "<p>All fields are reqiured</p>";
                        }

                        if ($_GET["error"]=="invalidfname"){
                            echo "<p>Invalid First Name</p>";
                        }

                        if ($_GET["error"]=="invalidlname"){
                            echo "<p>Invalid Last Name</p>";
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
                        <input type="text" name="fname" id="fname" class="fname names">
                    </div>
            
                    <div class="last-n">
                        <label for="lname">Last Name:</label>
                        <input type="text" name="lname" id="lname" class="lname names">
                    </div>
                </div>
    
                <div  class="date-gen">
                
                    <div class="dob">
                        <label for="date">Date of Birth:</label>
                        <input type="date" name="date" id="date" class="date">
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
                        <input type="text" name="address" id="address" class="adress">
                    </div>
            
                </div>
    
                <div  class="contacts-con">
                
                    <div class="phone-n">
                        <label for="phone">Contact Number:</label>
                        <input type="text" name="phone" id="phone" class="phone">
                    </div>
            
                    <div class="email-add">
                        <label for="email">Email Address:</label>
                        <input type="text" name="email" id="email" class="email">
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
                    <input type="submit" name="submit" value="Register" class="submit">
    
                </div>
    
            </div>
        </div>

    </form>

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
<?php
    require_once 'header.php';
    require_once 'slideshow.php';
?>

<!-----------------------------------The following container is where the registration form starts------------------------------------>


    <form method="POST" name="regForm" action="includes/login.inc.php" enctype="multipart/form-data" class="log" >

        <div class="log-tittle">
            Log In
        </div>

        <div class="log-form-con">

            <div class="log-img-con">
                <img src="images/The-happy-store.jpg" alt="" class="log-form-img">
            </div>
    
            <div class="log-form">
    
                <div  class="log-in">
                
                    <div class="uname-con">
                        <label for="uname">Email Address:</label>
                        <input type="text" name="uname" id="uname" class="uname">
                    </div>

                    <div class="uname-con">
                        <label for="Password">Password:</label>
                        <input type="password" name="Password" id="Password" class="uname">
                    </div>
            
                </div>

                <div class="submit-butt">
                    <input type="submit" name="submit" value="Log In" class="submit">
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
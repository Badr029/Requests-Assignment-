<?php 
include("header.php");

if(isset($_POST["submit"])):

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword= $_POST["cpassword"];

    if(empty($fname)):
        $error["fname"] = "First name is required";
    endif;

    if(empty($lname)):
        $error["lname"] = "Last name is required";
    endif;

    if(is_numeric($fname)):
        $error["numfname"] = "cannot be a number";
    endif;
    if(is_numeric($lname)):
        $error["numlname"] = "cannot be a number";
    endif;

    if(!preg_match("'/^[a-zA-Z]+$/'", $fname)):
        $error["hnumfname"] = "Digits are not allowed";
    endif;
    if(!preg_match("'/^[a-zA-Z]+$/'", $lname)):
        $error["hnumlname"] = "Digits are not allowed";
    endif;

    if(empty($email)):
        $error["empemail"] = "Email is required";
    endif;
    
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)):
        $error["email"]= "Invalid Email Address";
    endif;

    if(empty($password)):
        $error["emppass"] = "Password is required";
    endif;

    if(!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}$/", $password)):
        $error["validpass"] = "Password must be at least 8 characters long and include an uppercase letter, a lowercase letter, a number, and a special character";
    endif;
    
    if (empty($cpassword)):
        $error["empcpass"] = "Please confirm your password";
    elseif ($password !== $cpassword):
        $error["cpass"] = "Passwords do not match";
    endif;

endif;


?>


    <!-- start sign up page -->
    <div class="sign-up">
        <div class="container">
                <h2>Sign Up</h2>
                <form method="post">
                    <div class="wrapper">
                        <div class="input-data">
                            <input type="text" id="fname" name="fname"    > 
                            <div class="underline"></div>
                            <label for="fname"> <i class="fa-solid fa-user"></i> First Name</label>
                            <?php if(!empty($error["fname"])): ?>
                            <p class="error-message"><?= $error["fname"]?></p>
                            <?php endif; ?>
                            <?php if(!empty($error["numfname"])): ?>
                            <p class="error-message"><?= $error["numfname"]?></p>
                            <?php endif; ?>
                            <?php if(!empty($error["hnumfname"])): ?>
                            <p class="error-message"><?= $error["hnumfname"]?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="input-data">
                            <input type="text" id="lname" name="lname"    > 
                            <div class="underline"></div>
                            <label for="lname"> <i class="fa-solid fa-user"></i> Last Name</label>
                            <?php if(!empty($error["lname"])): ?>
                            <p class="error-message"><?= $error["lname"]?></p>
                            <?php endif; ?>
                            <?php if(!empty($error["numlname"])): ?>
                            <p class="error-message"><?= $error["numlname"]?></p>
                            <?php endif; ?>
                            <?php if(!empty($error["hnumlname"])): ?>
                                <p class="error-message"><?= $error["hnumlname"]?></p>
                            <?php endif; ?>
                                
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="input-data">
                            <input type="email" id="email" name="email"    > 
                            <div class="underline"></div>
                            <label for="email"> <i class="fa-solid fa-at"></i> Email</label>
                            <script>document.getElementById('email').addEventListener('input', function() {
                                var emailInput = document.getElementById('email');
                                var emailLabel = emailInput.nextElementSibling;
                                
                                if (emailInput.validity.valid) {
                                    emailLabel.classList.add('valid');
                                } else {
                                    emailLabel.classList.remove('valid');
                                }
                            });
                            </script>

                            <?php if(!empty($error["empemail"])): ?>
                            <p class="error-message"><?= $error["empemail"] ?></p>
                            <?php endif; ?>
                            <?php if(!empty($error["email"])): ?>
                            <p class="error-message"><?= $error["email"] ?></p>
                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="input-data">
                            <input type="password" id="password" name="password"    > 
                            <div class="underline"></div>
                            <label for="password"><i class="fa-solid fa-lock"></i> Password</label>
                        </div>
                        <?php if(!empty($error["emppass"])): ?>
                        <p class="error-message"><?= $error["emppass"] ?></p>
                        <?php endif; ?>
                        <?php if(!empty($error["validpass"])): ?>
                        <p class="error-message"><?= $error["validpass"] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="wrapper">
                        <div class="input-data" id=>
                            <input type="password" id="confirm-pass" name="cpassword"   > 
                            <div class="under0line"></div>
                            <label for="confirm-pass"><i class="fa-solid fa-lock"></i> Confirm Password</label>
                        </div>
                        <?php if(!empty($error["empcpass"])): ?>
                        <p class="error-message"><?= $error["empcpass"] ?></p>
                        <?php endif; ?>
                        <?php if(!empty($error["cpass"])): ?>
                        <p class="error-message"><?= $error["cpass"] ?></p>
                        <?php endif; ?>
                    </div>
                        <button type="submit" name="submit"class="button">Submit</button>

<!-- --------------------------------------------------------------------------------------------------------- -->
                </form>
                        <div class="or-sign">
                            <p>Or Sign Up Using</p>
                            <div class="icons">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-google"></i></a>    
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="acc">
                            <p>Already have an account?</p>
                            <a href="login.html">Login</a>
                        </div>
        </div>
    </div>

    <!-- end sign up page -->
    

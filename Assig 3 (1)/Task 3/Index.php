<?php
include("header.php");
if(isset($_POST["submit"])):

    $userID = $_POST["userID"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $country = isset($_POST["country"]) ? $_POST["country"] : "";
    $zip = $_POST["zip"];
    $email = $_POST["email"];
    $sex = isset($_POST["sex"]) ? $_POST["sex"] : "";
    $language = isset($_POST["language"]) ? $_POST["language"] : "";
    $about = $_POST["about"];
    
        if(empty($userID)||empty($password)||empty($name)||empty($country)||empty($zip)||empty($email)||empty($sex)||empty($language) ):
            $error["empty"]= "required";
        endif;
        if(empty($userID)|| strlen($userID)<5 || strlen($userID)>12.) :
            $error["userid"] = "Required and must be of length 5 to 12";
        endif;
        if(empty($password)|| strlen($password)<7 || strlen($password)>12.):
            $error["password"] = "Required and must be of length 7 to 12";
        endif;
        if(empty($name)|| !preg_match("/^[a-zA-Z\s]+$/", $name)):
            $error["name"] = "Required and alphabets only";
        endif;
        if(empty($country)):
            $error["country"] = "Required. Must select a country";
        endif;
        if(empty($zip)|| !is_numeric($zip)):
            $error["zip"] = "Required. Must select a country";
        endif;
        if(empty($email)|| !filter_var($email,FILTER_VALIDATE_EMAIL)):
            $error["email"] = "Required. Must be a valid email";
        endif;
        if(empty($sex)):
            $error["sex"] = "required";
        endif;
        if(empty($language)):
            $error["language"]= "required";
        endif;
        if (empty($error)) {
            $formData = [
                "User ID" => $userID,
                "Password" => $password,
                "Name" => $name,
                "Address" => $address,
                "Country" => $country,
                "Zip-Code" => $zip,
                "Email" => $email,
                "Sex" => $sex,
                "Language" => $language
            ];
            session_start();
            $_SESSION["print"] = $formData;
            header("location: display.php");
            exit; 
        }
        
    endif;   
    
?>

<div class="form-container">
    <h2>Registration Form</h2>
    <form action="" method="post">
        <!-- User ID -->
        <div class="input-group" >
            <label for="userId">User ID</label>
            <input type="text" id="userId" name="userID" >
            <?php if(!empty($error["userid"])): ?>
            <p style="color:red;"><?= $error["userid"]?></p>
            <?php endif; ?>
        </div>

        <!-- Password -->
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password"  >
            <?php if(!empty($error["password"])): ?>
            <p style="color:red;"><?= $error["password"]?></p>
            <?php endif; ?>
        </div>
        
        <!-- Name -->
        <div class="input-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name"  >
            <?php if(!empty($error["name"])): ?>
            <p style="color:red;"><?= $error["name"]?></p>
            <?php endif; ?>
        </div>

        <!-- Address -->
        <div class="input-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address"  >
            <?php if(!empty($error["empty"])): ?>
            <p style="color:red;"><?= 'Optional.'?></p>
            <?php endif; ?>
        </div>

        <!-- Country Selection -->
        <div class="input-group">
            <label for="country">Country</label>
            <select id="country" name="country"  >
                <option value="USA">USA</option>
                <option value="Canada">Canada</option>
                <option value="UK">UK</option>
                <option value="India">India</option>
                <option value="Australia">Australia</option>
            </select>
            <?php if(!empty($error["country"])): ?>
            <p style="color:red;"><?= $error["country"]?></p>
            <?php endif; ?>
        </div>

        <!-- Zip Code -->
        <div class="input-group">
            <label for="zip">Zip Code</label>
            <input type="text" id="zip" name="zip"  >
            <?php if(!empty($error["zip"])): ?>
            <p style="color:red;"><?= $error["zip"]?></p>
            <?php endif; ?>
        </div>

        <!-- Email -->
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email"  >
            <?php if(!empty($error["email"])): ?>
            <p style="color:red;"><?= $error["email"]?></p>
            <?php endif; ?>
        </div>

        <!-- Sex -->
        <div class="input-group">
            <label>Sex</label>
            <label for="male">Male</label>
            <input type="radio" id="male" name="sex" value="Male"  >
            <label for="female">Female</label>
            <input type="radio" id="female" name="sex" value="Female"  >
            <?php if(!empty($error["sex"])): ?>
            <p style="color:red;"><?= $error["sex"]?></p>
            <?php endif; ?>
        </div>

        <!-- Language -->
        <div class="input-group">
    <label for="language">Language</label>
    <label for="english">English</label>
    <input type="radio" id="english" name="language" value="English">
    <label for="non-english">Non-English</label>
    <input type="radio" id="non-english" name="language" value="Non-English">
    <?php if (!empty($error["language"])): ?>
    <p style="color:red;"><?= $error["language"] ?></p>
    <?php endif; ?>
</div>

        <!-- About -->
        <div class="input-group">
            <label for="about">About</label>
            <textarea id="about" name="about" rows="4"  ></textarea>
        </div>
        <?php if(!empty($error["empty"])): ?>
            <p style="color:red;"><?="Optional"?></p>
            <?php endif; ?>

        <!-- Submit Button -->
        <button type="submit" class="submit-btn" name = "submit" >Submit</button>
    </form>
</div>

</body>
</html>

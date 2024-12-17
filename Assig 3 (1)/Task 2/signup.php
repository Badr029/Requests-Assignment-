<?php 
include("header.php");

if(isset($_POST["submit"])):

    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $website = isset($_POST["website"]) ? $_POST["website"] : '';
    $comment = isset($_POST["user_comment"]) ? $_POST["user_comment"] : ''; 
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";

    $error = [];

    if(empty($fname)):
        $error["fname"] = "Full name is required";
    elseif(!preg_match("/^[a-zA-Z\s]+$/", $fname)):
        $error["fullname"] = "Only letters and white space allowed";
    endif;

    if(empty($email)):
        $error["email"] = "Email is required";
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)):
        $error["email"] = "The Email address is incorrect";
    endif;

    if(empty($website)):
        $error["website"] = "Website URL is required";
    elseif(!filter_var($website, FILTER_VALIDATE_URL)):
        $error["website"] = "Enter a valid Website URL";
    endif;

    if(empty($gender)):
        $error["gender"] = "Please select your gender";
    endif;

    if(empty($error)):
        $formData = [
            "Full Name" => $fname,
            "Email" => $email,
            "Website" => $website,
            "Comment" => $comment,
            "Gender" => $gender
        ];
    endif;
endif;
?>
<div class="sign-up">
    <div class="container">
        <h2>Sign Up</h2>
        
        <?php if(!empty($error["error"])): ?>
            <p style="color:red;"><?= $error["error"] ?> </p>
        <?php endif; ?>

        <form method="post">
            <div class="wrapper">
                <div class="input-data">
                    <input type="text" id="username" name="fname" value="<?= isset($_POST['fname']) ? $_POST['fname'] : '' ?>"> 
                    <div class="underline"></div>
                    <label for="fname"> <i class="fa-solid fa-user"></i> Full Name</label>
                    <?php if(!empty($error["fullname"])): ?>
                        <p style="color:red;"><?= $error["fullname"] ?> </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="wrapper">
                <div class="input-data">
                    <input type="email" id="email" name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>"> 
                    <div class="underline"></div>
                    <label for="email"> <i class="fa-solid fa-at"></i> Email</label>
                    <?php if(!empty($error["email"])): ?>
                        <p style="color:red;"><?= $error["email"] ?> </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="wrapper">
                <div class="input-data">
                    <input type="url" id="website" name="website" value="<?= isset($_POST['website']) ? $_POST['website'] : '' ?>"> 
                    <div class="underline"></div>
                    <label for="website">Website</label>
                    <?php if(!empty($error["website"])): ?>
                        <p style="color:red;"><?= $error["website"] ?> </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="wrapper">
                <div class="input-data">
                    <textarea name="user_comment" rows="3" cols="30" placeholder="Type your comment here..."><?= isset($_POST['user_comment']) ? $_POST['user_comment'] : '' ?></textarea>
                    <div class="underline"></div>
                </div>
            </div>

            <div class="wrapper">
                <label for="male">Male</label>
                <input type="radio" id="male" name="gender" value="male" <?= isset($_POST['gender']) && $_POST['gender'] == 'male' ? 'checked' : '' ?>>
                
                <label for="female">Female</label>
                <input type="radio" id="female" name="gender" value="female" <?= isset($_POST['gender']) && $_POST['gender'] == 'female' ? 'checked' : '' ?>>
                
                <?php if(!empty($error["gender"])): ?>
                    <p style="color:red;"><?= $error["gender"] ?> </p>
                <?php endif; ?> 
            </div>

            <button type="submit" name="submit" class="button">Submit</button>
        </form>

        <?php if(!empty($formData)): ?>
            <div class="submitted-data" style="margin-top: 20px;">
                <h3>Submitted Data:</h3>
                <ul>
                    <?php foreach($formData as $key => $value): ?>
                        <li><strong><?= $key ?>:</strong> <?= htmlspecialchars($value) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</div>
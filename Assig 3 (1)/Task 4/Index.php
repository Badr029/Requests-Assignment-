<?php
include("header.php");
if(isset($_POST["submit"])):

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $details = $_POST["details"];
    

    if(empty($fname) || strlen($fname) < 5):
        $error["fname"] = "The First Name is required and must be at least 5";
    endif;

    if(empty($lname)):
        $error["lname"] = "The last Name is Required.";
    endif;

    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)):
        $error["email"] = "The email is required and must be a valid email.";
    endif;

    if(empty($mobile) || is_numeric($mobile)):
        $error["mobile"] = "The Number is required and must be a Number.";
    endif;

    if(empty($password) ):
        $error["password"] = "The password feild is Required .";
    endif;

    if(empty($confirm_password)):
        $error["confirm_password"] = "The confirm password is required";
        elseif($password !== $confirm_password):
            $error["confirm_password"] = "the confirm-password doesn't match the password";
    endif;

    if (empty($error)) {
        $formData = [
            "First Name" => $fname,
            "Last Name" => $lname,
            "Email" => $email,
            "Mobile" => $mobile,
            "Details" => $details,
        ];
        session_start();
        $_SESSION["print"] = $formData;
        header("location: display.php");
        exit; 
    }

endif;
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .form-container {
            width: 60%;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .input-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
        }

        .flex-row {
            display: flex;
            gap: 20px;
        }

        .flex-row .input-group {
            flex: 1;
        }

        .submit-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background: #007BFF;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }

        .submit-btn:hover {
            background: #0056b3;
        }

        p {
            margin: 5px 0 0;
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Registration Form</h2>
            <?php if (!empty($error)): ?>
                <div class="error-container">
                    <p><span class="whoops">Whoops!</span> There were some problems with your input:</p>
                    <ul>
                        <?php foreach ($error as $err): ?>
                            <li><?= htmlspecialchars($err) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

        
        <form action="" method="post">
            <div class="flex-row">
                <div class="input-group">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname" value="<?= isset($_POST['fname']) ? $_POST['fname'] : '' ?>">
                    <?php if(!empty($error["fname"])): ?>
                        <p><?= $error["fname"] ?></p>
                    <?php endif; ?>
                </div>
                <div class="input-group">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" value="<?= isset($_POST['lname']) ? $_POST['lname'] : '' ?>">
                    <?php if(!empty($error["lname"])): ?>
                        <p><?= $error["lname"] ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="flex-row">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">
                    <?php if(!empty($error["email"])): ?>
                        <p><?= $error["email"] ?></p>
                    <?php endif; ?>
                </div>
                <div class="input-group">
                    <label for="mobile">Mobile No.</label>
                    <input type="number" id="mobile" name="mobile" value="<?= isset($_POST['mobile']) ? $_POST['mobile'] : '' ?>">
                    <?php if(!empty($error["mobile"])): ?>
                        <p><?= $error["mobile"] ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="flex-row">
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                    <?php if(!empty($error["password"])): ?>
                        <p><?= $error["password"] ?></p>
                    <?php endif; ?>
                </div>
                <div class="input-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password">
                    <?php if(!empty($error["confirm_password"])): ?>
                        <p><?= $error["confirm_password"] ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="input-group">
                <label for="details">Details</label>
                <textarea id="details" name="details" rows="4"><?= isset($_POST['details']) ? $_POST['details'] : '' ?></textarea>
            </div>

            <button type="submit" class="submit-btn" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>

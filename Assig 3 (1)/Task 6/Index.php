<?php
include("header.php");

$arr=[
    "username"=> "MohamedBadr29",
    "Password"=> "Password",
];

$user_inp = $_POST["username"] ?? '';
$pass_inp = $_POST["password"] ?? '';


if(empty($user_inp)):
    $error["empty"] = "Please enter a Username";
    elseif($user_inp != $arr['username']):
        $error["wrong_user"] = "User doesn't exist";
        elseif(empty($pass_inp)):
            $error["empty_pass"] = "Please enter the password";
            elseif($pass_inp != $arr["Password"]):
                $error["wrong_pass"] = "The Password is incorrect";
    endif;



?>

<div class="login-container">
        <h2>Login</h2>
        <form method="post">
            <div class="input-group" name="username">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" >
                <?php if(!empty($error["empty"])): ?>
                <p style="color:red;"><?= $error["empty"]?></p>
                <?php endif; ?>
                <?php if(empty($error["empty"]) && !empty($error["wrong_user"])): ?>
                <p style="color:red;"><?= $error["wrong_user"]?></p>
                <?php endif; ?>
            </div>
            <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <?php if (!empty($error["empty_pass"])): ?>
                <p style="color:red;"><?= $error["empty_pass"] ?></p>
            <?php elseif (!empty($error["wrong_pass"])): ?>
                <p style="color:red;"><?= $error["wrong_pass"] ?></p>
            <?php endif; ?>
        </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>



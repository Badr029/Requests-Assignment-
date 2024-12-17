<?php
include("header.php");
session_start();
if(isset($_POST["submit"])):
    $_SESSION["msg"] = "hello world";
    header("display.php");
    exit();
endif;
?>

<!-- mesh fahem howa 3ayz eh el sra7a  -->


<form method="post" >
    <input type="text" name="name" placeholder="First Name">
    <input type="submit" name="submit">
</form>
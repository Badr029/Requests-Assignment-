<?php

// 7awelt bs m3rftsh azbotha 

include("header.php");

$image= $_POST["image"];
$name= $_POST["name"];
$price= $_POST["price"];
$quantity= $_POST["quantity"];

if(empty($_POST["iamge"])|| ):
    $error["emp_img"]= "The Image is required";
endif;


?>
<div class="product-card">
    <div class="image-upload" >
        <label for="product-image">Upload Image</label>
        <input type="file" id="product-image" name="image" accept="image/*">
    </div>
    <div class="product-info">
        <label for="product-name">Product Name:</label>
        <input type="text" id="product-name" name="name" placeholder="Enter product name">
        
        <label for="product-price">Price:</label>
        <input type="number" id="product-price" name="price" placeholder="Enter product price" step="0.01">
        
        <label for="product-quantity">Quantity:</label>
        <input type="number" id="product-quantity" name="quantity" placeholder="Enter product quantity" min="0">
    </div>
</div>


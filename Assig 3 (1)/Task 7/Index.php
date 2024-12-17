<?php
include("header.php");
$value = "";
if(isset($_POST["submit"])):
$first_num = $_POST["first-num"];
$second_num = $_POST["second-num"];
$operator = $_POST["operator"];
endif;


if (empty($first_num) || empty($second_num)) :
    $error["empty"] = "Please enter both numbers.";
else :
    switch ($operator):
        case "+":
            $value = $first_num + $second_num;
            break;
        case "-":
            $value = $first_num - $second_num;
            break;
        case "*":
            $value = $first_num * $second_num;
            break;
        case "/":
            if ($second_num != 0) {
                $value = $first_num / $second_num;
            } else {
                $error["div_zero"] = "Cannot divide by zero.";
            }
            break;
        case "%":
            $value = $first_num % $second_num;
            break;
        default:
            $error["operator"] = "Invalid operator.";
            break;
        endswitch;
    endif;





?>

<div class="calculator">
        <h2>Simple PHP Calculator</h2>
        <form method="POST">
            <div class="input-group">
                <label for="first-num">First Number</label>
                <input type="number" name="first-num" id="first-num" required>
            </div>

            <div class="input-group">
                <label for="second-num">Second Number</label>
                <input type="number" name="second-num" id="second-num" required>
            </div>

            <div class="input-group">
            <label for="operator">Select Operator</label>
            <select name="operator" id="operator" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>
        </div>
            <div class="output">
            <?php

            if (!empty($value)) {
                echo $value;
            } elseif (!empty($error["empty"])) {
                echo $error["empty"];
            } elseif (!empty($error["div_zero"])) {
                echo $error["div_zero"];
            } elseif (!empty($error["operator"])) {
                echo $error["operator"];
            }
            ?>
        </div>

        <button type="submit" name="submit">Go</button>
        </form>



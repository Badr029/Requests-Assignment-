<?php
session_start();

if (isset($_SESSION["msg"])):
    echo htmlspecialchars($_SESSION["msg"]); 
    
else:
    echo "No message found.";
    endif;
?>

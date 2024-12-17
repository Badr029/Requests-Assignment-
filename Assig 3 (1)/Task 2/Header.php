
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIA</title> 
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <!-- main css -->
    <link rel="stylesheet" href="css/main.css">
    <!-- render all elements normaly -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- font awesome library -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- main js -->
    <script src="js/script.js"></script>
</head>
<body>
    <!-- start header -->
    <div class="header">
        <div class="container">
            <a href="index.html"><img class="logo"  src="images/logo.png" alt=""></a>
            <div class="links">
                <span class="icon" id="menu-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <ul id="menu">
                    <li><a href="index.html #services">Services</a></li>
                    <li><a href="index.html #portfolio">Portfolio</a></li>
                    <li><a href="index.html #aAbout">About</a></li>
                    <li><a href="index.html #contact">Contact</a></li>
                </ul>
            </div>
        </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var menuIcon = document.getElementById('menu-icon');
                var menu = document.getElementById('menu');
                
                menuIcon.addEventListener('click', function() {
                    menu.classList.toggle('active');
                });
            });
        </script>
    <!-- end header -->
<?php
// You can add PHP logic here if needed
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freshness in Every Bite</title>
    <link rel="stylesheet" href="./css/content_head.css">
</head>
<body class="Main">
    <!-- Background container -->
    <div class="background-container">
        <img src="img/black bg.png" alt="Background">
    </div>
    
            <header class="navbar">
                <div class="logo">
                    <img src="img/logo.png" alt="logo">
                </div>

                <nav class="nav-links">
                    <a href="view/our_vision.php">Our Vision</a>
                    <a href="#">About Us</a>
                    <a href="#">Get Involved</a>
                </nav>

                <div class="nav-signin">
                    <a href="view/signin_front.php" class="signin-btn">Sign In</a>
                </div>
        </header>

    <section class="fresh">
        <div class="fresh-text">
            <h1>Freshness <br><span>in every bite</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quo studio.</p>
            <a href="view/get_started.php" class="btn">GET STARTED</a>
        </div>

        <div class="fresh-image">
            <img src="img/Lemon 1.png" class="lemon lemon1" alt="Lemon slice 1">
            <img src="img/salad.png" alt="Salad Plate" class="salad-img">
            <img src="img/Lemon 1.png" class="lemon lemon2" alt="Lemon slice 2">
            <img src="img/Lemon 1.png" class="lemon lemon3" alt="Lemon slice 3">
            <img src="img/Lemon 1.png" class="lemon lemon4" alt="Lemon slice 4">
            <img src="img/Leaf 1.png" class="leaf leaf1" alt="Leaf 1">
            <img src="img/Leaf 2.png" class="leaf leaf2" alt="Leaf 2">
            <img src="img/Leaf 2.png" class="leaf leaf3" alt="Leaf 3">
            <img src="img/Leaf 1.png" class="leaf leaf4" alt="Leaf 4">
            <img src="img/Leaf 2.png" class="leaf leaf5" alt="Leaf 5">
            <img src="img/Leaf 2.png" class="leaf leaf6" alt="Leaf 6">
        </div>
    </section>

    <!-- JavaScript to activate nav button -->
    <script>
        const navButtons = document.querySelectorAll('.nav-buttons .nav-btn');

        navButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                navButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
            });
        });
    </script>
</body>
</html>

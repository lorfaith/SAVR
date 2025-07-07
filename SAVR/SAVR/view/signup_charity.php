<?php
$isControllerLoad = (basename($_SERVER['PHP_SELF']) == 'index.php');
$cssPath = $isControllerLoad ? 'css/signup.css' : '../css/signup.css';
$imgPath = $isControllerLoad ? 'img/' : '../img/';
$backLink = $isControllerLoad ? 'index.php?command=signin' : '../index.php?command=signin';
$signinLink = $isControllerLoad ? 'index.php?command=signin' : 'signin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up</title>
  <link rel="stylesheet" href="../css/signup.css" />
</head>
<body>
  <div class="container">
    <!-- Left Panel (Image) -->
    <div class="right-panel">
      <img src="../img/signup.jpg" alt="Left Panel Image" />
    </div>

    <!-- Right Panel (Form) -->
    <div class="left-panel">
      <!-- Back Button positioned for right panel -->
      <a href="../index.php" class="back-button right">

        Back
      </a>

      <div class="form-box">
        <img src="../img/logo.png" alt="Logo" class="logo">
        <h2>Get Started Now</h2>
        <p>Enter your details to create your account</p>
        <form action="register_charity.php" method="POST">
          <label>Charity Representative Name</label>
          <input type="text" name="owner" required>

          <label>Email address</label>
          <input type="email" name="email" required>

          <label>Password</label>
          <input type="password" name="password" required>

          <div class="terms">
            <input type="checkbox" required>
            <span>I agree to the terms & policy</span>
          </div>

          <button type="submit">Sign Up</button>
        </form>

        <div class="or-divider">or</div>

        <div class="social-login horizontal">
          <div class="social-button">
            <button class="google">
              <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg"
                   width="20" height="20" style="vertical-align: middle; margin-right: 8px;">
              Sign up with Google
            </button>
          </div>
          <div class="social-button">
            <button class="apple">
              <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg"
                   width="20" height="20" style="vertical-align: middle; margin-right: 8px;">
              Sign up with Apple
            </button>
          </div>
        </div>

        <p class="signup-link">
          Have an account? <a href="signin.php">Sign In</a>
        </p>
      </div>
    </div>
  </div>
</body>
</html>
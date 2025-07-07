<?php
// Detect if we're being loaded through the controller or directly
$isControllerLoad = (basename($_SERVER['PHP_SELF']) == 'index.php');
$cssPath = $isControllerLoad ? 'css/signin.css' : '../css/signin.css';
$imgPath = $isControllerLoad ? 'img/' : '../img/';
$backLink = $isControllerLoad ? 'index.php?command=content' : '../index.php?command=content';
$signupLink = $isControllerLoad ? 'index.php?command=signup' : '../view/signup.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign In</title>
  <link rel="stylesheet" href="<?= $cssPath ?>"/>
</head>
<body>
  <div class="container">
    <!-- Left Panel -->
    <div class="left-panel">

      <!-- Back Button -->
      <a href="../index.php" class="back-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M15 8a.75.75 0 0 0-.75-.75H3.56l3.72-3.72a.75.75 0 1 0-1.06-1.06l-5 5a.75.75 0 0 0 0 1.06l5 5a.75.75 0 0 0 1.06-1.06L3.56 8.75H14.25A.75.75 0 0 0 15 8z"/>
        </svg>
        Back
      </a>

      <div class="form-box">
        <img src="<?= $imgPath ?>logo.png" alt="Logo" class="logo">
        <h2>Welcome back!</h2>
        <p>Enter your credentials to access your account</p>

        <form id="signinForm" action="welcome.php" method="POST">
          <label>Email address</label>
          <input type="email" name="email" id="email" required>

          <label>Password</label>
          <input type="password" name="password" id="password" required>

          <div class="terms">
            <input type="checkbox" required>
            <span>I agree to the terms & policy</span>
          </div>

          <button type="submit">Sign In</button>
        </form>

        <div class="or-divider">or</div>

        <div class="social-login horizontal">
          <div class="social-button">
            <button class="google">
              <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg"
                width="20" height="20" style="vertical-align: middle; margin-right: 8px;">
              Sign in with Google
            </button>
          </div>
          <div class="social-button">
            <button class="apple">
              <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg"
                width="20" height="20" style="vertical-align: middle; margin-right: 8px;">
              Sign in with Apple
            </button>
          </div>
        </div>

        <p class="signup-link">
          Don't have an account? <a href="../view/signup_customer.php">Sign Up</a>
        </p>
      </div>
    </div>

    <!-- Right Panel -->
    <div class="right-panel">
      <img src="<?= $imgPath ?>signin.png" alt="Right Panel Image" />
    </div>
  </div>

  <!--to validate before submit -->
  <script>
    document.getElementById('signinForm').addEventListener('submit', function(e) {
      const email = document.getElementById('email').value.trim();
      const password = document.getElementById('password').value.trim();

      if (!email || !password) {
        alert("Please enter both email and password.");
        e.preventDefault(); // Stop form from submitting
      }
    });
  </script>
</body>
</html>

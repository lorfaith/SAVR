<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Choose Verification</title>
  <link rel="stylesheet" href="../css/verification.css" />
</head>
<body>
  <div class="container">
    <h1>Choose verification</h1>

    <!-- Verification selection -->
    <div id="selection" class="button-group">
      <button class="verify-btn" onclick="showPhone()">Phone Number</button>
      <button class="verify-btn" onclick="showEmail()">Email</button>
    </div>

    <!-- Phone verification section -->
    <div id="phone-section" class="phone-verification hidden">
      <div class="button-group">
        <button class="verify-btn active">Phone Number</button>
        <button class="verify-btn" onclick="showEmail()">Email</button>
      </div>

      <p class="sent-code">Code has been sent to +639******689</p>

      <div class="otp-inputs">
        <input type="text" maxlength="1" />
        <input type="text" maxlength="1" />
        <input type="text" maxlength="1" />
        <input type="text" maxlength="1" />
        <input type="text" maxlength="1" />
        <input type="text" maxlength="1" />  
      </div>

      <p class="resend">Didn't get OTP code?<br><a href="#" onclick="resendCode('phone')" id="resend-phone">Resend Code</a></p>

      <a href="complete_ver.php" id="verify-phone" class="verify-final">Verify</a>
      <p class="otp-warning" id="warn-phone" style="display: none; color: red; margin-top: 10px;">Please enter all 6 digits to proceed.</p>
    </div>

    <!-- Email Verification Section -->
    <div id="email-section" class="verification-section hidden">
      <div class="button-group">
        <button class="verify-btn" onclick="showPhone()">Phone Number</button>
        <button class="verify-btn active">Email</button>
      </div>

      <p class="sent-code">Code has been sent to your email address</p>

      <div class="otp-inputs">
        <input type="text" maxlength="1" />
        <input type="text" maxlength="1" />
        <input type="text" maxlength="1" />
        <input type="text" maxlength="1" />
        <input type="text" maxlength="1" />
        <input type="text" maxlength="1" />
      </div>

      <p class="resend">Didn't get OTP code?<br><a href="#" onclick="resendCode('email')" id="resend-email">Resend Code</a></p>

      <a href="complete_ver.php" id="verify-email" class="verify-final">Verify</a>
      <p class="otp-warning" id="warn-email" style="display: none; color: red; margin-top: 10px;">Please enter all 6 digits to proceed.</p>
    </div>
  </div>

  <script>
    function showPhone() {
      document.getElementById('selection').style.display = 'none';
      document.getElementById('email-section').classList.add('hidden');
      document.getElementById('phone-section').classList.remove('hidden');
    }

    function showEmail() {
      document.getElementById('selection').style.display = 'none';
      document.getElementById('phone-section').classList.add('hidden');
      document.getElementById('email-section').classList.remove('hidden');
    }

    function resendCode(type) {
      const link = document.getElementById(`resend-${type}`);
      link.style.pointerEvents = "none";
      link.style.color = "gray";

      let seconds = 30;
      link.textContent = `Resend in ${seconds}s`;

      const interval = setInterval(() => {
        seconds--;
        if (seconds > 0) {
          link.textContent = `Resend in ${seconds}s`;
        } else {
          clearInterval(interval);
          link.textContent = "Resend Code";
          link.style.pointerEvents = "auto";
          link.style.color = "green";
        }
      }, 1000);
    }

    document.addEventListener("DOMContentLoaded", () => {
      const allOtpGroups = document.querySelectorAll(".otp-inputs");

      allOtpGroups.forEach(group => {
        const inputs = group.querySelectorAll("input");
        const section = group.closest(".verification-section") || document.getElementById("phone-section");
        const verifyBtn = section.querySelector(".verify-final");
        const warning = section.querySelector(".otp-warning");

        inputs.forEach((input, index) => {
          input.setAttribute("inputmode", "numeric");
          input.setAttribute("pattern", "[0-9]*");

          input.addEventListener("input", (e) => {
            const value = e.target.value.replace(/[^0-9]/g, '');
            e.target.value = value;

            if (value && index < inputs.length - 1) {
              inputs[index + 1].focus();
            }

            checkOtp(inputs, verifyBtn, warning);
          });

          input.addEventListener("keydown", (e) => {
            if (e.key === "Backspace" && !input.value && index > 0) {
              inputs[index - 1].focus();
            }
          });
        });

        verifyBtn.addEventListener("click", function(e) {
          const isComplete = Array.from(inputs).every(input => input.value.length === 1);
          if (!isComplete) {
            e.preventDefault();
            warning.style.display = "block";
          } else {
            warning.style.display = "none";
          }
        });
      });

      function checkOtp(inputs, button, warning) {
        const filled = Array.from(inputs).every(input => input.value.length === 1);
        if (filled) {
          warning.style.display = "none";
        }
      }
    });
  </script>
</body>
</html>

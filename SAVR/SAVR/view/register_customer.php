<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register Customer</title>
  <link rel="stylesheet" href="../css/register_customer.css" />
  
</head>
<body>
  <div class="container">
    <div class="form-section">
      <a href="..//view/signup_customer.php" class="back-button">Back</a>
      <h2>Give more details about you :)</h2>

      <form action="register_customer_id.php" method="POST">
        <label>Mobile Number</label>
        <input type="text" name="mobile" placeholder="+63" required />

        <label>Address</label>
        <input type="text" name="address" placeholder="Your address" required />

        <label>Date of Birth <span style="color: #888">(optional)</span></label>
        <input type="date" name="dob" />

        <button type="submit" class="proceed-btn">Proceed</button>
      </form>
    </div>

    <div class="image-section">
      <img src="../img/img1.png" alt="img1">
    </div>
  </div>
</body>

</html>

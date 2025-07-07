<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register Customer</title>
  <link rel="stylesheet" href="../css/register_store.css" />
  
</head>
<body>
  <div class="container">
    <div class="form-section">
      <a href="..//view/signup_charity.php" class="back-button">Back</a>
      <h2>Give more details about you :)</h2>

      <form action="register_charity_permit.php" method="POST">
        <label>Charity Name</label>
        <input type="text" name="Charity Nam" placeholder="Charity Name" required />

        <label>Mobile Number</label>
        <input type="text" name="mobile" placeholder="+63" required />

        <label>Organization Address</label>
        <input type="text" name="Organization Address" placeholder="Organization Address" required />

        <label>Purpose of the Organization/Mission Statement</label>
        <input type="text" name="Purpose" placeholder="Purpose" required />

        <button type="submit" class="proceed-btn">Proceed</button>
      </form>
    </div>

    <div class="image-section">
      <img src="../img/img1.png" alt="img1">
    </div>
  </div>
</body>

</html>

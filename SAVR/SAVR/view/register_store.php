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
      <a href="..//view/signup_store.php" class="back-button">Back</a>
      <h2>Give more details about you :)</h2>

      <form action="register_store_permit.php" method="POST">
        <label>Store Name</label>
        <input type="text" name="Store Name" placeholder="Store Name" required />

        <label>Mobile Number</label>
        <input type="text" name="mobile" placeholder="+63" required />

        <label>Address of Store</label>
        <input type="text" name="address" placeholder="Store Address" required />

        <label>Store Type</label>
        <input type="text" name="store type" placeholder="Store Type" required />

        <label>Operation Hours</label>
        <input type="text" name="operation hours" placeholder="E.g.: 8:00AM to 6:00PM" required />

        <button type="submit" class="proceed-btn">Proceed</button>
      </form>
    </div>

    <div class="image-section">
      <img src="../img/img1.png" alt="img1">
    </div>
  </div>
</body>

</html>

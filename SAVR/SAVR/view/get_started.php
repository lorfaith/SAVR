<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Choose Account Type</title>
  <link rel="stylesheet" href="../css/get_started.css" />
</head>
<body>

  <div class="container">
    <h1>Choose an Account Type :)</h1>
    <p>Choose what user account you want to sign up/sign in:</p>

    <div class="button-group">
      <button class="user-btn" onclick="goTo('customer')">Customer</button>
      <button class="user-btn" onclick="goTo('store')">Store</button>
      <button class="user-btn" onclick="goTo('qa')">QA</button>
      <button class="user-btn" onclick="goTo('charity')">Charity</button>
      <button class="user-btn" onclick="goTo('fda')">FDA</button>
    </div>
  </div>

  <script>
    function goTo(userType) {
      // You can replace the URLs below with your actual page routes
      const routes = {
        customer: 'signup_customer.php',
        store: 'signup_store.php',
        qa: 'signup_qa.php',
        charity: 'signup_charity.php',
        fda: 'signup_fda.php',
      };

      window.location.href = routes[userType];
    }
  </script>

</body>
</html>

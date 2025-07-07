<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Profile Setup</title>
  <link rel="stylesheet" href="../css/profile_setup.css" />
</head>
<body>
  <div class="container">
    <h1>Profile Setup</h1>
    <p>Please enter an optional profile picture</p>

    <div class="profile-pic-wrapper">
      <label for="profileInput">
        <img src="" id="profileImage" alt="Profile Picture" class="profile-pic" />
        <div class="edit-icon">✏️</div>
      </label>
      <input type="file" id="profileInput" accept="image/*" hidden />
    </div>

    <a href="welcome.php" class="finish-btn">Finish</a>
  </div>

  <script>
    const input = document.getElementById("profileInput");
    const image = document.getElementById("profileImage");

    input.addEventListener("change", function () {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
          image.setAttribute("src", e.target.result);
        };
        reader.readAsDataURL(file);
      }
    });
  </script>
</body>
</html>

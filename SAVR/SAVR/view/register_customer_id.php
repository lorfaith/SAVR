<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Upload Valid ID</title>
  <link rel="stylesheet" href="../css/register_customer_id.css" />
</head>
<body>
  <div class="container">
    <a href="../view/register_customer.php" class="back-button">Back</a>
    <div class="form-section">
      <h2>Give more details about you :)</h2>

      <form action="completing.php" method="POST" enctype="multipart/form-data" id="idForm">
        <label>Valid ID</label>
        <select name="id_type" required>
          <option value="">Select ID</option>
          <option value="national">National ID (Recommended)</option>
          <option value="driver">Driver's License</option>
          <option value="passport">Passport</option>
        </select>

        <div class="upload-box">
          <!-- FRONT SIDE -->
          <div class="upload-card">
            <label class="upload-photo">
              <input type="file" id="frontInput" accept="image/png, image/jpeg" hidden onchange="previewImage(this, 'frontPreview')" />
            </label>

            <label for="frontInput" class="image-wrapper">
              <img id="frontPreview" src="../img/national_front.png" alt="Front ID Preview" />
            </label>

            <p>Front Side</p>
            <div class="action-buttons">
              <button type="button" class="remove" onclick="removeImage('frontPreview')">Remove</button>
            </div>
          </div>

          <!-- BACK SIDE -->
          <div class="upload-card">
            <label class="upload-photo">
              <input type="file" id="backInput" accept="image/png, image/jpeg" hidden onchange="previewImage(this, 'backPreview')" />
            </label>

            <label for="backInput" class="image-wrapper">
              <img id="backPreview" src="../img/national_back.png" alt="Back ID Preview" />
            </label>

            <p>Back Side</p>
            <div class="action-buttons">
              <button type="button" class="remove" onclick="removeImage('backPreview')">Remove</button>
            </div>
          </div>
        </div>

        <button type="submit" class="proceed-btn">Proceed</button>
        <p id="id-warning">Please upload both front and back ID images.</p>
      </form>
    </div>

    <div class="image-section">
      <img src="../img/img2.png" alt="img2">
    </div>
  </div>

  <!-- JavaScript -->
  <script>
    function previewImage(input, imgId) {
      const file = input.files[0];
      const preview = document.getElementById(imgId);
      if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
          preview.src = e.target.result;
          preview.style.display = "block";
        };
        reader.readAsDataURL(file);
      }
    }

    function removeImage(imgId) {
      const preview = document.getElementById(imgId);
      preview.src = "../img/" + (imgId.includes("front") ? "national_front.png" : "national_back.png");
    }

    document.getElementById("idForm").addEventListener("submit", function (e) {
      const frontSrc = document.getElementById("frontPreview").src;
      const backSrc = document.getElementById("backPreview").src;

      if (frontSrc.includes("national_front.png") || backSrc.includes("national_back.png")) {
        e.preventDefault();
        document.getElementById("id-warning").style.display = "block";
      } else {
        document.getElementById("id-warning").style.display = "none";
      }
    });
  </script>
</body>
</html>

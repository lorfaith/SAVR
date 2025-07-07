<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Document Upload</title>
  <link rel="stylesheet" href="../css/register_store_permit.css" />

</head>
<body>
  <form action="register_store_id.php" method="POST" enctype="multipart/form-data" id="documentForm">
    <div class="container">
      <!-- Left Form Section -->
      <div class="left-section">
        <a href="../view/register_store.php" class="back-button">Back</a>
        <h2>Give more details about you<span style="color:#5a8f2c"> :)</span></h2>

        <label for="document-type">Document</label>
        <select id="document-type" name="document_type" required>
          <option value="">-- Select Document --</option>
          <option value="permit">Business Permit (Recommended)</option>
          <option value="barangay">Barangay Clearance</option>
          <option value="other">Other</option>
        </select>

        <!-- Tap Image to Upload -->
        <div class="image-preview">
          <img id="sampleImage" src="img/sample_permit.png" alt="Sample Document" style="cursor: pointer;" />
          <p class="caption">(Tap to upload your document)</p>
        </div>
            
        <!-- Scan Trigger + Upload + Remove All -->
        <div class="upload-scan">
          <input type="text" placeholder="Tap to scan" readonly id="scanTrigger" />
          <input type="file" id="fileInput" name="documents[]" accept="image/*" multiple hidden>
          <div class="upload-buttons">
            <button type="button" class="remove-btn" onclick="removeAllFiles()">Remove All</button>
          </div>
        </div>

        <!-- File Previews -->
        <div class="preview-container" id="imagePreview"></div>
        <p id="errorMsg" class="error-msg">Please upload at least one document before proceeding.</p>

        <button type="submit" class="proceed-btn">Proceed</button>
      </div>

      <!-- Right Image Section -->
      <div class="right-section">
        <img src="../img/img3.png" alt="Basket Preview" />
      </div>
    </div>
  </form>

  <!-- Script -->
  <script>
    const fileInput = document.getElementById('fileInput');
    const scanTrigger = document.getElementById('scanTrigger');
    const imagePreview = document.getElementById('imagePreview');
    const errorMsg = document.getElementById('errorMsg');
    let selectedFiles = [];

    // Trigger file input
    document.getElementById('sampleImage').addEventListener('click', () => fileInput.click());
    scanTrigger.addEventListener('click', () => fileInput.click());

    fileInput.addEventListener('change', () => {
      selectedFiles = Array.from(fileInput.files);
      updatePreview();
    });

    function updatePreview() {
      imagePreview.innerHTML = "";
      scanTrigger.value = `${selectedFiles.length} file(s) selected`;
      errorMsg.style.display = "none";

      selectedFiles.forEach((file, index) => {
        const reader = new FileReader();
        reader.onload = function (e) {
          const wrapper = document.createElement("div");
          wrapper.className = "image-box";

          const img = document.createElement("img");
          img.src = e.target.result;

          const removeBtn = document.createElement("button");
          removeBtn.className = "remove-single";
          removeBtn.innerHTML = "×";
          removeBtn.addEventListener('click', () => {
            selectedFiles.splice(index, 1);
            updatePreview();
          });

          wrapper.appendChild(img);
          wrapper.appendChild(removeBtn);
          imagePreview.appendChild(wrapper);
        };
        reader.readAsDataURL(file);
      });

      // Reconstruct file input so only selected ones are submitted
      const dataTransfer = new DataTransfer();
      selectedFiles.forEach(file => dataTransfer.items.add(file));
      fileInput.files = dataTransfer.files;

      if (selectedFiles.length === 0) scanTrigger.value = "";
    }

    function removeAllFiles() {
      selectedFiles = [];
      fileInput.value = '';
      scanTrigger.value = '';
      imagePreview.innerHTML = '';
    }

    document.getElementById('documentForm').addEventListener('submit', function (e) {
      if (fileInput.files.length === 0) {
        e.preventDefault();
        errorMsg.style.display = "block";
      }
    });
  </script>
</body>
</html>

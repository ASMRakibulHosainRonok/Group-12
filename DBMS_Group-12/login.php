<!-- login.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    /* CSS styles */
  </style>
</head>
<body>
  <div class="card">
    <h2>Login</h2>
    <select id="options">
      <option value="" disabled selected>Select an option</option>
      <option value="f_login">Farmer_login</option>
      <option value="A_lonin">Agricultural Experts_lonin</option>
      <option value="admin_login">Admin_login</option>
    </select>
  </div>

  <script>
    document.getElementById("options").addEventListener("change", function() {
      var selectedOption = this.value;
      if (selectedOption) {
        window.location.href = selectedOption + ".html";
      }
    });
  </script>
</body>
</html>
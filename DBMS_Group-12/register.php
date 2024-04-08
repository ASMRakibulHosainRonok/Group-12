<!-- login.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registion Page</title>
  <style>
    /* CSS styles */
  </style>
</head>
<body>
  <div class="card">
    <h2>Register</h2>
    <select id="options">
      <option value="" disabled selected>Select an option</option>
      <option value="f_register">Farmer</option>
      <option value="A_register">Agricultural Experts</option>
    </select>
  </div>

  <script>
    document.getElementById("options").addEventListener("change", function() {
      var selectedOption = this.value;
      if (selectedOption) {
        window.location.href = selectedOption + ".php";
      }
    });
  </script>
</body>
</html>
<!-- register_option1.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Agricultural Experts</title>
  <style>
    /* CSS styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .card {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      padding: 20px;
      width: 300px;
      text-align: center;
    }
    .input-group {
      margin-bottom: 20px;
      text-align: left;
    }
    .input-group label {
      display: block;
      margin-bottom: 5px;
    }
    .input-group input {
      width: 100%;
      padding: 8px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }
    .button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>Registration Agricultural Experts</h2>
    <div class="input-group">
      <label for="firstName">First Name:</label>
      <input type="text" id="firstName" name="firstName">
    </div>
    <div class="input-group">
      <label for="lastName">Last Name:</label>
      <input type="text" id="lastName" name="lastName">
    </div>
    <div class="input-group">
      <label for="phoneNumber">Phone Number:</label>
      <input type="text" id="phoneNumber" name="phoneNumber">
    </div>
    <div class="input-group">
      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email">
    </div>
    <div class="input-group">
      <label for="qualifications">Qualifications:</label>
      <input type="text" id="qualifications" name="qualifications">
    </div>
    <div class="input-group">
      <label for="specialization">Specialization:</label>
      <input type="text" id="specialization" name="specialization">
    </div>
    <div class="input-group">
      <label for="workExperience">Work Experience:</label>
      <input type="text" id="workExperience" name="workExperience">
    </div>
    <div class="input-group">
      <label for="organization">Name of Organization:</label>
      <input type="text" id="organization" name="organization">
    </div>
    <button class="button" onclick="register()">Register</button>
  </div>

  <script>
    function register() {
      // Perform registration actions here
      alert("Registration button clicked!");
      // Redirect to another page if needed
      window.location.href = "registered.php";
    }
  </script>
</body>
</html>

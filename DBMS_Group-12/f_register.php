<!-- register_option1.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Farmer</title>
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
    <h2>Registration Farmer</h2>
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
      <label for="division">Division:</label>
      <input type="text" id="division" name="division">
    </div>
    <div class="input-group">
      <label for="district">District:</label>
      <input type="text" id="district" name="district">
    </div>
    <div class="input-group">
      <label for="subDistrict">Sub District:</label>
      <input type="text" id="subDistrict" name="subDistrict">
    </div>
    <div class="input-group">
      <label for="village">Village:</label>
      <input type="text" id="village" name="village">
    </div>
    <button class="button" onclick="register()">Register</button>
  </div>

  <script>
    function register() {
      // Redirect to another page
      window.location.href = "f_login.php";
    }
  </script>
  
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Option 1</title>
  <style>
   
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
    }
    .input-group label {
      display: block;
      text-align: left;
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
    <h2>Login - Farmer </h2>
    <div class="input-group">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username">
    </div>
    <div class="input-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password">
    </div>
    <button class="button" onclick="login()">Login</button>
  </div>

  <script>
    function login() {
      // Redirect to another page if needed
      window.location.href = "f_homePage.php";
    }
  </script>
</body>
</html>

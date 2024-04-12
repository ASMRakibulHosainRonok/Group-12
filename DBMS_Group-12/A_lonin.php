
<!DOCTYPE html>
<html lang="en">
include 'A_lonin.php';
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login </title>
</head>
<body>
  <div class="card">
    <h2>Login - Agricultural Experts </h2>
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
      // Perform login actions here
      alert("Login button clicked!");
      // Redirect to another page if needed
      window.location.href = "loggedin.php";
    }
  </script>
</body>
</html>

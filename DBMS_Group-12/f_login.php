<?php
session_start(); // Start the session at the beginning

include 'Connection.php'; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user input
    $fphone_number = $_POST["fphone_number"];
    $password = $_POST["password"];

    // Validate the user credentials
    $query = "SELECT * FROM farmer WHERE fphone_number = '$fphone_number' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    // Check for query execution success
    if ($result) {
        // Check if a row is returned, indicating valid credentials
        if (mysqli_num_rows($result) > 0) {
            // Set a session variable indicating the user is logged in
            $_SESSION['loggedin'] = true;

            // Redirect to admin homepage
            header("Location: F_homePage.php");
            exit();
        } else {
            // Invalid credentials
            $error_message = "Invalid email or password";
        }
    } else {
        // Query execution failed
        $error_message = "Database error: " . mysqli_error($conn);
    }
}

?>

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
    <form  method="post">
    <div class="input-group">
      <label for="fphone_number">Username:</label>
      <input type="text" id="fphone_number" name="fphone_number" required>
    </div>
    <div class="input-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <button class="button" type="submit">Login</button>
    </form>
  </div>

<script>
function redirectToPage() {
  var x = document.getElementById("userType").value;
  if (x) {
    window.location.href = x;
  }
}
</script>

</body>
</html>

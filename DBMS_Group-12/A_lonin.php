
<?php
session_start(); // Start the session at the beginning

include 'Connection.php'; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user input
    $fphone_number = $_POST["aphone_number"];
    $password = $_POST["password"];

    // Validate the user credentials
    $query = "SELECT * FROM agricultural_experts WHERE aphone_number = '$fphone_number' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    // Check for query execution success
    if ($result) {
        // Check if a row is returned, indicating valid credentials
        if (mysqli_num_rows($result) > 0) {
            // Set a session variable indicating the user is logged in
            $_SESSION['loggedin'] = true;

            // Redirect to admin homepage
            header("Location: Agri_exp.php");
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
  <title>Login </title>
  <style>
    body, html {
    height: 100%;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative; /* Add this line */
}

.card {
    width: 300px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(250, 247, 247, 0.1);
    position: relative; /* Add this line */
}

.input-group {
    margin-bottom: 10px;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
}

.input-group input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

.button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #000000;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

h2 {
    color: #000000;
}

label {
    color: #000000;
}
  </style>
</head>
<body background="40.JPEG">
  <div class="card">
    <h2>Login - Agricultural Experts </h2>
    <div class="input-group">
      <label for="aphone_number">Phone Number:</label>
      <input type="text" id="aphone_number" name="aphone_number">
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
      window.location.href = "Agri_exp.php";
    }
  </script>
</body>
</html>
